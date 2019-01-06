<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Payement Information</title>
    <link rel ="stylesheet" href ="info_prem.css">
</head>
    <body>
      <div class="title"><img src="../img/payment-info.png"></div>
      <div class="container">
        <div class="box">
      <?php
      session_start();
      if(isset($_SESSION['user']))
      {
          $servername ="localhost";
          $username ="root";
          $password = "12345";
          $conn = mysqli_connect($servername,$username,$password);
          mysqli_select_db($conn,'nostalgames_db');

          $usr = $_SESSION['user'];
          $sql = " SELECT * FROM `users` WHERE `username`='$usr'";

          $res=mysqli_query($conn,$sql);
          $print=$res->fetch_assoc();


          if($print['permission']==1)
          {
            echo "Username: ".$print['username'];
            echo "<br>Plan: Base User ";
          }

            if($print['permission']==2)
            {
              $sql2 = " SELECT * FROM `premium` WHERE `username`='$usr'";
              $res2 = mysqli_query($conn,$sql2);
              $print2=$res2->fetch_assoc();
              echo "Username: ".$print2['username']."<br>First name: ".$print2['first_name']."<br>Last Name:".$print2['last_name'];
              $num=substr($print2['card_number'],0,4);
              echo "<br>Card:".$num."******";
            }
      }
       ?>
     </div>
     </div>

     <div class = "ctrl">
     <div class='controls'><a href="../user_perm.php"> <img src="../img/MainMenu.png" ></a></div>
         <div class='controls'> <img src="../img/Back.png" onclick=window.history.back()></div>
   </div>

    </body>
</html>
