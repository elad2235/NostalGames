<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<style>

body {
    background-image: url("img/bg.png");
    background-size: 100%;
}
input[type=text ] {
    width: 30%;
    padding: 5px 10px;
    margin: 8px;
}
input[type=button ]{
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>
<body>

<h1 align="center"><b><u>Please enter payment information:</u></b></h1>
<br></br>
<div align = "center">
<form action="upgrade.php" method="post">
  <label for="fname"><b>First Name</b></label>
  <input type="text" id="fname" name="fname">
  <br></br>
  <label for="lname"><b>Last Name</b></label>
  <input type="text" id="lname" name="lname">
  <br></br>
  <label for="cnum"><b>Card Number</b></label>
  <input type="text" id="cnum" name="cnum">
  <br></br>
  <label for="expdate"><b>EXP.Date</b></label>
  <input type="text" id="expdate" name="expdate">
  <br></br>
  <label for="cvv"><b>CVV</b></label>
  <input type="text" id="cvv" name="cvv">
  <br></br>
  <input type="submit" value="submit">
</form>
</div>

</body>
</html>
