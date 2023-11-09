<?php
  $user = $_COOKIE['username'];
?>

<html>
<head>
  <title>Donate - Responsibility</title>
  <link rel="icon" type="image/x-icon" href="Images/favicon.webp">
  <link rel="stylesheet" href="CSS/donateform.css" />


  <?php
  if(isset($_POST['submitbut'])){
   $con = mysqli_connect('localhost','root','','responsibility');
      if (!$con)
      {
          die('Could not connect: ');
      }
      else{
        $a=$_POST['Cname'];
      $b=$_POST['Founder'];
      $c=$_POST['purp'];
      

          $sql = "INSERT INTO raise (chName,fName,purpose,username) VALUES ('$a','$b','$c','$user')";
          mysqli_query($con,$sql);

          $fileName = basename($_FILES["image"]["name"]);
          $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
          $image = $_FILES['image']['tmp_name'];
          $imgContent = addslashes(file_get_contents($image));

          $sql2 = "UPDATE raise SET img='$imgContent' where chName='$a'";
          $insert= mysqli_query($con,$sql2);
           if($insert){
                 // $_SESSION['charityname']=$a;
                  $status = 'success';
                  $statusMsg = "File uploaded successfully.";
              }else{
                  $statusMsg = "File upload failed, please try again.";
              }

  }
   mysqli_close($con);
  }
  ?>

  <html>

  <head>
      <title>Donate - Responsibility</title>
      <link rel="icon" type="image/x-icon" href="Images/favicon.webp">
      <link rel="stylesheet" href="CSS/donateform.css" />

      <style>
          body {
              background-color: #ecf4e9;
              margin: 0px;
          }

          main {
              position: relative;
              top: 130px;
              background-color: white;
              height: 500px;
              width: 80%;
              margin: 0 auto;
          }

          .l11 {
              height: 250px;
              width: 200px;
              position: relative;
              left:370px;
              bottom:30px;
          }

          .l12{
              font-family: Georgia, 'Times New Roman', Times, serif;
              font-size: 50px;
              text-align: center;
              padding-top: 20px;
          }

          .l13{
              font-family: Georgia, 'Times New Roman', Times, serif;
              font-size: 20px;
              text-align: center;
              padding: 0 20px;

          }

          footer {
              position: absolute;
              top: 700px;
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
            <li><a class="ww" href="name.php">Create Charity</a></li>
            <li><a class="ww" href="display.php">Check Donations</a></li>
          </div>
          <button class="b1" name="Hello">
            <a href="index.html"> Log Out</a>
          </button>
        </span>
      </ul>
    </nav>
  </header>

      <main>
          <div>
              <div>
                  <h3 class="l12" >
                      Charity Raised Successfully
                  </h3>
              </div>

              <img src="Images/tick.jpg" class="l11" alt="">

              <div>
                  <h4 class="l13">
                      We hope we were able to meet your expectations.
                  </h4>
              </div>


          </div>
      </main>

      <footer>
          <div class="part4-1">
              <img src="Images/favicon.webp" alt="">
              <span>&nbsp;&nbsp;Responsibility</span>
              <p>
                  Responsibility is the community-focused nonprofit donor management software built to deliver a better
                  giving
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
