<?php 

declare(strict_types=1);


function is_input_empty(string $password, string $email)
{
  if(empty($password) || empty($email)){
    return true;
  }
  else{
    return false;
  }
}

function is_email_wrong(bool | array $result){

if(!$result){
  return true;
}else{
  return false;
}
 
}

function is_password_wrong(string $password, string $hashedPassword){

  if(password_verify($password, $hashedPassword)){
    return true;
  }else{
    return false;
  }
   
  }