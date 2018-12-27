<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>User Information</title>
    <link rel ="stylesheet" href ="info.css">
</head>
    <body>
      <div class="title"><img src="../img/user_info.png"></div>
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
              echo "Username: ".$print['username']." plan: Premium User ";
      }
       ?>
     </div>
     </div>

    </body>
</html>
