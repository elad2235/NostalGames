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
.admin{
   position:absolute;
   top:0px;
   right:100px;
  }
h1 {color: blue;}
h2 {color: blue;}
</style>
</head>
<body>

<h1 align="center"><img src = img/welcome.png></h1>
<div class="w3-container" align="center">
    <p><a href="gamelib.php"> <img src="img/play-btn.png" ></a></p>
    <p><a href="test.php"> <img src="img/scoreboard-btn.png" ></a></p>
    <p><a href="/adminQ/timeTable.php"> <img src="img/manage_users-btn.png" ></a></p>
    <p><a href="disconnect.php"> <img src="img/logout-btn.png" ></a></p>
</div>
<div class="admin">
  <h2><img src = img/admin_panel.png></h2>
  <p><a href="test.php"> <img src="img/messages-btn.png" ></a></p>
  <p><a href="adminq/premiumusers.php"> <img src="img/prem_users-btn.png" ></a></p>
  <p><a href="adminQ/UserPerm.php"> <img src="img/user-permissions-btn.png" ></a></p>
  <p><a href="adminQ/revenue.php"> <img src="img/Revenue.png" ></a></p>
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
    if($_SESSION['perm']!=0)
    {
      header('location:user_perm.php');
    }
  }
 ?>
