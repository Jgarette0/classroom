<?php 
require_once '../handler/config_session.inc.php';
require_once '../handler/register_view.inc.php';
require_once '../handler/login_view.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login here</title>
  <link rel="stylesheet" href="../css/user.css">
  <link rel="stylesheet" href="../css/navbar-top.css">
</head>
<body>
      <div class="fixed">
        <div class="label-checkbox">
          <label for="checkbox">
            <input class="checkbox" type="checkbox" id="checkbox" style="display: none;">
            <img src="../../images/icons/dark.svg" alt="Unchecked" class="dark-icon">
            <img src="../../images/icons/light.svg" alt="Checked" class="light-icon">
          </label>
        </div>
        <a href="../index.php">
          <div class="profile-holder">
            <button id="profileBtn">
            <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
            <lord-icon
                src="https://cdn.lordicon.com/zxvuvcnc.json"
                trigger="click"
                colors="primary:#2949cf,secondary:#2949cf" style="width:25px;height:25px;">
            </lord-icon>
            </button>
          </div>
        </a>
      </div>




<div class="login-container">
      <div class="login-header-div">
        <div class="logo-header-container">
           <img src="../images/cctc.png" alt="CCTC">
        </div>
        <div class="logo-header-description">
        Teacher's Login
        </div>
        <?php  
       check_login_errors();
        ?>
      </div>
      <div class="login-form-div">
        <form class="login" action="../handler/login.inc.php" method="post">
          <div class="login-input-container">
            <div>
              <label for="email">
                Email
              </label>
              <input 
              type="text" 
              name="email"
              class="email" 
              id="email">
            </div>
            <div class="password-inputs">
              <div class="password-div">
                <label for="password">
                  Password
                </label>
                <input 
                type="password" 
                name="password"
                class="password" 
                id="password">
              </div>
              <div>
                <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                  <lord-icon
                    src="https://cdn.lordicon.com/alnsmmtf.json"
                    trigger="click"
                    colors="primary:#2949cf,secondary:#2949cf"
                    stroke="150"
                    id="show-password"
                    style="width:30px;height:30px;
                    margin-left:-30px; margin-bottom:-22px;">
                  </lord-icon>
              </div>
            </div>
            <div>
              <button type="submit" class="submit">
              Login
              </button>
            </div>
          </div>
        </form>

      </div>
      <div class="login-terms-div">
        <div>
          New to CCTC-guide? 
          <a class="create-account" 
            href="register.php">
            Create an account
          </a>
        </div>
        </div>
      </div>
      <div class="terms-container-div">
        <div><p>
        By creating an account, you agree to the <a href="#">Classroom Vacancy Detection Terms of Use</a>. For more details on how we handle your data, please review our <a href="#">Privacy Policy</a>. We'll send you occasional account-related notifications.
        </p></div>
      </div>
</body>
<script src="../js/user.js"></script>
<script src="../js/account.js"></script>
</html>