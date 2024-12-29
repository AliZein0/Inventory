<?php
include_once('session.php');
include_once('config.php');
function real_escape($str){
    global $con;
    $escape = mysqli_real_escape_string($con,$str);
    return $escape;
  }
  function authentication ($username='' , $password=''){
    global $con ;
    
    $sql  = "SELECT id,username,password,user_level FROM users WHERE username =?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result= $stmt->get_result();

      $user = $result->fetch_assoc();
      $password_request = sha1($password);
      if($password_request==$user['password']){
        return $user; 
      
    }
  }
  function find_by_id($user_id){
    global $con ;
    
    $sql  = "SELECT * FROM users WHERE id =?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
  
    $result= $stmt->get_result();
  
    if($user = $result->fetch_assoc()){
      return $user ;
    }
  
    return null ;
  }
  function current_user(){
    static $current_user;
    if(!$current_user){
       if(isset($_SESSION['user_id'])):
           $user_id = intval($_SESSION['user_id']);
           $current_user = find_by_id($user_id);
      endif;
    }
  return $current_user;
}
  ?>