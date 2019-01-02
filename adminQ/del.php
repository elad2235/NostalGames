<?php
session_start();
$servername ="localhost";
$username ="root";
$password = "12345";
$conn = mysqli_connect($servername,$username,$password);
mysqli_select_db($conn,'nostalgames_db');

$user =$_GET['usertodel'];
 $sql =" DELETE FROM `users` WHERE `username`='$user'";
 mysqli_query($conn,$sql);
 $sql =" DELETE FROM `premium` WHERE `username`='$user'";
mysqli_query($conn,$sql);
 header('location:userperm.php');

 ?>
