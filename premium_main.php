<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<style>
body {
    background-image: url("img/bg.png");
    background-size: 100%;
}
.w3-button {width:150px;}
h1 {color: blue;}
</style>
</head>
<body>
  <title>Main Menu</title>

  <h1 align="center"><img src = img/welcome.png></h1>
  <div class="w3-container" align="center">
    <p><a href="gamelib.php"> <img src="img/play-btn.png" ></a></p>
    <p><a href="scoreboard.php"> <img src="img/scoreboard-btn.png" ></a></p>
    <p><a href="randGame.php"> <img src="img/random-btn.png" ></a></p>
    <p><a href="/userq/info_base.php"> <img src="img/usr_info-btn.png" ></a></p>
    <p><a href="/userQ/info_prem.php"> <img src="img/payment-btn.png" ></a></p>
    <p><a href="/userQ/messages.html"> <img src="img/messages-btn.png" ></a></p>
    <p><a href="disconnect.php"> <img src="img/logout-btn.png" ></a></p>
</div>


</body>
</html>


<?php
session_start();
  if(!isset($_SESSION['perm']))
  {
    header('location:user_perm.php');
  }
  else {
    if($_SESSION['perm']!=2)
    {
      header('location:user_perm.php');
    }
  }
 ?>
