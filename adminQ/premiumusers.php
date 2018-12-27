<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Users List</title>
    <link rel ="stylesheet" href ="premiumusers.css">
    <body>
      <h3>Premium users List:</h3>
      <table>
        <?php
        session_start();
            $servername ="localhost";
            $username ="root";
            $password = "12345";
            $conn = mysqli_connect($servername,$username,$password);
            mysqli_select_db($conn,'nostalgames_db');

          $sql = "SELECT * FROM premium";

        $res=mysqli_query($conn,$sql);
        echo "<tr><th>Username</th><th>First name</th><th>Last name<th>Date</th></tr>";
        while ($row = $res->fetch_assoc())
        {
            echo "<tr><td>".$row['username']."</td><td>".$row['first_name']."</td><td>".$row['last_name']."</td><td>".$row['date']."</td></tr>";
        }
         ?>
      </table>

    </body>
</html>
