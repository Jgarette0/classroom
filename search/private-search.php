<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minimalist Search Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../css/private-search.css">
<link rel="stylesheet" href="../css/navbar-top.css">
<link rel="stylesheet" href="../css/navbar.css">
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/responsive.css">
<link rel="stylesheet" href="../css/navbar-bottom.css">
<link rel="stylesheet" href="../css/map.css">
</head>
<body>
<?php include '../includes/navagation-for-private-search.php';?>
<?php include '../includes/search-suggestion-for-private-search.php';?>
  <section>
        <?php 
 
 if($_SERVER["REQUEST_METHOD"] == "POST"){
   $userSearch = $_POST["usersearch"];
 
   try {
     require_once "../includes/dbh.inc.php";
     $query = "SELECT * FROM classroom WHERE classroomName = :usersearch;";
 
     $stmt = $pdo -> prepare($query);
 
     $stmt -> bindParam(":usersearch",$userSearch);
  
 
     $stmt-> execute();
     $results = $stmt ->fetchAll(PDO::FETCH_ASSOC);
 
     $pdo = null;
     $stmt = null;
   }
   catch(PDOException $e){
     die("Query failed: ".$e->getMessage()); 
    }
    
    } 
    else {
    
    }
    ?>
 
       <?php 
        
       if(empty($results)){
        echo "<div>";
        echo "<p>There is no result!.</p>";
        echo "</div>";
       }
       else{

        foreach($results as $row){
           
          echo '<div class="div1" id="modal1">';
          echo '<div class="diva"><img src="../images/classroom/classroom'. htmlspecialchars($row["c_id"]). '.jpg" alt="example" class="img1"></div>';
          echo '<div class="divb">';
          echo '<div class="classroom-name">' . htmlspecialchars($row["classroomName"]) . '</div>';
          echo '<div>';
          echo '<div>';
          echo '<h3 style="color: green">' . htmlspecialchars($row["status"]) . '</h3>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
          echo '<div class="displays">';
          echo '<dialog class="dialog" id="dialog1">';
          echo '<div class="dialog-content">';
          echo '<div class="display-close">x</div>';
          echo '<div class="display-header">';
          echo 'Do you want to use this room1?';
          echo '</div>';
          echo '<div class="display-buttons">';
          echo '<form method="post" action="../log/log.php">';
          echo '<button class="btn-yes" type="submit" name="classroomId" value="' . htmlspecialchars($row["c_id"]) . '">';
          echo 'Yes';
          echo '</button>';
          echo '</form>';
          echo '<button class="noway">';
          echo 'No';
          echo '</button>';
          echo '</div>';
          echo '</div>';
          echo '</dialog>';
          echo '</div>';
          
        }

       }
     


       ?>
    
      </div>
    </div>
  </section>
<script src="../js/private-search.js" ></script>
<script type="module" src="../js/vacant-mode.js"></script>
</body>
</html>
