
<?php
session_start();
    $servername ="localhost";
    $username ="root";
    $password = "12345";
    $conn = mysqli_connect($servername,$username,$password);
    mysqli_select_db($conn,'nostalgames_db');


    $a = " SELECT * FROM `users` WHERE `permission` = 0";
    $b = " SELECT * FROM `users` WHERE `permission` = 1";
    $c = " SELECT * FROM `users` WHERE `permission` = 2";

    $res = mysqli_query($conn,$a);
    $ad = mysqli_num_rows($res);

    $res = mysqli_query($conn,$b);
    $base = mysqli_num_rows($res);

    $res = mysqli_query($conn,$c);
    $pre = mysqli_num_rows($res);

    ?>
    <script type='text/javascript'>
            alert('<?php echo "number of admins is $ad, number of base users is $base, number of premiun users is $pre." ?>');
            window.location.replace("../admin.php");
          </script>
  <?php




?>
