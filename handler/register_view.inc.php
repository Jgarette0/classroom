<?php 

declare (strict_types=1);

function username_inputs(){

  if(isset($_SESSION["register_data"]["username"]) && !isset($_SESSION["register_data"]["username_taken"])){
    echo '<input type="text" name="username"class="username" id="username" placeholder="Username" value="'. $_SESSION["register_data"]["username"].'">';
  }else{

    echo'<input type="text" name="username"class="username" id="username" placeholder="Username">';
  }
}
function password_inputs(){
  echo ' <input type="password" name="password"class="password" id="password" placeholder="Password">';
}
 function email_inputs(){

  if(isset($_SESSION["register_data"]["email"]) && !isset($_SESSION["register_data"]["invalid_email"])){
    echo ' <input type="text" name="email"class="email" id="email" placeholder="cctc-guide@gmail.com" value="'. $_SESSION["register_data"]["email"].'">';
  }else{

    echo' <input type="text" name="email"class="email" id="email" placeholder="cctc-guide@gmail.com">';
  }
}


function check_register_errors(){
  if(isset($_SESSION['errors_register'])){
    $errors = $_SESSION['errors_register'];


    foreach($errors as $error){
      echo '<div class="form-errors" style="display:flex; flex-direction:column; color:#dc2626;">'.$error.'</div>';
    }
    unset($_SESSION['errors_register']);
  } else if (isset($_GET["register"]) && $_GET["register"] ==="success"){
    echo '<br>';
    echo '<div class="form-success" style="color:30c04f">Registration successful. Continue to login.</div>';
  }
 

}

