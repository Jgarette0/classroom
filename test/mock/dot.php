<?php
require_once "../../includes/dbh.inc.php";

// Function to display status color based on the classroom status in database
function getColor($c_id) {
    global $pdo; // Access the global database connection

    // Query the status for the specified c_id
    $query = "SELECT status FROM classroom WHERE c_id = :c_id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':c_id', $c_id);
    $stmt->execute();

    // Fetch the status
    $status = $stmt->fetchColumn();

    if ($status == "occupied") {
        return 'class="red"';
    } elseif ($status == "vacant") {
        return 'class="green"';
    } else {
        // Handle the case when the status is neither 'occupied' nor 'vacant'
        return 'class="gray"';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../css/layout.css">
  <link rel="stylesheet" href="../../css/map.css">
</head>
  <body>
  <div class="top-view">
    <div class="layout-container"> 
      <div class="layout">
        <div class="col1">
          <div class="row1">
            <div class="stairs-side">
              <div class="stairs-step1">
              </div>
              <div class="stairs-step2">
              </div>
            </div>
          </div>
        </div>
        <div class="col2">
          <div class="rowb1">
            <div class="side-classrooms">
              <div class="side-classroom">
                <button class="blank">SH1</button>
              </div>
              <div class="side-classroom">
                <button class="blank">SH2</button>
              </div>
              <div class="side-classroom">
                <button class="blank">SH3</button>
              </div>
            </div>
            <div class="side-alley">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="input">
    <button class="value" id="btn3rdFloor">
    <img src="../images/stairs-up-dark.svg" alt="stairs-up">
      3rd Floor
    </button>
    <button class="value" id="btn2ndFloor">
      <img src="../images/stairs-dark.svg" alt="stairs">
        2nd Floor
      </button>
    <button class="value" id="btn1stFloor">
      <img src="../images/stairs-down-dark.svg" alt="stairs-down">
        1st Floor
      </button>
  </div>


  <script>
    // JavaScript to change the content based on button clicks
    const topView = document.querySelector(".top-view");
    const btn2ndFloor = document.getElementById("btn2ndFloor");
    const btn3rdFloor = document.getElementById("btn3rdFloor");
    const btn1stFloor = document.getElementById("btn1stFloor");

    // Simulate a click on the 2nd Floor button to set it as the default
    btn2ndFloor.click();

    btn2ndFloor.addEventListener("click", () => {
      topView.innerHTML = `
      <div class="top-view">
    <div class="layout-container"> 
      <div class="layout">
        <div class="col1">
          <div class="row1">
            <div class="stairs-side">
              <div class="stairs-step1">
              </div>
              <div class="stairs-step2">
              </div>
            </div>
          </div>
        </div>
        <div class="col2">
          <div class="rowb1">
            <div class="side-classrooms">
              <div class="side-classroom">
                <button  <?php echo getColor(1);  ?>>SH1</button>
              </div>
              <div class="side-classroom">
                <button <?php echo getColor(2);  ?>>SH2</button>
              </div>
              <div class="side-classroom">
                <button <?php echo getColor(3);  ?>>SH3</button>
              </div>
            </div>
            <div class="side-alley">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
      `;
    });

    btn3rdFloor.addEventListener("click", () => {
      topView.innerHTML = ` 
      <div class="top-view">
    <div class="layout-container"> 
      <div class="layout">
        <div class="col1">
          <div class="row1">
            <div class="stairs-side">
              <div class="stairs-step1">
              </div>
              <div class="stairs-step2">
              </div>
            </div>
          </div>
        </div>
        <div class="col2">
          <div class="rowb1">
            <div class="side-classrooms">
              <div class="side-classroom">
                <button class="blank">SHees</button>
              </div>
              <div class="side-classroom">
                <button class="blank">SHesh</button>
              </div>
              <div class="side-classroom">
                <button class="blank">SHesh</button>
              </div>
            </div>
            <div class="side-alley">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
      `;
    });

    btn1stFloor.addEventListener("click", () => {
      topView.innerHTML = `
      `;
    });
  </script>
  <style>
    body{
  overflow-y: hidden;
}
  </style>
  <style>
    .red{
      background-color: red;
      height: 100%;
      width: 100%;
    }
  .green{
      background-color: green;
      height: 100%;
      width: 100%;
    }
  </style>
  </body>
</html>
