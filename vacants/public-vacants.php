<!--
  #This will handle para makita tanang bakanteng classroom
-->
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
</head>
<body>
<?php include '../includes/navagation-for-public-vacant.php';?>
<?php

    require_once "../includes/dbh.inc.php";
    
    // Modify the SQL query to select all vacant classrooms
    $query = "SELECT * FROM classroom WHERE status = 'vacant';";

    $stmt = $pdo->prepare($query);

    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Output the results
    foreach ($results as $row) {
      echo '<main class="main">';
      echo '<div class="div1" id="modal1">';
      echo '<div class="diva"><img src="../images/classroom/classroom'./* htmlspecialchars($row["c_id"]).*/ '.jpg" alt="example" class="img1"></div>';
      echo '<div class="divb">';
      echo '<div class="classroom-name">' . htmlspecialchars($row["classroomName"]) . '</div>';
      echo '<div>';
      echo '<div>';
      echo '<h3 style="color: green">' . htmlspecialchars($row["status"]) . '</h3>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '</main>';
    }

    $pdo = null;
    $stmt = null;

?>
<style>
nav{
  z-index: 100;
}
  
</style>
</body>
     </html>
