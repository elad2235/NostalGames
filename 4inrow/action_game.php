<?php
if(isset($_POST['reset']))
{
    header('location:../4inrow/connectfour.html');
}

if(isset($_POST['save']))
{
  session_start();

  $servername ="localhost";
  $username ="root";
  $password = "12345";
  $conn = mysqli_connect($servername,$username,$password);
  mysqli_select_db($conn,'nostalgames_db');

  $user=$_SESSION['user'];
  $user2=$_SESSION['user2'];

  if($_POST['save']==1)
  {
    $check =" SELECT * FROM `connectfour_db` WHERE `username`='$user'";
    $res = mysqli_query($conn,$check);
    $numofrows = mysqli_num_rows($res);

    if($numofrows==0)
    {
      $sql=" INSERT INTO `connectfour_db`(`username`, `wins`) VALUES ('$user',1)";
    }
    else
    {
        $sql =" UPDATE `connectfour_db` SET `wins`=wins+1 WHERE `username`='$user'";
    }
    mysqli_query($conn,$sql);
  }
  if($_POST['save']==-1)
  {
    if($_SESSION['user2']!='Guest')
    {
    $check =" SELECT * FROM `connectfour_db` WHERE `username`='$user2'";
    $res = mysqli_query($conn,$check);
    $numofrows = mysqli_num_rows($res);

    if($numofrows==0)
    {
      $sql=" INSERT INTO `connectfour_db`(`username`, `wins`) VALUES ('$user2',1)";
    }
    else
    {
        $sql =" UPDATE `connectfour_db` SET `wins`=wins+1 WHERE `username`='$user2'";
    }
    mysqli_query($conn,$sql);
  }

}

  header('location:connectfour.html');
}

 if(isset($_POST['close']))
{
  header('location:../user_perm.php');
}

?>
