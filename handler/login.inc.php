<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
  $password = $_POST["password"];
  $email = $_POST["email"];



  try{
    require_once '../includes/dbh.inc.php';
    require_once 'login_model.inc.php';
    require_once 'login_contr.inc.php';
    $errors = [];

  if(is_input_empty($email, $password)){
    $errors["empty_input"] = "Fill in all fields!";
  }
 
  $result = get_user($pdo , $email);


  if(is_email_wrong($result)){
    $errors["login_incorrect"] = "Incorrect login Info!";
  }

  if(!is_email_wrong($result) && is_password_wrong($password, $result["password"])){
    $errors["login_incorrect"] = "Incorrect login Info!";
  }

  require_once 'config_session.inc.php';

  if($errors){
    $_SESSION["errors_login"] = $errors;

    header("Location: ../auth/login.php");
    die();
  } 


    $newSessionID = session_create_id();
    $sessionID = $newSessionID . "_" . $result["id"];
    session_id($sessionID);

    $_SESSION ["user_id"] = $result["id"];
    $_SESSION ["user_email"] = htmlspecialchars($result["email"]);

    $_SESSION["last_regeneration"]=time();

    header("Location: ../private.php?login=success");
    $pdo = null;
    $statement = null;

    die();
  } catch(PDOException $e){
    die("Query failed: ". $e->getMessage());
  }


}

else{
  header("Location: ../account/login.php");
  die();

}