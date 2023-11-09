<html>
<head>
  <title>Donate - Responsibility</title>
  <link rel="icon" type="image/x-icon" href="Images/favicon.webp">
  <link rel="stylesheet" href="CSS/donateform.css" />


  <script>

    function validateForm() {
      const form = document.getElementById("f1");
      console.log(form);
      const fname = form.fname.value;
      console.log(fname);
      const age = form.age.value;
      console.log(age);
      const gender = form.r;
      console.log(gender);
      const cont = form.cont.value;
      console.log(cont);
      const mail = form.mail.value;
      console.log(mail);
      const nat = form.nat.value;
      console.log();
      const pay = form.p;
      console.log();
      const noc = form.noc.value;
      console.log();
      const cn = form.cn.value;
      console.log();
      const exp = form.exp.value;
      console.log();
      const cvv = form.cvv.value;
      console.log();
      const amt = form.amt.value;

      //Name
      if (fname == "") {
        alert("Enter your Name");
        return false;
      }

      //Age
      var y1 = /^[0-9]{2,3}$/;
      if (age == "") {
        alert("Enter your Age.");
        return false;
      }

      if (!y1.test(age)) {
        alert("Kindly! Enter a Valid Age.")
        return false;
      }


      //Gender
      var flagGender = 0;
      for (var i = 0; i < gender.length; i++) {
        if (gender[i].checked == true) {
          flagGender = 1;
          break;
        }
      }
      if (flagGender == 0) {
        alert("Kindly select your Gender.");
        return false;
      }



      //Contact Info
      var y2 = /^[9876][0-9]{9}$/
      if (!y2.test(cont)) {
        alert("Please! Enter a Valid Contact Number.");
        return false;
      }

      //Mail
      var y3 = /^[a-zA-Z0-9]+@[a-zA-Z]+\.com$/;
      if (!y3.test(mail)) {
        alert("Kindly! Enter a Valid E-mail Address");
        return false;
      }

      //Nationality
      if (nat == "") {
        alert("Enter your Nationality");
        return false;
      }

      //Payment Method
      var flagPayment = 0;
      for (var i = 0; i < pay.length; i++) {
        if (pay[i].checked == true) {
          flagPayment = 1;
          break;
        }
      }
      if (flagPayment == 0) {
        alert("Kindly select a payment method");
        return false;

      }


      //Amout
      var y7 = /^[1-9][0-9]*$/;
      if (!y7.test(amt)) {
        alert("Kindly! Enter a valid amount.");
        return false;
      }
      //Name on Card
      if (noc == "") {
        alert("Enter the Name on Your Card");
        return false;
      }

      //Card Number

      var y4 = /^[1-9][0-9]{3}(\-)[0-9]{4}(\-)[0-9]{4}(\-)[0-9]{4}$/;
      if (!y4.test(cn)) {
        alert("Kindly! Enter a Valid Card Number.");
        return false;
      }

      //Expiry Date
      var y5 = /^(0[1-9]|1[0-2])\/[0-9]{2}$/;
      if (!y5.test(exp)) {
        alert("Kindly! Enter a Valid Expiry Date.");
        return false;
      }

      //CVV
      var y6 = /^[0-9]{3}$/;
      if (!y6.test(cvv)) {
        alert("Kindly! Enter a Valid CVV.");
        return false;
      }


      function finalconfo() {
        if (confirm("You really want to submit the form")) {
          return true;
        }
        else {
          return false;
        }
      }
      var val = finalconfo();

      return val;


    }
  </script>



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
      /* font-size: 20px;
      position: relative;
      right: 130px;
      top: 10px;
      font-family: sans-serif; */
    }

    .t12 {
      position: relative;
      /* right: 0px; */
      left:20px;
      width: 50%;
      font-family: sans-serif;
    }

    .r12 {
      /* position: relative;
      right: 250px;
      font-family: sans-serif; */
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

    .b11 {
      font-family: sans-serif;
      width: 150px;
      font-weight: 700;
      color: white;
      background-color: black;
    }

    footer {
      position: relative;
      top: 220px;
    }

    legend {
      font-family: sans-serif;
    }

    #fd2 {
      margin-top: 30px;
      margin-bottom: 30px;
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
            <a href="#login"> Login</a>
          </button>
        </span>
      </ul>
    </nav>
  </header>

  <div class="form11">
    <form action="donateFormRedirect.php" name="f1" id="f1" method="POST" onsubmit="return validateForm()">

      <fieldset>
        <legend>Personal Details</legend>

        <label class="s11" for="fname">Name</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input class="t12" type="text" name="fname" placeholder="Enter your Name" id="fname">
        <br><br />
        <label class="s11" for="age">Age</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input class="t12" type="text" name="age" placeholder="Enter your Age like 09, 45 etc." id="age">
        <br><br />
        <label class="s11" for="">Gender</label><br>
        <input class="r13" type="radio" name="r" id="" value="Male">
        <label class="r14" for="">Male</label>
        <br>
        <input class="r13" type="radio" name="r" id="" value="Female">
        <label class="r14" for="">Female</label>
        <br>
        <input class="r13" type="radio" name="r" id="" value="NA">
        <label class="r14" for="">Rather Not Say</label>
        <br>
        <br>
        <label class="s11" for="count">Conatact Info</label>
        <input class="t12" type="text" name="cont" placeholder="Enter the Contact Number" id="count">
        <br><br />
        <label class="s11" for="mail">E-mail</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input class="t12" type="text" placeholder="Enter your E-mail" name="mail" id="mail">
        <br><br />
        <label class="s11" for="nat">Nationality</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input class="t12" type="text" placeholder="Enter Your Nationality" name="nat" id="nat">
        <br><br />


      </fieldset>

      <fieldset id="fd2">
        <legend>Payment Details</legend>

        <label class="s11" for="">Payment</label>
        <br>
        <input class="r13" type="radio" name="p" id="">
        <label class="r14" for="">Credit Card</label>
        <br>
        <input class="r13" type="radio" name="p" id="">
        <label class="r14" for="">Debit Card</label>
        <br>
        <input class="r13" type="radio" name="p" id="">
        <label class="r14" for="">PayPal</label>
        <br><br />
        <label class="s11" for="amt">Amount</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input class="t12" type="text" placeholder="Enter the Amount in INR" name="amt" id="amt">
        <br><br />
        <label class="s11" for="noc">Name on Card</label>
        <input class="t12" type="text" placeholder="Enter the Name on the Card" name="noc" id="noc">
        <br><br />
        <label class="s11" for="cn">Card Number</label>&nbsp;&nbsp;
        <input class="t12" type="text" placeholder="Enter your Card Number: XXXX-XXXX-XXXX-XXXX" name="cn" id="cn">
        <br><br />
        <label class="s11" for="exp">Expiration</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input class="t12" type="text" placeholder="Enter the Expiry Date: MM/YY" name="exp" id="exp">
        <br><br />
        <label class="s11" for="cvv">CVV</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input class="t12" type="text" placeholder="Enter Your CVV: XXX" name="cvv" id="cvv">
        <br /><br />


      </fieldset>

      <input type="hidden" name="chid" value="<?php echo $_POST["chid"]; ?>">
      <input class="b11" name="sub" type="submit" value="Pay Now">

    </form>
  </div>

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
