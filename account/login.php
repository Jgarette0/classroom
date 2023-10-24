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
</head>
<body>
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
            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
            <lord-icon
              src="https://cdn.lordicon.com/hbvyhtse.json"
              trigger="hover"
              colors="primary:#24242b"
              style="width:24px;height:24px; margin-top:-45px; margin-left:2px">
            </lord-icon>
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
                    colors="primary:#24242b,secondary:#24242b"
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
</html>