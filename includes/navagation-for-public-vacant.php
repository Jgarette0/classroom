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
          <form class="searchform" action="../search/public-search.php" method="post">
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
    <nav class="navbarBottom">
<div class="radio-container">
<div class="radio-inputs">
		<label>
    <span class="radio-tile">
           <input class="radio-input" type="radio" name="engine">
           <a href="../classroom.php">
          <img src="../images/icons/classroom-dark.svg" class="classroom" alt="">
              <span class="radio-label" >Classroom</span>
             </a>
           </span>
		</label>
    <label>
    <span class="radio-tile">
           <input class="radio-input" type="radio" name="engine">
           <a href="../index.php">
          <img src="../images/icons/home-dark.svg" class="home" alt="">
              <span class="radio-label"">Home</span>
             </a>
           </span>
		</label>
    
		<label>
			<span class="radio-tile">
           <input checked="" class="radio-input" type="radio" name="engine">
           <a href="">
          <img src="../images/icons/vacant-active.svg" class="vacants" alt="">
              <span class="radio-label" style="color: #00a669;">Vacants</span>
             </a>
           </span>
		</label>

</div>
  </div>
</nav>
<style>
      a{
        margin: none;
        padding: none;
        text-decoration: none;
      }
    </style>