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
    <title>Revenue</title>
    <link rel ="stylesheet" href ="revenue.css">
    <body>
      <h3><img src="../img/revenue-banner.png" class ="title"></h3>
      <table>
                <tr><th>Source</th><th>Amount</th></tr>
        <?php
            $sql = " SELECT `source`, ROUND(SUM(`amount`),1) FROM `income` WHERE MONTH(CURDATE())=MONTH(`date`) GROUP BY `source`";
            $res=mysqli_query($conn,$sql);
            while ($row = mysqli_fetch_array($res))
            {
              echo "<tr><td>".$row[0]."</td><td>".$row[1]."$</td></tr>";
            }
         ?>
         <div class = "ctrl">
         <div class='controls'><a href="../user_perm.php"> <img src="../img/MainMenu.png" ></a></div>
             <div class='controls'> <img src="../img/Back.png" onclick=window.history.back()></div>
       </div>
      </table>

    </body>
</html>
