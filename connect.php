<?php
session_start();
    $servername ="localhost";
    $username ="root";
    $password = "12345";
    $conn = mysqli_connect($servername,$username,$password);
    mysqli_select_db($conn,'nostalgames_db');

    $name = $_POST['usrid'];
    $pass = $_POST['pswd'];

    $s = " SELECT * FROM `users` WHERE `username` = '$name' AND `password` = '$pass'";

    $res = mysqli_query($conn,$s);
    $num = mysqli_num_rows($res);

    if($num == 1)
    {
      $usr = mysqli_fetch_object($res);

      if($usr->permission == 0){
        header('location:admin.html');
      }

      if($usr->permission == 1){
        header('location:usr_main.html');
      }

      if($usr->permission == 2){
        header('location:premium_main.html');
      }

    }

    else {
      echo "FAIL";
    }

?>
