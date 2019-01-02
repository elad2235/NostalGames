<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Messages</title>
    <link rel ="stylesheet" href ="messages.css">
    <body>
      <h3><img src="../img/messages-banner.png" class ="title"></h3>
      <table>
        <?php
        session_start();
            $servername ="localhost";
            $username ="root";
            $password = "12345";
            $conn = mysqli_connect($servername,$username,$password);
            mysqli_select_db($conn,'nostalgames_db');

          $sql = " SELECT * FROM `mess_db` WHERE 1";

        $res=mysqli_query($conn,$sql);
        echo "<tr><th>Username</th><th>Message</tr>";
        while ($row = $res->fetch_assoc())
        {
            echo "<tr><td>".$row['username']."</td><td>".$row['mess']."</td><td>";
        }
         ?>

         <div class = "ctrl">
         <div class='controls'><a href="../user_perm.php"> <img src="../img/MainMenu.png" ></a></div>
             <div class='controls'> <img src="../img/Back.png" onclick=window.history.back()></div>
       </div>
      </table>

    </body>
</html>
