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
    <meta charset="utf-8">
    <title>Users List</title>
    <link rel ="stylesheet" href ="UserPerm.css">
    <body>
      <h3>Users List:</h3>
      <div class="NumUsers">
        <?php
        $a = " SELECT * FROM `users` WHERE `permission` = 0";
        $b = " SELECT * FROM `users` WHERE `permission` = 1";
        $c = " SELECT * FROM `users` WHERE `permission` = 2";

        $res = mysqli_query($conn,$a);
        $ad = mysqli_num_rows($res);

        $res = mysqli_query($conn,$b);
        $base = mysqli_num_rows($res);

        $res = mysqli_query($conn,$c);
        $pre = mysqli_num_rows($res);
        echo "Number of admins is $ad.<br> Number of base users is $base.<br> Number of premiun users is $pre."
        ?>
      <table>
        <?php
          $sql = "SELECT * FROM users";

        $res=mysqli_query($conn,$sql);
        echo "<tr><th>USERNAME</th><th>PERMISSION</th></tr>";
        while ($row = $res->fetch_assoc())
        {
          if($row['permission']==0)
            echo "<tr><td>".$row['username']."</td><td>Admin</td></tr>";
            if($row['permission']==1)
              echo "<tr><td>".$row['username']."</td><td>Base User</td></tr>";
              if($row['permission']==2)
                echo "<tr><td>".$row['username']."</td><td>Premium User</td></tr>";
        }
         ?>
      </table>

    </body>
</html>
