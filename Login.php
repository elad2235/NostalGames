<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel ="stylesheet" href ="Login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>
    <body>
	<div>
	</div>
        <div class = "loginBox">
          <img class="user" src="img/user2.png">
          <h3>Sign in</h3>
          <form action="connect.php" method="post">
              <div class ="inputBox">
                <input type ="text" name="usrid" placeholder="Username">
                <span><i class ="fa fa-user" aria-hidden="true"></i></span>

                </div>
                <div class ="inputBox">
                  <input type ="password" name="pswd" placeholder="Password">
                  <span><i class ="fa fa-lock" aria-hidden="true"></i></span>
                  </div>
                  <input type ="submit" name="" value="Login" onclick="check(this.form)">
            </form>
            <a href="/register.html">Register</a>
          </div>

    </body>
</html>
