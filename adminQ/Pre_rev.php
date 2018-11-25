
<?php
session_start();
    $servername ="localhost";
    $username ="root";
    $password = "12345";
    $conn = mysqli_connect($servername,$username,$password);
    mysqli_select_db($conn,'nostalgames_db');


    $a = " SELECT * FROM `premium`";

    $res = mysqli_query($conn,$a);
    $pre = mysqli_num_rows($res);
    if(!$pre)
    {
      $total =0;
    }
    else {
      $total = $pre*5;
    }

?>

    <script type='text/javascript'>
            alert('<?php echo "amount of revenue from premiun users is  $total $" ?>');
            window.location.replace("../admin.html");
          </script>
  <?php




?>
