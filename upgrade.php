<?php
session_start();
$servername ="localhost";
$username ="root";
$password = "12345";
$conn = mysqli_connect($servername,$username,$password);
mysqli_select_db($conn,'nostalgames_db');

$user = $_SESSION['user'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];

$s = " INSERT INTO `premium`(`username`, `first_name`, `last_name`, `date`) VALUES ('$user','$fname','$lname', NOW())";
mysqli_query($conn,$s);

$s ="UPDATE `users` SET `permission`=2 WHERE `username`='$user'";
mysqli_query($conn,$s);

$_SESSION['perm']=2;

header('location:user_perm.php');
//header('location:Login.php');
 ?>
