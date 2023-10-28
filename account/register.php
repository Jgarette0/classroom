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
  <div class="register-container">
      <div class="header-div">
        <div class="logo-container">
          <img src="../images/cctc.png" alt="CCTC">
        </div>
        <div class="login-link-container">Already have an account?  
          <a href="login.php" style="text-decoration:underline;">Login </a>
        </div>
        <?php 
					check_register_errors();
				?>
      </div>
      <div class="form-div">
        <form class="login-form" 
              action="../handler/register.inc.php" 
              method="post">
          <div class="inputs-container">
            <div class="email-for">
              <label for="email">Enter your email</label>
              <?php 
             email_inputs();
             ?>
            </div>
            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
            <lord-icon
              src="https://cdn.lordicon.com/ehfubvwr.json"
              trigger="hover"
              colors="primary:#24242b"
              style="width:24px;height:24px; margin-top:-45px; margin-left:2px">
            </lord-icon>
            <div class="password-viewer">
              <div>
                <label class="label-for" for="password">Enter a password</label>
               <?php
               password_inputs();
               ?>
              </div>
              <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
              <div>
                <lord-icon
                  src="https://cdn.lordicon.com/alnsmmtf.json"
                  trigger="click"
                  colors="primary:#24242b,secondary:#24242b"
                  stroke="150"
                  id="show-password"
                  style="width:30px;height: 32px; margin-left:-30px; margin-bottom:-22px">
                </lord-icon>
              </div>
            </div>
            <div>
              <label for="password">Enter a username</label>
             <?php 
             username_inputs();
             ?>
            </div>
            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
            <lord-icon
              src="https://cdn.lordicon.com/hbvyhtse.json"
              trigger="hover"
              colors="primary:#24242b"
              style="width:24px;height:24px; margin-top:-45px; margin-left:2px">
            </lord-icon>
            <div class="div-for">
              <button type="submit" class="submit">
                Create account
              </button>
            </div>
          </div>
        </form>
      </div>

<div class="category-div">
    <div>
        <a href="">Terms</a>
    </div>
    <div>
        <a href="">Privacy</a>
    </div>
    <div>
        <a href="">Docs</a>
    </div>
    <div>Contact CCTC-guide support</div>
</div>
</div>
</body>
<script src="../js/user.js"></script>
<script src="../js/account.js"></script>
</html>