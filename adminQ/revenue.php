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
      <h3>Revenue</h3>
      <table>
                <tr><th>Source</th><th>Amount</th></tr>
        <?php
            $sql = " SELECT `source`,ROUND(SUM(amount),1) FROM `income` WHERE MONTH(`date`)=MONTH(CURDATE()) GROUP BY `source`";
            $res=mysqli_query($conn,$sql);
            while ($row = mysqli_fetch_array($res))
            {
              echo "<tr><td>".$row[0]."</td><td>".$row[1]."$</td></tr>";
            }
         ?>
      </table>

    </body>
</html>
