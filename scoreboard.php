<!doctype html>
<?php
    session_start();
    $servername ="localhost";
    $username ="root";
    $password = "12345";
    $conn = mysqli_connect($servername,$username,$password);
    mysqli_select_db($conn,'nostalgames_db');
 ?>
<html>
<head>
  </div>
    <meta charset="utf-8">
    <title>Scoreboard</title>
    <link rel ="stylesheet" href ="scoreboard.css">
    <body>
      <h3><div class="title"><img src="../img/scoreboard-banner.png"></div></h3>
      <table>
                <tr><th>Game</th><th>Wins</th></tr>
        <?php
            $usr = $_SESSION['user'];
            $sql = " SELECT `wins` FROM `battle_db` WHERE `username`='$usr' ";
            $sql2 = " SELECT `wins` FROM `connectfour_db` WHERE `username`='$usr' ";
            $res=mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($res);
            if(isset($row['wins']))
                  echo "<tr><td>Card Battle</td><td>".$row['wins']."</td></tr>";
            $res=mysqli_query($conn,$sql2);
            $row = mysqli_fetch_assoc($res);
            if(isset($row['wins']))
                  echo "<tr><td>Connect Four</td><td>".$row['wins']."</td></tr>";

         ?>
      </table>

      <div class = "ctrl">
      <div class='controls'><a href="../user_perm.php"> <img src="../img/MainMenu.png" ></a></div>
          <div class='controls'> <img src="../img/Back.png" onclick=window.history.back()></div>
    </div>

    </body>
</html>
