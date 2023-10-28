<?php 

declare(strict_types=1);


function check_login_errors(){
  if(isset($_SESSION['errors_login'])){
    $errors = $_SESSION['errors_login'];


    foreach($errors as $error){
      echo '<div class="form-errors" style="display:flex; flex-direction:column; color:#dc2626;">'.$error.'</div>';
    }
    unset($_SESSION['errors_login']);
  } else if (isset($_GET["login"]) && $_GET["login"] ==="success"){
    echo '<br>';
    echo '<div class="form-success" style="color:#30c04f">logged in!</div>';
  }

}
function login_success() {
  return '<div id="success-message" class="form-success" style="color:#30c04f">You have successfully logged in!</div>';
}
