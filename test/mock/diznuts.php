
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../css/layout.css">
  <link rel="stylesheet" href="../../css/navbar.css">
  <link rel="stylesheet" href="../../css/navbar-bottom.css">
  <link rel="stylesheet" href="../../css/map.css">
</head>
  <body>
  <nav>
      <div class="navbar" id="navbar">
      <a href="../../index.php">
          <div class="profile-holder">
            <button id="profileBtn">
            <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
            <lord-icon
                src="https://cdn.lordicon.com/zxvuvcnc.json"
                trigger="click"
                style="width:25px;height:25px;">
            </lord-icon>
            </button>
          </div>
        </a>
        <div class="search-container">
          <form class="searchform" action="../../search/search.php" method="post">
            <a>
              <button type="submit" class="submits">
                <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="click" colors="primary:#121331,secondary:#242424" style="width:30px;height:30px;">
                </lord-icon>
              </button>
              </a>
              <a>
                <input id="search" type="text" name="usersearch" placeholder="Search...">
            </a>
          </form>
        </div>
      </div>
    </nav>
    <nav class="navbarBottom">
<div class="radio-container">
<div class="radio-inputs">
		<label>
			<input class="radio-input" type="radio" name="engine">
				<span class="radio-tile">
        <a href="">
					<script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
            <lord-icon
              src="https://cdn.lordicon.com/dycatgju.json"
              trigger="click"
              colors="primary:#171717"
              state="hover-2"
              style="width:32px;height:32px;">
            </lord-icon>
					<span class="radio-label">Settings</span>
          </a>
				</span>
		</label>
    <label>
			<input class="radio-input" type="radio" name="engine">
			<span class="radio-tile">
      <a href="../../index.php">
        <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
        <lord-icon
      src="https://cdn.lordicon.com/slduhdil.json"
      trigger="click"
      colors="primary:#171717"
      state="hover-3"
      style="width:32px;height:32px;">
    </lord-icon>
				<span class="radio-label">Home</span>
        </a>
			</span>
		</label>
    
		<label>
			<input class="radio-input" type="radio" name="engine">
			<span class="radio-tile">
      <a href="../../show-vacants/vacants.php">
				<script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
        <lord-icon
          src="https://cdn.lordicon.com/zncllhmn.json"
          trigger="click"
          colors="primary:#171717"
          state="hover"
          style="width:32px;height:32px;">
        </lord-icon>
    <span class="radio-label">Vacants</span>	
    </a>
			</span>
		</label>
</nav>

<div class="input"> 
      <button id="modal1" class="value" id="btn1stFloor">
      <img src="../../images/stairs-down-dark.svg" alt="stairs-down">
        1st Floor
      </button>
      <button id="modal2" class="value" id="btn2ndFloor">
      <img src="../../images/stairs-dark.svg" alt="stairs">
        2nd Floor
      </button>
      <button id="modal3" class="value" id="btn3rdFloor">
    <img src="../../images/stairs-up-dark.svg" alt="stairs-up">
      3rd Floor
    </button>
</div>


        <dialog class="dialog" id="dialog1">
        <div class="input"> 
      <button id="modal1" class="value" id="btn1stFloor">
      <img src="../../images/stairs-down-dark.svg" alt="stairs-down">
        1st Floor
      </button>
      <button id="modal2" class="value" id="btn2ndFloor">
      <img src="../../images/stairs-dark.svg" alt="stairs">
        2nd Floor
      </button>
      <button id="modal3" class="value" id="btn3rdFloor">
    <img src="../../images/stairs-up-dark.svg" alt="stairs-up">
      3rd Floor
    </button>
</div>
        <?php include 'floor1.php';?>
        </dialog>


        <dialog class="dialog" id="dialog2">
        <div class="input"> 
      <button id="modal1" class="value" id="btn1stFloor">
      <img src="../../images/stairs-down-dark.svg" alt="stairs-down">
        1st Floor
      </button>
      <button id="modal2" class="value" id="btn2ndFloor">
      <img src="../../images/stairs-dark.svg" alt="stairs">
        2nd Floor
      </button>
      <button id="modal3" class="value" id="btn3rdFloor">
    <img src="../../images/stairs-up-dark.svg" alt="stairs-up">
      3rd Floor
    </button>
</div>
        <?php include 'floor2.php';?>
        </dialog>


        <dialog class="dialog" id="dialog3">
        <div class="input"> 
      <button id="modal1" class="value" id="btn1stFloor">
      <img src="../../images/stairs-down-dark.svg" alt="stairs-down">
        1st Floor
      </button>
      <button id="modal2" class="value" id="btn2ndFloor">
      <img src="../../images/stairs-dark.svg" alt="stairs">
        2nd Floor
      </button>
      <button id="modal3" class="value" id="btn3rdFloor">
    <img src="../../images/stairs-up-dark.svg" alt="stairs-up">
      3rd Floor
    </button>
</div>
        <?php include 'floor3.php';?>
        </dialog>
 

    

<script>
function setupModalAndDialog(modalId, dialogId) {
    const modal = document.getElementById(modalId);
    const dialog = document.getElementById(dialogId);

    modal.addEventListener('click', () => {
      dialog.showModal();
    });

  }

  // Set up event listeners for each modal and dialog
  setupModalAndDialog('modal1', 'dialog1');
  setupModalAndDialog('modal2', 'dialog2');
  setupModalAndDialog('modal3', 'dialog3');

  // Add more modals and dialogs by calling setupModalAndDialog with different IDs

</script>

</body>
</html>