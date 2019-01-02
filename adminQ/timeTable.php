<!doctype html>
<?php
session_start();
    $servername ="localhost";
    $username ="root";
    $password = "12345";
    $conn = mysqli_connect($servername,$username,$password);
    mysqli_select_db($conn,'nostalgames_db');
$months =[
    1=>"January",
    2=>"Febuary",
    3=>"March",
    4=>"April",
    5=>"May",
    6=>"June",
    7=>"July",
    8=>"August",
    9=>"September",
    10=>"October",
    11=>"November",
    12=>"December"
]
 ?>
<html>
<head>
  </div>
    <meta charset="utf-8">
    <title>Users By Month</title>
    <link rel ="stylesheet" href ="timeTable.css">
    <body>
      <h3><div class="title"><img src="../img/users_by_month.png"></div></h3>
      <table>
                <tr><th>Month Registered</th><th>Amount</th></tr>
        <?php
            $sql = " SELECT MONTH(date),COUNT(username) FROM users WHERE YEAR(date)=YEAR(CURDATE()) GROUP BY MONTH(date) ORDER BY `COUNT(username)` DESC  ";
            $res=mysqli_query($conn,$sql);
            while ($row = mysqli_fetch_array($res))
            {
              echo "<tr><td>".$months[$row[0]]."</td><td>".$row[1]."</td></tr>";
            }
         ?>

         <div class = "ctrl">
         <div class='controls'><a href="../user_perm.php"> <img src="../img/MainMenu.png" ></a></div>
             <div class='controls'> <img src="../img/Back.png" onclick=window.history.back()></div>
       </div>
      </table>

    </body>
</html>
