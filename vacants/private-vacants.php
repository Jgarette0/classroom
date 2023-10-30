<!--
  #This will handle para makita tanang bakanteng classroom para sa maestra
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacant classroom</title>
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
<?php include '../includes/navagation-for-private-vacants.php';?>
        <section>
        <?php 
 
 require_once "../includes/dbh.inc.php";
    
    // Modify the SQL query to select all vacant classrooms
    $query = "SELECT * FROM classroom WHERE status = 'vacant';";

    $stmt = $pdo->prepare($query);

    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach($results as $row){
           
          echo '<div class="div1" id="modal1">';
          echo '<div class="diva"><img src="../images/classroom/classroom'. htmlspecialchars($row["c_id"]) . '.jpg" alt="example" class="img1"></div>';
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
          echo 'Do you want to use '. htmlspecialchars($row["classroomName"]) .'?';
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

        $pdo = null;
        $stmt = null;
     


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


  setupModalAndDialog('modal1', 'dialog1');
  setupModalAndDialog('modal2', 'dialog2');
  setupModalAndDialog('modal3', 'dialog3');
  setupModalAndDialog('modal4','dialog4');


</script>
<style>
  p{
    color: red;
    text-align: center;
      font-size: 18px;
      padding: 20px;
      background-color: #f8f8f8;
      border: 1px solid red;
      border-radius: 5px;
    margin-top: 50px;
  }
  h3 {
  position: absolute;
    bottom: 3%;
  left: 87%;
  transform: translateX(-50%);
  color: var(--light-color);
  padding: 5px;
  border-radius: 25%; 
  z-index: 1; 
  cursor: pointer;

}

  .classroom-btn{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    height: 200px;
    box-sizing: border-box;
    overflow: hidden;
    margin: 0px 30px;
    margin-top: 70px;
  }
  .cbutton{
    border: 1px gray solid;
    background-color: transparent;
    font-size: 20px;
    padding: 12px 22px;
    border-radius: 30px;
    margin:2px 10px;
    cursor: pointer;
  }
  .cbutton:hover{
    transition:ease .3s;
    background-color: #181818;
    color: #fbfbfb;
  }
  section{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }
  .img1{
    background-color: cornflowerblue;
    width: 100%;
    height: 100%;
 
  }
  .div1{
    margin-top: 75px;
   border-radius: 20px;
  }
  @media (max-width: 767px) {
  /* Add your mobile layout styles here */
  .classroom-btn{
    height: 250px;
    box-sizing: border-box;
    overflow: hidden;
    margin: 0px 5px;
    margin-top: 70px;
  }
  .div1{
    margin-top: 15px;
   border-radius: 20px;
  }
  .cbutton{
    border: 1px gray solid;
    background-color: transparent;
    font-size: 15px;
    padding: 12px 15px;
    border-radius: 25px;

  }
  .div1{
  margin-top: 75px;
}
}

/* Desktop Layout */
@media (min-width: 768px) {
  /* Add your desktop layout styles here */


}


</style>
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
  nav{
    z-index: 999;
  }
</style>
</body>
<script type="module" src="../js/vacant-mode.js"></script>
</html>
