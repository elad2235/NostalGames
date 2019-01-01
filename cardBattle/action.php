<?php
session_start();
if(isset($_POST['reset']))
{
    header('location:../cardBattle/battle.html');
}

if(isset($_POST['save']))
{
  $servername ="localhost";
  $username ="root";
  $password = "12345";
  $conn = mysqli_connect($servername,$username,$password);
  mysqli_select_db($conn,'nostalgames_db');

  $user=$_SESSION['user'];

  if($_POST['save']==1)
  {
    $check =" SELECT * FROM `battle_db` WHERE `username`='$user'";
    $res = mysqli_query($conn,$check);
    $numofrows = mysqli_num_rows($res);

    if($numofrows==0)
    {
      $sql=" INSERT INTO `battle_db`(`username`, `wins`) VALUES ('$user',1)";
    }
    else
    {
        $sql =" UPDATE `battle_db` SET `wins`=wins+1 WHERE `username`='$user'";
    }
    mysqli_query($conn,$sql);
  }
  header('location:battle.html');
}

 if(isset($_POST['close']))
{
  header('location:../user_perm.php');
}

?>
