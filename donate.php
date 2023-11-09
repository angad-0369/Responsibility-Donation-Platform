<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Donate Now - Responsibility</title>
  <link rel="icon" type="image/x-icon" href="Images/favicon.webp">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
    integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
    crossorigin="anonymous"></script>
  <style>
    body {
      background-color: #ecf4e9;
      margin: 0;
    }

    li a {
      color: black;
      text-decoration: none;
      margin-right: 40px;
    }

    nav ul span {
      list-style: none;
      display: flex;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      font-size: 20px;
      font-weight: 600;
    }

    .b1 {
      height: 35px;
      padding-top: 5px;
      padding-bottom: 5px;
      width: 100px;
      border-radius: 6px;
      margin-right: 40px;
      background-color: black;
    }

    .l1 {
      font-weight: bold;
    }

    .b1 a {
      margin: 0 auto;
      color: white;
      font-weight: 520;
      font-size: 15px;
      font-family: sans-serif;
      text-decoration: none;
    }

    nav ul span div {
      display: flex;
      margin: 0 auto;


    }

    nav ul span {
      padding-top: 10px;
    }

    nav img {
      height: 30px;
      width: 30px;
    }

    .nav-mid {
      text-align: center;
    }

    nav {
      padding: 10px 0;
      width: 100%;
      background-color: white;
      position: fixed;
      top: 0;
      z-index: 99999999;
    }



    footer {
      padding-top: 50px;
      height: 200px;
      width: 100%;
      background-color: white;
      position: relative;
      top: 300px;
    }

    footer img {
      height: 30px;
      width: 30px;
    }

    .part4-1 {
      width: 40%;
      padding-left: 20px;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

    }

    .part4-1 span {
      font-weight: bold;
      position: relative;
      bottom: 8px;
    }

    .part4-1 p {
      color: grey;
    }

    .part4-2 table img {
      height: 20px;
      width: 20px;
      padding-left: 10px;
    }

    .part4-2 {
      position: relative;
      bottom: 70px;
      right: 40px;
      color: grey;
      text-align: right;
    }

    .part4-2 table a {
      margin: 0;
      padding: 0;
      color: gray;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .td1 td a {
      padding-left: 30px;
    }

    .td2 {
      position: relative;
      bottom: 50px;
    }

    .td1 {
      position: relative;
      bottom: 30px;
    }

    .td3 {
      position: relative;
      bottom: 15px;
      left: 40px;
    }


    #carousel3 {
      position: relative;
      top: 50px;

    }


    .carousel {
      height: 320px;
      width: 700px;
      margin: 0 auto;
      margin-top: 70px;
    }

    .car-img {
      height: 300px;
      width: 680px;
    }

    .car-cap {
      margin-top: 30px;
    }

    .b2 {
      position: relative;
      left: 180px;
      border-radius: 6px;
      background-color: black;
      color: white;
      height: 50px;
      width: 400px;
    }

    .b2 a {
      color: white;
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

          </div>
          <button class="b1" name="Hello">
            <a href="login.php"> Login</a>
          </button>
        </span>
      </ul>
    </nav>
  </header>

  <?php 
    $con = mysqli_connect("localhost","root","","responsibility");


    $sql = "select * from raise where chid>4;";
    $res = mysqli_query($con,$sql);
    $a = 6;
    $b = 5;
?>
    

  <div id="carousel3" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carousel3" data-bs-slide-to="0" class="active" aria-current="true"
        aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carousel3" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carousel3" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carousel3" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carousel3" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>

    <?php 
      while($row = mysqli_fetch_array($res)){
      echo '<div class="carousel-indicators"><button type="button" data-bs-target="#carousel3" data-bs-slide-to="'.$b.'" aria-label="Slide '.$a.'"></button></div>';
      $a++;
      $b++;
      echo '<div class="carousel-item" data-bs-interval="2000">';
      echo '<img class="d-block w-100 car-img" src="data:image/jpeg;base64,'.base64_encode($row[4]).'"/>';
      echo '<div class="car-cap d-none d-md-block">';
      echo "<h5>$row[1]</h5>";
      echo "<p>Purpose: $row[2]<br>Founder: $row[3]</p>";
      echo '<form action="donateForm.php" method="post">';
      echo '<input type="hidden" name="chid" value="'.$row[0].'">';
      echo '<input class="b2" type="submit" value="Donate"></form></div></div>';
    }
    ?>
   
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="5000">
        <img src="Images/ch1.jpg" class="d-block w-100 car-img" alt="slide 1">
        <div class="car-cap d-none d-md-block">
          <h5>Food Security</h5>
          <p>Purpose: To Ensure No One Sleeps Hungry
            <br>
            Founder: Gunjan Payal
          </p>
          <form action="donateForm.php" method="post">
            <input type="hidden" name="chid" value="0">
            <input class="b2" type="submit" value="Donate">
          </form>
        </div>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="Images/ch2" class="d-block w-100 car-img" alt="slide 2">
      <div class="car-cap d-none d-md-block">
        <h5>Relief Funds</h5>
        <p>Purpose: To Support our Martyrs
          <br>
          Founder: Ishan Avasthi
        </p>
        <form action="donateForm.php" method="post">
            <input type="hidden" name="chid" value="1">
            <input class="b2" type="submit" value="Donate">
          </form>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="Images/ch3.png" class="d-block w-100 car-img" alt="slide 3">
      <div class="car-cap d-none d-md-block">
        <h5>Forest Preservation</h5>
        <p>Purpose: To Protect the Forests
          <br>
          Founder: Amit Thukral
        </p>
        <form action="donateForm.php" method="post">
            <input type="hidden" name="chid" value="2">
            <input class="b2" type="submit" value="Donate">
          </form>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="Images/ch4" class="d-block w-100 car-img" alt="slide 4">
      <div class="car-cap d-none d-md-block">
        <h5>COVID - 19</h5>
        <p>Purpose: To Ensure Medical Facilities
          <br>
          Founder: Kanika Mehta
        </p>
          <form action="donateForm.php" method="post">
            <input type="hidden" name="chid" value="3">
            <input class="b2" type="submit" value="Donate">
          </form>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Images/ch5" class="d-block w-100 car-img" alt="slide 5">
      <div class="car-cap d-none d-md-block">
        <h5>Child Support</h5>
        <p>Purpose: To Help Homeless Children
          <br>
          Founder: Sameera Taluja
        </p>
        <form action="donateForm.php" method="post">
            <input type="hidden" name="chid" value="4">
            <input class="b2" type="submit" value="Donate">
          </form>
      </div>
    </div>

   
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel3" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel3" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  </div>
 
<?php 
  mysqli_close($con);
?>



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
          <td><a href="#"><img src="Images/l1.jpg" alt="Facebook"></a>
            <a href="#"><img src="Images/l2.png" alt="Twitter"></a>
            <a href="#"><img src="Images/l3.png" alt="Linked In">
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