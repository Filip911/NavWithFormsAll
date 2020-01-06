<?php 
    require "header.php";
?>


<div class="container">
  <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
      <form action="includes/signup.inc.php" method="post" novalidate>
      <div class="col text-center">
        <br><br>
          <h3 style="color:white;"><strong>Sign Up<strong></h3> 
          <br>         
           <?php 
            if (isset($_GET['error'])) { 

              if ($_GET['error'] == "emptyfields") {
                echo '<p style="color:red;">Fill all fields!</p>';
              }
              else if ($_GET["error"] == "invaliduidmail") {
                echo '<p style="color:red;">Invalid username and e-mail!<p>';
              }
              else if ($_GET["error"] == "invaliduid") {
                echo '<p style="color:red;">Invalid username!<p>';
              }
              else if ($_GET["error"] == "invalidmail") {
                echo '<p style="color:red;">Invalid e-mail!<p>';
              }
              else if ($_GET["error"] == "passwordcheck") {
                echo '<p style="color:red;">Your passwords do not match!<p>';
              }
              else if ($_GET["error"] == "usertaken") {
                echo '<p style="color:red;">Username already taken!<p>';
              } 
            }  
          ?> 
          <?php 
            if (isset($_GET['signup'])) {
              if ($_GET['signup'] == 'success')
                echo '<p style="color:green;">Successful registered</p>';
            }
          ?>
      </div>       
          <input class="form-control" type="text" placeholder="Username" name="uid">
            <br>
          <input class="form-control" type="text" placeholder="Enter Email" name="mail">  
            <br>
          <input class="form-control" type="password" placeholder="Enter Password" name="pwd">
            <br> 
          <input class="form-control" type="password" placeholder="Repeat Password" name="pwd_repeat">
            <br>
            <div class="col text-center">  
            <div class="g-recaptcha" data-sitekey="6LfhtcwUAAAAAETzgoi47ztnjA_vAyLKARKXxJfe"></div>
            <br> 
            <button class="btn btn-success" type="submit" name="signup-submit">Signup</button>
            <br><br>
            <?php
              if (isset($_GET['newpwd'])) {
                if ($_GET['newpwd'] == 'passwordupdated') {
                  echo '<p>Your password has been reset!</p>';
                }
              }
            ?>
            <b><a href="reset-pass.php">Forgot your password?</a></b>
          </div>
      </form>
     </div>
     <div class="col-md-4">
     </div>  
  </div>
</div>
 <?php 
    require "footer.php";
 ?>