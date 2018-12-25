<?php
session_start();
    $servername ="localhost";
    $username ="root";
    $password = "12345";
    $conn = mysqli_connect($servername,$username,$password);
    mysqli_select_db($conn,'nostalgames_db');

    $name = $_POST['usrid'];
    $pass = $_POST['pswd'];
    $encPASS=hash('SHA256',$pass);
    $s = " SELECT * FROM `users` WHERE `username` = '$name' AND `password` = '$encPASS'";

    $res = mysqli_query($conn,$s);
    $num = mysqli_num_rows($res);

    if($num == 1)
    {
      $usr = mysqli_fetch_object($res);
      $_SESSION['user']=$name;
      $_SESSION['perm']=$usr->permission;

      if($usr->permission == 0){
        header('location:admin.php');
      }

      if($usr->permission == 1){
        header('location:usr_main.php');
      }

      if($usr->permission == 2){
        header('location:premium_main.php');
      }

    }

    else {
      header('location:login.php');
    }

?>
