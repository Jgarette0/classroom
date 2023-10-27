<?php include '../includes/functions-for-log.php';?>
<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Minimalist Search Form</title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="../css/navbar.css">
      <link rel="stylesheet" href="../css/main.css">
      <link rel="stylesheet" href="../css/responsive.css">
      <link rel="stylesheet" href="../css/navbar-bottom.css">
      <link rel="stylesheet" href="../css/map.css">
      <link rel="stylesheet" href="../css/log.css">
    </head>
    <body>



      <section>
          <?php
          require_once '../includes/dbh.inc.php';

          if ($_SERVER['REQUEST_METHOD'] === 'POST') 
          {
            try 
            {
            
                  $classroomId = $_POST['classroomId'];

                  $stmt = $pdo->prepare("SELECT status, classroomName FROM classroom WHERE c_id = :classroomId");
                  $stmt->bindParam(':classroomId', $classroomId, PDO::PARAM_INT);
                  $stmt->execute();

                  $row = $stmt->fetch(); 

                  if ($row) 
                  {
              
                    $newStatus = ($row['status'] === 'vacant') ? 'occupied' : 'vacant';

                    $stmt = $pdo->prepare("UPDATE classroom SET status = :newStatus WHERE c_id = :classroomId");
                    $stmt->bindParam(':newStatus', $newStatus, PDO::PARAM_STR);
                    $stmt->bindParam(':classroomId', $classroomId, PDO::PARAM_INT);

                    if ($stmt->execute()) 
                    {

                      echo '<div class="container">';
                      echo '<div class="upper-container">';
                      echo '<div class="image-container">';
                      echo '<img src="../images/classroom/classroom'.$classroomId.'.jpg" alt="classroom"></div>';
                      echo '<div class="detail-container">';
                      echo '<div class="classroom-name">' . htmlspecialchars($row["classroomName"]) .'</div>';
                      echo '<div class="classroom-status">'.getIconHTML($classroomId).'</div>';
                      echo '</div>';
                      echo '</div>';
                      echo '<div class="lower-container">';
                      echo '<form method="post" action="log-update.php">';
                      echo '<button '.getButton($classroomId).' type="submit" name="classroomId" value="' . htmlspecialchars($classroomId) .'">'.getMsg($classroomId).'</button></div>';
                      echo '</form>';
                        
                    } 
                    else 
                    {
                      echo 'Error updating status.';
                    }
                  } 
                  else 
                  {
                    echo 'Classroom not found.';
                  }
            } 
            catch (PDOException $e) 
            {
              echo 'Error updating status.';
            }
          } 
          else 
          {
            echo '<div class="page">';
            echo '<h1>No pending logs.</h1>';
            echo '<div class="newtons-cradle">';
            echo '<div class="newtons-cradle__dot"></div>';
            echo '<div class="newtons-cradle__dot"></div>';
            echo '<div class="newtons-cradle__dot"></div>';
            echo '<div class="newtons-cradle__dot"></div>';
            echo '</div>';
            echo '</div>';
            include '../includes/navagation-for-log.php';
          }
        ?>
      </section>



    </body>
  </html>
