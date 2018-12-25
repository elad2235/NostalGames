<?php
session_start();
    $servername ="localhost";
    $username ="root";
    $password = "12345";
    $conn = mysqli_connect($servername,$username,$password);
    mysqli_select_db($conn,'nostalgames_db');

    $name = $_POST['usrid'];
    $pass = $_POST['pswd'];

    if($name==''|| $pass=='')
    {
      ?>
      <script type='text/javascript'>
              alert('Fields cant be empty !')
              window.location.replace("/register.html");
            </script>
    <?php
    }
    else
    {

    $s = " SELECT * FROM `users` WHERE `username` = '$name' ";

    $res = mysqli_query($conn,$s);
    $num = mysqli_num_rows($res);

    if($num == 1)
    {
      ?>
      <script type='text/javascript'>
              alert('User already exist')
              window.location.replace("/register.html");
            </script>
    <?php
  }
  else {
    $encPASS= hash('SHA256',$pass);
  $s =" INSERT INTO `users`(`username`, `password`, `permission`) VALUES ('$name','$encPASS',1)";
  mysqli_query($conn,$s);
  header('location:Login.php');
  }

}

?>
