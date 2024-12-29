<?php
include_once('includes/function.php');
$user = current_user();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
  <link rel="stylesheet" href="libs/main.css" />
</head>

<body>
  
  <header id="header">
    <div class="logo pull-left"> Inventory System</div>
    <div class="header-content">
      <div class="header-date pull-left">
        <strong><?php echo date("F j, Y, g:i a"); ?></strong>
      </div>
    </div>
  </header>

      <div class="sidebar">
      <?php if($user['user_level'] == '1'): ?>
      <?php include_once('admin_menu.php');?>
      <?php elseif($user['user_level'] == '3'): ?>
      <?php include_once('user_menu.php');?>
      <?php endif;?>

      </div>




<div class="page">
  <div class="container-fluid">


