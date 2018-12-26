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

.container{
  size:50%;
  width:500px;
  height:auto;
  overflow:auto;
  position: absolute;
  top:50%;
}
.sponsor{
  background-size: auto;
  width: 500px;
  height: auto;
}

.pic
{
  width:500px;
  height:auto;
}

</style>
</head>
<body>

<h1 align="center"><img src = img/welcome.png></h1>
<div class="w3-container" align="center">
  <p><a href="gamelib_base.html"> <img src="img/play-btn.png" ></a></p>
  <p><a href="test.php"> <img src="img/scoreboard-btn.png" ></a></p>
  <p><a href="randGame.php"> <img src="img/random-btn.png" ></a></p>
  <p><a href="userq/info.php"> <img src="img/usr_info-btn.png" ></a></p>
  <p><a href="paymentPage.php"> <img src="img/prem-btn.png" ></a></p>
  <p><a href="disconnect.php"> <img src="img/logout-btn.png" ></a></p>
</div>

<div class="container">
    <div class="sponsor">
    <?php
      $num =rand(10,100)%4;

      if($num==0)
          echo '<img src="ads/ad0.jpeg" class="pic">';
      if($num==1)
          echo '<img src="ads/ad1.jpeg" class="pic">';
      if($num==2)
          echo '<img src="ads/ad2.jpeg" class="pic">';
          if($num==3)
              echo '<img src="ads/ad3.jpeg" class="pic">';



              session_start();
                  $servername ="localhost";
                  $username ="root";
                  $password = "12345";
                  $conn = mysqli_connect($servername,$username,$password);
                  mysqli_select_db($conn,'nostalgames_db');

                  $a = "INSERT INTO `income`(`date`, `source`,`amount`) VALUES (CURDATE(),'ads',0.8)";
                  $res = mysqli_query($conn,$a);


    ?>
    </div>
</div>


</body>
</html>
