<?php

  if(isset($_POST['sub'])){

    $con = mysqli_connect("localhost","root","","responsibility");
    if(!$con){
        die("Could not connect!");
    }

    $user = $_POST['username'];
    $pass = $_POST['password'];
    $sql = "select username,password,name from signup where username = '$user'";

    $res = mysqli_query($con,$sql);

    if($res){
      $row = mysqli_fetch_array($res);
      if($row[1] == $pass){

        setcookie('username',$row[0],time()+30*60,'/');
        echo '<script>alert("Welcome, '.$row[2].'"); window.location.href = "name.php"; </script>';
        
      } else {
          echo '<script>alert("USERNAME AND PASSWORD DOES NOT MATCH");</script>';
      }
    } else {
      echo '<script>alert("INVALID USERNAME OR PASSWORD");</script>';
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
   <!-- <link rel="stylesheet" href="E:/XAMPP/htdocs/IWP PROJECT/CSS/about.css">-->
    <title>Responsibility Login</title>
    <link rel="icon" type="image/x-icon" href="Images/favicon.webp">
  <link rel="stylesheet" href="CSS/donateform.css" />
  <style>

    body {
      background-color: #ecf4e9;
      margin: 0px;
    }

    footer {
      position: relative;
      top: 220px;
    }

    .ww{
      text-decoration: none;
      font-weight: 600;
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
<h3>Please Login Here:</h3>
<hr>

<form action="login.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <input type="submit" value="Submit" class="btn btn-primary" name="sub">
  
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


