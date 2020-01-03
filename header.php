<?php 
    session_start();
   #  include "counter.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://bootswatch.com/3/cosmo/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>

 <nav class="navbar navbar-default fixed-top">
 <div class="container-fluid">
 <a class="navbar-brand" href="#">F . . . .</a>
      <ul class="nav navbar-nav">
        <li><a href="photogallery">Photos Live</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Something</a></li>
      </ul>
    <div class="nav navbar-nav navbar-right">
    <ul class="nav navbar-nav">
    <?php
      if (isset($_SESSION['userId'])) {
      } else {
       echo '<li><a href="signup.php">SignUp</a></li>';
      }
      ?>
   </ul>
   <?php 
      if (isset($_SESSION['userId'])) {
      echo '<form class="navbar-form navbar-left" action="includes/logout.inc.php" method="post">
          <button type="submit" class="btn btn-default" name="logout-submit">Logout</button>   
        </form>';
      } else {
        echo '<form class="navbar-form navbar-left" action="includes/login.inc.php" method="post">
          <input class="form-control" type="text" placeholder="Username/Email" name="mailuid" required> 
          <input class="form-control" type="password" placeholder="Password" name="pwd" required>
          <button class="btn btn-default" type="submit" name="login-submit">Login</button>
        </form> ';
      }
      ?>
   </div>
   </div>
 </nav>



     

