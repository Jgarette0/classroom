<?php 

declare (strict_types=1);

function get_username(object $pdo, string $username)
{
  $query = "SELECT username FROM user WHERE username = :username;";
  $stmt = $pdo->prepare($query);
  $stmt -> bindParam(":username", $username);
  $stmt->execute();

  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  return $result;
}

function set_user(object $pdo,string $email,string $password,string $username)
{

  $query = "INSERT INTO user (email, password, username) VALUES(:username, :password, :email);";
  $stmt = $pdo->prepare($query);

$options = [
  'cost' => 12,
];
$hashedpassword =  password_hash($password, PASSWORD_BCRYPT, $options);

  $stmt -> bindParam(":email", $email);
  $stmt -> bindParam(":password", $hashedpassword);
  $stmt -> bindParam(":username", $username);
  $stmt->execute();

}