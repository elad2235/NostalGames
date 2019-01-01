<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Games Archive</title>
    <link rel ="stylesheet" href ="gamelib.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <script type ="text/javascript" src=""> </script>
</head>
    <body>
      <h3><img src="img/choose_game.png" class ="title"></h3>

      <div class="container">
      <div class="first" onclick=location.href='/4inrow/player2.html'>
        <img src="/img/4in.jpg">
        <div class ="middle">
            <div class="text">Connect Four</div>
          </div>
      </div>
      <div class="second" onclick=location.href='/cardBattle/battle.html'><img src="/img/cardst.png">
        <div class ="middle">
            <div class="text">Cards War</div>
          </div>
      </div>
        </div>

        <div class = "ctrl">
        <div class='controls'><a href="../user_perm.php"> <img src="../img/MainMenu.png" ></a></div>
            <div class='controls'> <img src="../img/Back.png" onclick=window.history.back()></div>
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
    if($_SESSION['perm']==1)
    {
      header('location:user_perm.php');
    }
  }
 ?>
