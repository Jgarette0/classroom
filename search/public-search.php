
<!--
  This will handle public static search page
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
<link rel="stylesheet" href="../css/navbar-top.css">
<link rel="stylesheet" href="../css/navbar.css">
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/responsive.css">
<link rel="stylesheet" href="../css/navbar-bottom.css">
<link rel="stylesheet" href="../css/map.css">
<link rel="stylesheet" href="../css/private-search.css">
</head>
<body>
      <nav>
      <div class="navbar" id="navbar">
      <a href="../index.php">
          <div class="profile-holder">
            <button id="profileBtn">
            <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
            <lord-icon
                src="https://cdn.lordicon.com/zxvuvcnc.json"
                trigger="click"
                colors="primary:#30c04f,secondary:#30c04f" style="width:25px;height:25px;">
            </lord-icon>
            </button>
          </div>
        </a>
        <div class="search-container">
          <form class="searchform" action='../search/public-search.php' method="post">
            <a>
              <button type="submit" class="submits">
                <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="click" colors="primary:#30c04f,secondary:#30c04f" style="width:30px;height:30px;">
                </lord-icon>
              </button>
              </a>
              <a>
                <input id="search" type="text" name="usersearch" placeholder="Search...">
            </a>
          </form>
        </div>
        <div class="label-checkbox">
        <label for="checkbox">
          <input class="checkbox" type="checkbox" id="checkbox" style="display: none;">
          <img src="../../images/icons/dark.svg" alt="Unchecked" class="dark-icon">
          <img src="../../images/icons/light.svg" alt="Checked" class="light-icon">
        </label>
        </div>
      </div>
    </nav>
    <div class="classroom-btn">
      <button class="cbutton" onclick="suggestion('Computer Laboratory')">Computer Laboratory</button>
      <button class="cbutton" onclick="suggestion('Lecture Room')">Lecture Room</button>
      <button class="cbutton" onclick="suggestion('TVL Room')">TVL Room</button>
      <button class="cbutton" onclick="suggestion('MD Room')">MD Room</button>
      <button class="cbutton" onclick="suggestion('SA Room')">SA Room</button>
       <button class="cbutton" onclick="suggestion('Computer Laboratory')">Computer Laboratory</button>
       <button class="cbutton" onclick="suggestion('Computer Laboratory')">Computer Laboratory</button>
      <button class="cbutton" onclick="suggestion('Lecture Room')">Lecture Room</button>
      <button class="cbutton" onclick="suggestion('TVL Room')">TVL Room</button>
      <button class="cbutton" onclick="suggestion('MD Room')">MD Room</button>
      <button class="cbutton" onclick="suggestion('SA Room')">SA Room</button>
       <button class="cbutton" onclick="suggestion('Computer Laboratory')">Computer Laboratory</button>
     
    </div>
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
        echo "<p>There were no results!</p>";
        echo "</div>";
       }
       else{

        foreach($results as $row){
           
          echo '<div class="div1" id="modal1">';
          echo '<div class="diva"><img src="../images/classroom/classroom' . htmlspecialchars($row["c_id"]) . '.jpg" alt="example" class="img1"></div>';
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
          
        }

       }
     

       ?>
       </section>

<style>
  p{
    color: red;
    text-align: center;
      font-size: 18px;
      padding: 20px;
      background-color: transparent;
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
  border-radius: 25%; /* If you want to make the icon circular */
  z-index: 1; /* Ensure the icon is above the image */
  cursor: pointer;

}
  .classroom-btn{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    height: 175px;
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
    margin-top:10px;
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
  <script type="module" src="../js/vacant-mode.js"></script>
</html>
