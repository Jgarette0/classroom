<?php
require_once "includes/dbh.inc.php";

// Function to get the icon HTML based on the classroom status
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
        return '<img src="images/occupied-icon.svg" alt="Occupied Icon" class="occupied" id="occupied">';
    } elseif ($status == "vacant") {
        return '<img src="images/vacant-icon.svg" alt="Vacant Icon" class="vacant" id="vacant">';
    } else {
        // Handle the case when the status is neither 'occupied' nor 'vacant'
        return '<img src="unknown.svg" alt="Unknown Icon">';
    }
}

?>


<?php
require_once "includes/dbh.inc.php";

// Function to get the icon HTML based on the classroom status
function getQuestion($c_id) {
    global $pdo; // Access the global database connection

    // Query the status for the specified c_id
    $query = "SELECT status FROM classroom WHERE c_id = :c_id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':c_id', $c_id);
    $stmt->execute();

    // Fetch the status
    $status = $stmt->fetchColumn();

    if ($status == "occupied") {
        return 'Are you done with your classes?';
    } elseif ($status == "vacant") {
        return 'Do You want to use this classroom?';
    } else {
        // Handle the case when the status is neither 'occupied' nor 'vacant'
        return '<img src="unknown.svg" alt="Unknown Icon">';
    }
}

?>


  <main class="main">
      <div class="div1" id="modal1">
        <div class="diva"><img src="../images/classroom/classroom.jpg" alt="example" class="img1">
        </div>
        <div class="divb">
          <div class="classroom-name">Lecture room</div>
          <div class="status">
            <div>
            <?php echo getIconHTML(1);   ?>
            </div>
           
          </div>
        </div>
      </div>

      <div class="displays">
        <dialog class="dialog" id="dialog1">
          <div class="dialog-content">
            <div class="display-close">x</div>
            <div class="display-header">
            <?php echo getQuestion(1);   ?>
            </div>
            <div class="display-buttons">
              <form method="post" action="log/log.php">
                <button class="btn-yes" type="submit" name="classroomId" value="1">
                  Yes
                </button>
              </form>
              <button class="noway">
                No
              </button>
            </div>
          </div>
        </dialog>
      </div>

      
  <div class="div1" id="modal2">
    <div class="diva"><img src="../images/classroom/classroom.jpg" alt="example" class="img1"></div>
    <div class="divb">
      <div class="classroom-name">Computer Laboratory</div>
      <div class="status">
      <div>            <?php echo getIconHTML(2);   ?></div>
     
    </div>
    </div>

  </div>
  <div class="displays">
    <dialog class="dialog" id="dialog2">
      <div class="dialog-content">
      <div class="display-close">x</div>
      <div class="display-header">
      <?php echo getQuestion(2);   ?>
      </div>
      <div class="display-buttons">
      <form method="post" action="log/log.php">
                <button class="btn-yes" type="submit" name="classroomId" value="2">
                  Yes
                </button>
              </form>
        <button class="noway">No</button>
      </div>
      </div>
    </dialog>
  </div>


  <div class="div1" id="modal3">
    <div class="diva"><img src="../images/classroom/classroom.jpg" alt="example" class="img1"></div>
    <div class="divb">
      <div class="classroom-name">TVL room</div>
      <div class="status">
      <div>            <?php echo getIconHTML(3);   ?></div>
     
    </div>
    </div>
  </div>
  <div class="displays">
    <dialog class="dialog" id="dialog3">
      <div class="dialog-content">
      <div class="display-close">x</div>
      <div class="display-header">
      <?php echo getQuestion(3);   ?>
      </div>
      <div class="display-buttons">
      <form method="post" action="log/log.php">
                <button class="btn-yes" type="submit" name="classroomId" value="3">
                  Yes
                </button>
              </form>
        <button class="noway">No</button>
      </div>
      </div>
    </dialog>
  </div>


</main>
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
