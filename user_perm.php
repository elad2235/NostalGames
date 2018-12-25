<?php
session_start();

if(!isset($_SESSION['perm']))
{
  header('location:Login.php');
}

else {


      $permission = $_SESSION['perm'];
      if($permission == 1)
      {
        header('location:usr_main.php');
      }

      elseif ($permission == 3) {
        header('location:admin.php');
      }

      elseif ($permission == 2) {
        header('location:premium_main.php');
      }

      else {
        header('location:Login.php');
      }
    }

 ?>
