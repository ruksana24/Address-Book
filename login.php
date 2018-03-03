<!DOCTYPE html>
<html>
<head>
  <title>LogIn</title>
  <link rel="stylesheet" type="text/css" href="css/login.css">
  

</head>
<body>

  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="loginTm.php">

  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="userName" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>