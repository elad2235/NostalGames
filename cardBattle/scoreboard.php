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
      <h3>battle Scoreboard :</h3>
      <table>
                <tr><th>Username</th><th>Wins</th></tr>
        <?php
            $sql = " SELECT * FROM `battle_db` ORDER BY wins DESC";
            $res=mysqli_query($conn,$sql);
            while ($row = mysqli_fetch_assoc($res))
            {
              echo "<tr><td>".$row['username']."</td><td>".$row['wins']."</td></tr>";
            }
         ?>
      </table>

      <div class = "ctrl">
      <div class='controls'><a href="../user_perm.php"> <img src="../img/MainMenu.png" ></a></div>
          <div class='controls'> <img src="../img/Back.png" onclick=window.history.back()></div>
    </div>

    </body>
</html>
