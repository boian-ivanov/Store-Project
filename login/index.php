<?php
require('login.php');

if(isset($_SESSION['login_user'])){
	header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
<h1 id='Head_Ob'><a id='Head_Ob' href=../index.php>Обяви.com</a></h1>
<div id="login">
<h2>Login to your account.</h2>
<form action="" method="post">
<!--<label>Username : </label>-->
<input id="name" name="username" placeholder="Username" type="text">
<!--<label>Password : </label>-->
<input id="password" name="password" placeholder="Password" type="password">
<input id="submit" name="submit" type="submit" value="Login">
<b id="register"><a href="register.php">Register</a></b>
<br>
<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>