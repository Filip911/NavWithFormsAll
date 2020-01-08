<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
    
  <nav class="navbar navbar-expand-lg" style="background-color: #3f3333;">
    <a class="navbar-brand" href="#"><img src="img/kallii.jpg" style="width:60px;"></a> 

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">   
      <?php
      if (isset($_SESSION['userId'])) {
      echo '<ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Photo Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Something Else</a>
        </li>
      </ul>';
      }
      else {
        echo '<ul class="navbar-nav mr-auto"><li class="text-white">Please login to see content</li></ul>';
      }
      ?>
     <?php 
     if (isset($_SESSION['userId'])) {
      echo '<form action="includes/logout.inc.php" method="post" class="form-inline">
        <button type="submit" class="btn btn-outline-secondary mr-sm-1" name="logout-submit">Logout</button>
      </form>';
    } else {     
      echo '<form action="includes/login.inc.php" method="post" class="form-inline">
        <input class="form-control mr-sm-1" type="text" name="mailuid" required placeholder="E-mail/Username . . .">
        <input class="form-control mr-sm-1" type="password" name="pwd" required placeholder="Password . . .">
        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" name="login-submit">Login</button>
        </form>';
    }
      ?>
      <?php
      if (isset($_SESSION['userId'])) {
      } else {
      echo '<a class="btn btn-outline-light ml-1" href="signup.php" role="button">Sign Up</a>';
      }
      ?>
    </div>
  </nav>
      <!-- <div class="jumbotron big-banner" style="height:200px;">

      </div> -->




      <!--Projects section v.4-->
<section>

<!--Section heading-->
<h2 class="h1-responsive font-weight-bold text-center my-5">Our best projects</h2>
<!--Grid row-->
<div class="row mx-1">

    <!--Grid column-->
    <div class="col-md-12 mb-4">
        <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/img%20%2832%29.jpg);">
            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                <div>
                    <h6 class="purple-text"><i class="fas fa-plane"></i><strong> Travel</strong></h6>
                    <h3 class="card-title py-3 font-weight-bold"><strong>This is card title</strong></h3>
                    <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                        optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                        Odit sed qui, dolorum!</p>
                    <a class="btn btn-secondary btn-rounded"><i class="far fa-clone left"></i> View project</a>
                </div>
            </div>
        </div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-6 mb-4">
        <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img%20%2873%29.jpg);">
            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                <div>
                    <h6 class="pink-text"><i class="fas fa-chart-pie"></i><strong> Marketing</strong></h6>
                    <h3 class="card-title py-3 font-weight-bold"><strong>This is card title</strong></h3>
                    <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                        optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                        Odit sed qui, dolorum!</p>
                    <a class="btn btn-pink btn-rounded"><i class="far fa-clone left"></i> View project</a>
                </div>
            </div>
        </div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-6 mb-4">
        <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/City/6-col/img%20%2847%29.jpg);">
            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                <div>
                    <h6 class="green-text"><i class="far fa-eye"></i><strong> Entertainment</strong></h6>
                    <h3 class="card-title py-3 font-weight-bold"><strong>This is card title</strong></h3>
                    <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                        optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                        Odit sed qui, dolorum!</p>
                    <a class="btn btn-success btn-rounded"><i class="far fa-clone left"></i> View project</a>
                </div>
            </div>
        </div>
    </div>
    <!--Grid column-->

</div>
<!--Grid row-->

</section>
<!--Projects section v.4-->












  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



      






     

