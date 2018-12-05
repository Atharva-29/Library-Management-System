<!DOCTYPE html>
<?php
require_once('connect.php');
session_start();
//echo isset($_SESSION['key']);
if(isset($_SESSION['key'])==1){
	
	header('Location:home.php');
}
?>
<html>
<head>
	<title>Admin Log In</title>
</head>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
<?php include('navbar.php');?>
<style type="text/css">
	body{
		background-repeat: no-repeat;
		background-size: 100%;
	}
</style>
<body background="librarybg1.jpg">
<div class="container">
	<form name="login_form" method="post" action="loginauthenticate.php" > 
		
		<div class="form-group col-md-6">
			<h2 style="color: white">Staff Log In</h2>
		</div>

		<div class="form-group col-md-6">
			<input type="text" class="form-control" name="empid" maxlength=6 placeholder="Staff ID" required>
			</br><p id="error" class="error1"></p></br>
		</div>

		<div class="form-group col-md-6">
			<input type="password" class="form-control" name="pass" placeholder="Password" required><span id="pass"></span></br></center>
		<p id="demo" class="error1"></p>
		</div>

		<div class="form-group col-md-6">
			<input type="submit" value="Login" class="btn btn-primary"></input>
		</div>

	</form>
</div>
</body>

</html>
