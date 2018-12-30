<?php
  session_start();
  if($_POST['user2']=='')
  {
?>
    <script type='text/javascript'>
            alert('Field cant be empty !');
            window.location.replace("player2.html");
          </script>
<?php
  }
  $_SESSION['user2']=$_POST['user2'];
  header('location:connectfour.html');
 ?>
