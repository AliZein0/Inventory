<?php
include_once('includes/config.php');
include_once('includes/function.php');
include_once('includes/session.php');




$username =  real_escape($_POST['username']);
$password = real_escape($_POST['password']);

$user =  authentication($username, $password);
login($user['id']);

  if ($user['user_level'] == 1) {
    header('location:admin.php');
  
}elseif($user['user_level'] == 3){
  header('location:user.php');
}
