<?php
require_once('connect.php');
session_start();
if(!isset($_SESSION['key'])){
	
	header('Location:index.php');
}
?>
<html>
<head>
	<title>Remove Books</title>
</head>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style/index.css">
<?php include('navbar.php');?>
<?php include('delFromdb.php');?>
<body background="librarybg3.jpg">
<div class="container">
	<form name="login_form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> 
		
		<div class="form-group col-md-6">
			<h2 style="color: white">REMOVE BOOKS</h2>
		</div>

		<div class="form-group col-md-6">
			<input type="text" class="form-control" placeholder="ISBN" name="ISBN" required>
		</div>

		<div class="form-group col-md-6">
			<input type="submit" value="Remove" class="btn btn-primary"></input>
		</div>
	</form>
</div>
</body>
</html>