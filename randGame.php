<?php
session_start();
if(!isset($_SESSION['user']))
{
  header('location:login.php');
}

else {
    if($_SESSION['perm']==1)
    {
      header('location:/4inrow/connectfour.html');
    }
    else {
      $gameNum=rand()%2;
      if($gameNum==0)
      {
        header('location:/4inrow/connectfour.html');
      }

      else {
        header('location:/4inrow/connectfour.html');
      }
    }
}
 ?>
