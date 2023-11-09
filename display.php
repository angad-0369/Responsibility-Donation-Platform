<?php
  $user = $_COOKIE['username'];
?>
<html>

<head>
  <title>Raise - Responsibility</title>
  <link rel="icon" type="image/x-icon" href="Images/favicon.webp">
  <link rel="stylesheet" href="CSS/donateform.css" />
  



  <style>
    body {
      background-color: #ecf4e9;
      margin: 0px;
    }

    .form11 {
      margin: 0 auto;
      width: 85%;
      position: relative;
      top: 150px;
      background-color: white;
      padding: 15px;
    }

    .s11 {
      position: relative;
      text-align: left;
      font-family: sans-serif;
    }

    .s12 {
      font-size: 20px;
      position: relative;
      right: 130px;
      top: 10px;
      font-family: sans-serif;
    }

    .t12 {
      position: relative;
      right: 60px;
      width: 50%;
      font-family: sans-serif;
    }

    .r12 {
      position: relative;
      right: 250px;
      font-family: sans-serif;
    }

    .r13 {
      position: relative;
      left: 140px;
    }

    .r14 {
      position: relative;
      left: 140px;
      text-align: left;
      font-family: sans-serif;
    }

    .b12 {
      font-family: sans-serif;
      width: 100px;
      font-weight: 700;
      color: white;
      background-color: black;
      position: relative;
      left: 0;
    }

    .b11 {
      font-family: sans-serif;
      width: 150px;
      font-weight: 700;
      color: white;
      background-color: black;
      position: relative;
      left: 0;
    }

    #purp {
      position: relative;
      left: 100px;

    }

    #Cname {
      position: relative;
      left: 17px;
    }

    #Founder {
      position: relative;
      left: 100px;
    }

    #image {
      position: relative;
      left: 200px;
    }

    footer {
      position: relative;
      top: 1000px;
      
    }

    legend {
      font-family: sans-serif;
    }

    #fd2 {
      margin-top: 30px;
      margin-bottom: 30px;
    }

    .www{
      background-color: white;
      border: none;
      color: black;
      font-size: 20px;
      font-weight: 600;
    }

    header{
      margin-bottom: 150px;
    }

    h1{
      padding-left: 50px;
    }

   

    table{
      margin-top: 50px;
      margin-bottom: 50px;
    }

    .aay{
      position: relative;
      left: 250px;
    }

    .f11{
      position: absolute;
      left:0;
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
          <form action="name.php" method="post">
              
              <input class="www" type="submit" value="Create Charity">
            </form>
            <form action="display.php" method="post">
              <input type="hidden" name="uname" value="<?php echo '$uname'; ?>">
              <input class="www" type="submit" value="Check Donations">
            </form>
          </div>
          <button class="b1" name="Hello">
            <a href="index.html"> Log Out</a>
          </button>
        </span>
      </ul>
    </nav>
  </header>

  
<?php 
    $con = mysqli_connect("localhost","root","","responsibility");
    if(!$con){
        die("Could not connect!");
    }

    $sql = "select chid,chName from raise where username = '$user'";

    $res = mysqli_query($con,$sql);

    if($res){

      while($row = mysqli_fetch_array($res)){
        echo "<h1>$row[1]</h1>";
        $sql1 = "select dName,age,gender,nationality,contact,email,amount from donationform where chid = '$row[0]'";
        $res1 = mysqli_query($con,$sql1);
        if($res1){
          $a = 1;
          echo '<table align="center"  width="800px" border="2px"><thead>
                              <th>S.No.</th>
                              <th>Donor Name</th>
                              <th>Age</th>
                              <th>Gender</th>
                              <th>Nationality</th>
                              <th>Contact</th>
                              <th>E-mail</th>
                              <th>Amount</th></thead>';
          while($col = mysqli_fetch_array($res1)){
            echo "<tr><td>$a</td>
                      <td>$col[0]</td>
                      <td>$col[1]</td>
                      <td>$col[2]</td>
                      <td>$col[3]</td>
                      <td>$col[4]</td>
                      <td>$col[5]</td>
                      <td>$col[6]</td></tr>";
            $a++;
          }
          echo "</table>";
          $sql2 = "select sum(amount) from donationform where chid = '$row[0]'";
          $xy = mysqli_fetch_array(mysqli_query($con,$sql2));
          echo "<h2 class='aay'>Total Amount Collected: $xy[0]";
        }
      }

    }
    mysqli_close($con);
?>




  <!-- <footer class="f11">
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

  </footer> -->
</body>

</html>