<?php

session_start();

if(isset($_SESSION['user']))
{
  $servername ="localhost";
  $username ="root";
  $password = "12345";
  $conn = mysqli_connect($servername,$username,$password);
  mysqli_select_db($conn,'nostalgames_db');
  $user=$_SESSION['user'];
  $mess= $_POST['message'];

  $sql =" INSERT INTO `mess_db`(`username`, `mess`) VALUES ('$user','$mess')";
  mysqli_query($conn,$sql);


}

  header('location:../user_perm.php');


 ?>
