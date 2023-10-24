<?php 
if($_SERVER["REQUEST_METHOD"] === "POST"){

  $email = $_POST["email"];
  $password = $_POST["password"];
  $username = $_POST["username"];



try {

require_once '../includes/dbh.inc.php';
require_once 'register_model.inc.php';
require_once 'register_view.inc.php';
require_once 'register_contr.inc.php';

$errors = [];

if(is_input_empty($username,$password, $email)){
  $errors["empty_input"] = "Fill in all fields!";
}
if(is_email_invalid($email)){
  $errors["invalid_email"] = "Invalid email is used!";
}
if(is_username_taken($pdo, $username)){
  $errors["username_taken"] = "Username already taken";
}


require_once 'config_session.inc.php';
$registerData = [
"username"=>$username,
"email"=>&$email
];
$_SESSION["register_data"] =$registerData;
if($errors){
  $_SESSION["errors_register"] = $errors;

  header("Location: ../account/register.php");
  die();
} 

create_user($pdo,$username, $password,$email);


header("Location: ../auth/register.php?register=success");

$pdo = null;
$stmt = null;
die();
}catch(PDOException $e){
  die("Query failed: ". $e->getMessage());
}
} else{
  header("Location: ../account/register.php");
  die();
}

