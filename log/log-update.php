<?php
require_once "../includes/dbh.inc.php";
function getIconHTML($c_id) {
    global $pdo; // Access the global database connection

    // Query the status for the specified c_id
    $query = "SELECT status FROM classroom WHERE c_id = :c_id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':c_id', $c_id);
    $stmt->execute();

    // Fetch the status
    $status = $stmt->fetchColumn();

    if ($status == "occupied") {
        return '<img src="../images/icons/close.svg" alt="close">';
    } elseif ($status == "vacant") {
        return '<img src="../images/icons/check.svg" alt="check">';
    } else {
        // Handle the case when the status is neither 'occupied' nor 'vacant'
        return '<img src="unknown.svg" alt="Unknown Icon">';
    }
}

?>
<?php
require_once "../includes/dbh.inc.php";

// Function to get the icon HTML based on the classroom status
function getButton($c_id) {
    global $pdo; // Access the global database connection

    // Query the status for the specified c_id
    $query = "SELECT status FROM classroom WHERE c_id = :c_id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':c_id', $c_id);
    $stmt->execute();

    // Fetch the status
    $status = $stmt->fetchColumn();

    if ($status == "occupied") {
        return 'class="button-yes"';
    } elseif ($status == "vacant") {
        return 'class="button-no"';
    } else {
        // Handle the case when the status is neither 'occupied' nor 'vacant'
        return '<img src="unknown.svg" alt="Unknown Icon">';
    }
}

?>
<?php
require_once "../includes/dbh.inc.php";

// Function to get the icon HTML based on the classroom status
function getMsg($c_id) {
    global $pdo; // Access the global database connection

    // Query the status for the specified c_id
    $query = "SELECT status FROM classroom WHERE c_id = :c_id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':c_id', $c_id);
    $stmt->execute();

    // Fetch the status
    $status = $stmt->fetchColumn();

    if ($status == "occupied") {
        return 'End Class';
    } elseif ($status == "vacant") {
        return 'Use Classroom';
    } else {
        // Handle the case when the status is neither 'occupied' nor 'vacant'
        return '<img src="unknown.svg" alt="Unknown Icon">';
    }
}

?>

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

<?php include '../includes/navagation-for-log.php';?>

        <section>
<?php
require_once '../includes/dbh.inc.php'; // database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Kuhaon ang c_id
        $classroomId = $_POST['classroomId'];

        // kuhaon ang status according sa classroom id
        $stmt = $pdo->prepare("SELECT status, classroomName FROM classroom WHERE c_id = :classroomId");
        $stmt->bindParam(':classroomId', $classroomId, PDO::PARAM_INT);
        $stmt->execute();

        $row = $stmt->fetch(); // Fetch the row from the database

        if ($row) {
            // if current status is vacant, when clicked it will change to occupied vice versa
            $newStatus = ($row['status'] === 'vacant') ? 'occupied' : 'vacant';

            // updating status
            $stmt = $pdo->prepare("UPDATE classroom SET status = :newStatus WHERE c_id = :classroomId");
            $stmt->bindParam(':newStatus', $newStatus, PDO::PARAM_STR);
            $stmt->bindParam(':classroomId', $classroomId, PDO::PARAM_INT);

            if ($stmt->execute()) {
                // Display updated information
                

              echo '<div class="container">';
              echo '<div class="upper-container">';
              echo '<div class="image-container">';
              echo '<img src="../images/classroom/classroom.jpg" alt="classroom"></div>';
              echo '<div class="detail-container">';
              echo '<div class="classroom-name">' . htmlspecialchars($row["classroomName"]) .'</div>';
              echo '<div class="classroom-status">'.getIconHTML($classroomId).'</div>';
              echo '</div>';
              echo '</div>';
              echo '<div class="lower-container">';
              echo '<form method="post" action="log-update.php">';
              echo '<button '.getButton($classroomId).' type="submit" name="classroomId" value="' . htmlspecialchars($classroomId) .'">'.getMsg($classroomId).'</button></div>';
              echo '</form>';
              header("location: log.php");

                /* 
                echo '<div class="div1" id="modal1">';
                echo '<div class="diva"><img src="https://images.pexels.com/photos/207691/pexels-photo-207691.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="example" class="img1"></div>';
                echo '<div class="divb">';
                echo '<div class="classroom-name">' . htmlspecialchars($row["classroomName"]) . '</div>';
                echo '<div>';
                echo '<div>';
                echo '<h3 style="color: green">' . htmlspecialchars($newStatus) . '</h3>';
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
                echo '<form method="post" action="../private-includes/update.php">';
                echo '<button class="btn-yes" type="submit" name="classroomId" value="' . htmlspecialchars($classroomId) . '">';
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
                */
            } else {
                echo 'Error updating status.';
            }
        } else {
            echo 'Classroom not found.';
        }
    } catch (PDOException $e) {
        echo 'Error updating status.';
    }
} else {
    // invalid requests
    echo '<div class="page">';
    echo '<h1>No pending logs.</h1>';
    echo '<div class="newtons-cradle">';
    echo '<div class="newtons-cradle__dot"></div>';
    echo '<div class="newtons-cradle__dot"></div>';
    echo '<div class="newtons-cradle__dot"></div>';
    echo '<div class="newtons-cradle__dot"></div>';
    echo '</div>';
    echo '</div>';


}
?>

 </section>
       <script>
function setupModalAndDialog(modalId, dialogId) {
    const modal = document.getElementById(modalId);
    const dialog = document.getElementById(dialogId);

    modal.addEventListener('click', () => {
      dialog.showModal();
    });

     const closeButton = dialog.querySelector('.noway');
     closeButton.addEventListener('click', () => {
      dialog.close();
    });
    const closeIcon = dialog.querySelector('.display-close'); 
  closeIcon.addEventListener('click', () => {
    dialog.close();
  });
  }

  // Set up event listeners for each modal and dialog
  setupModalAndDialog('modal1', 'dialog1');
  setupModalAndDialog('modal2', 'dialog2');
  setupModalAndDialog('modal3', 'dialog3');
  setupModalAndDialog('modal4','dialog4');

  // Add more modals and dialogs by calling setupModalAndDialog with different IDs

</script>

    </div>

</body>
<script>
     function suggestion(text) {
      var inputText = document.getElementById("search");


      inputText.value = text;
    }
  </script>
    </div>
    <style>

@media (min-width: 768px) {

.container{
 display: flex;
 align-items: center;
 height: 100vh;
}
.upper-container{
 display: flex;
 align-items: flex-start;
 width: 90%;
}
  
.button-yes {
  cursor: pointer;
  border-radius: 0.375rem;
  background-color: #DC2626;
  color: #fbfbfb;
  position: relative;
  font-size: 20px;
  padding: 13px 24px;
  height: 100%;
  width: 100%;
  margin: 20px;
 font-weight: bolder;
 border: 3px solid #DC2626;
}

.button-yes:hover {
  background-color: #FEE2E2;
  color: #DC2626;
  border: 3px solid #DC2626;
}
 
.button-no {
  cursor: pointer;
  border-radius: 0.375rem;
  background-color: #10B981;
  color: #fbfbfb;
  position: relative;
  font-size: 20px;
  padding: 13px 24px;
  height: 100%;
  width: 100%;
  margin: 20px;
 font-weight: bolder;
 border: 3px solid #10B981;
}

.button-no:hover {
  background-color: #d4ecd4;
  color: #10B981;
  border: 3px solid #10B981;
}

 .lower-container{
  width: 10%;
  z-index: 999;
  position: fixed;
  right: 6%;
  width: 300px;
  

 }
 .lower-container button{
  font-size: 25px;
 }
 .classroom-name{
  font-size: 60px;
  text-align: center;
  font-family:Helvetica, Arial;
  
 }
 .image-container{
  position: fixed;
  top:5%;
  height: 90%;

 }
 .image-container img{
  height:100%;
  width:100%;
  object-fit: cover;
  border-radius:40px;
  
 }
 .detail-container{
  display: flex;
  flex-direction: row;
  justify-content: flex-start;
  align-items: center;
  height: 40px;
  font-size: 25px;
  margin-top:5px;
  position: fixed;
  right:3%;
  top:30%;
 }
 .classroom-status img{
   height: 30px;
   width: 40px;
   margin-top:-20px;
  margin-left:-10px;
 }
}
 


/* Mobile Layout */
@media (max-width: 767px) {

  section{
    margin:5px;
  }
 .button-yes {
  cursor: pointer;
  border-radius: 0.375rem;
  background-color: #DC2626;
  color: #fbfbfb;
  position: relative;
  font-size: 20px;
  padding: 13px 24px;
  height: 100%;
  width: 100%;
  margin: 20px;
 font-weight: bolder;
 border: 3px solid #DC2626;
}

.button-yes:hover {
  background-color: #FEE2E2;
  color: #DC2626;
  border: 3px solid #DC2626;
}
.button-no {
  cursor: pointer;
  border-radius: 0.375rem;
  background-color: #10B981;
  color: #fbfbfb;
  position: relative;
  font-size: 20px;
  padding: 13px 24px;
  height: 100%;
  width: 100%;
  margin: 20px;
 font-weight: bolder;
 border: 3px solid #10B981;
}

.button-no:hover {
  background-color: #d4ecd4;
  color: #10B981;
  border: 3px solid #10B981;
}



 .container{
  display: flex;
  flex-direction: column;
  align-items: center;

 }
 .upper-container{
  display: flex;
  flex-direction: column;
  align-items: center;


 }
 .detail-container{
  display: flex;
  justify-content: center;
  align-items: center;
  column-gap: 20px;
 }
 .image-container{
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 20px;
  object-fit: cover;
  height: 100%;
  width: 100%;
  
 }
 .image-container img{
  object-fit: cover;
  height: 100%;
  width: 100%;
 }
 .lower-container{
  width:100%;
  display: flex;
  justify-content: center;
  flex-direction: column;
  align-items: center;
  border-radius: 15px;
  margin-top: 20px;
 }
.lower-container form{
  display: flex;
  justify-content: center;
  flex-direction: column;
  align-items: center;
}

 .container{
  display: flex;
  flex-direction: column;
  align-items: center;
  height:100%;
  width: 100%;

 }
 .upper-container{
  display: flex;
  flex-direction: column;
  align-items: center;
  height: 50%;
  width: 100%;
  margin-top: 20%;


 }
 .detail-container{
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
  column-gap: 20px;
  height: 40px;
  width: 100%;
  font-size: 25px;
  margin-top:5px;
 }
 .image-container{
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 15px;
  object-fit: cover;
  height: 100%;
  width: 100%;
  box-sizing: border-box;
  overflow: hidden;
 }
 .classroom-name{
  font-family: Helvetica, Arial;
  font-size: 25px;
  margin-left: 10px;
  font-variant: small-caps;
 }
 .classroom-status{
  margin-right: 10px;
  margin-top: -10px ;
 }
 .classroom-status img{
  width:20px;
  height: 20px;
 }
 .image-container img{
  object-fit: cover;
  height: 100%;
  width: 100%;
 }



 }
</style>

</body>
</html>
