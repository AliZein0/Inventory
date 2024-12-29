<?php
session_start();

function login($user_id){
    $_SESSION['user_id'] = $user_id;
  }


?>