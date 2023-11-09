<?php

  if(isset($_POST['s1'])){
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $con = mysqli_connect("localhost","root","","responsibility");
    if(!$con){
        die("Could not connect!");
    }

    $sql = "insert into signup (username,name,email,password) values ('$user','$name','$mail','$pass')";

    if(mysqli_query($con,$sql)){

      echo '<script>alert("USER SUCCESSFULLY REGISTERED !"); window.location.href = "login.php";</script>;';
    }

    mysqli_close($con);
  }

?>



<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/about.css">
    <title>Responsibility Register</title>
    <link rel="icon" type="image/x-icon" href="Images/favicon.webp">
  <link rel="stylesheet" href="CSS/donateform.css" />
  <style>
    body {
      background-color: #ecf4e9;
      margin: 0px;
    }

    footer {
      margin: 0;
      width: 100%;
      position: relative;
      top: 220px;
    }

    .ww{
      text-decoration: none;
      font-weight: 600;
    }

    .d1{
      margin-top: 100px;
    }


  </style>
  </head>
  <body>
  <header> 
        <nav class="n">
            <ul>
                <span>
                    <li><img src="Images/favicon.webp" alt=""></li>
                    <li class="l1"><a href="index.html"> &nbsp;&nbsp;Responsibility</a></li>
                    <div>
                        <li><a class="ww" href="login.php">Login</a></li>
                        <li><a class="ww" href="register.php">SignUp</a></li>
                        
                    </div>
                    
                </span>
            </ul>
        </nav> 
    </header>


<div class="container mt-4">
<h3 class="d1">Please Register Here:</h3>
<hr>
<form action="" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Username</label>
      <input type="text" class="form-control" name="username" id="inputEmail4" placeholder="Username">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name ="password" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
      <label for="inputPassword4">Confirm Password</label>
      <input type="password" class="form-control" name ="confirm_password" id="inputPassword" placeholder="Confirm Password">
    </div>
  <div class="form-group">
    <label for="inputAddress2">Name</label>
    <input type="text" name="name" class="form-control" id="inputAddress2" placeholder="Enter Your Name">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Email</label>
    <input type="text" class="form-control" id="inputAddress2" name="mail" placeholder="Enter Your Email ID">
  </div>
  <div class="form-row">
    
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" name="s1" class="btn btn-primary" style="position:relative; left:40px;">Sign Up</button>
</form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <footer>
    <div class="part4-1">
      <img src="Images/favicon.webp" alt="">
      <span>&nbsp;&nbsp;Responsibility</span>
      <p>
        Responsibility is the community-focused nonprofit donor management software built to deliver a better giving
        experience and help organizations thrive.
      </p>
    </div>
    <div class="part4-2">
      <table border="0px" cellspacing="1px" align="right">
        <tr class="td2">
          <td><a href="#"><img style="padding-left:0px;" src="Images/l1.jpg" alt="Facebook"></a>
            <a href="#"><img style="padding-left:0px;" src="Images/l2.png" alt="Twitter"></a>
            <a href="#"><img style="padding-left:0px;" src="Images/l3.png" alt="Linked In">
          </td>
        </tr>
        <tr class="td1">
          <td><a href="#">Privacy Policy</a> <a href="#">Security Policy</a> <a href="#">Openness</a> <a
              href="#">GDPR</a></td>
        </tr>
        <tr class="td3">
          <td>Copyright © 2022 Responsibility® All Rights Reserved</td>
        </tr>
      </table>
    </div>

  </footer>

  </body>
</html>
