<?php
require_once('connect.php');
session_start();
if(!isset($_SESSION['key'])){
	
	header('Location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Library</title>
</head>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style/index.css">
<?php include('navbar.php');?>
<?php include('bookauthenticate.php');?>
<body background="librarybg3.jpg">
<div class="container">
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"method="post">

		<div class="form-group col-md-6">
			<h2 style="color: white">ADD BOOKS</h2>
		</div>

		<div class="form-group col-md-6 <?php echo (!empty($ISBN_ERR)) ? 'has-error' : ''; ?>">
			<input type="text" class="form-control" name="ISBN" placeholder="ISBN">
			<span class="help-block"><?php echo $ISBN_ERR; ?></span>
		</div>

		<div class="form-group col-md-6 <?php echo (!empty($TITLE_ERR)) ? 'has-error' : ''; ?>">
			<input type="text" class="form-control" name="TITLE" placeholder="TITLE">
			<span class="help-block"><?php echo $TITLE_ERR; ?></span>
		</div>

		<div class="form-group col-md-6 <?php echo (!empty($LANGUAGE_ERR)) ? 'has-error' : ''; ?>">
			<input type="text" class="form-control" name="LANGUAGE" placeholder="LANGUAGE">
			<span class="help-block"><?php echo $LANGUAGE_ERR; ?></span>
		</div>
		<div class="form-group col-md-6 <?php echo (!empty($MRP_ERR)) ? 'has-error' : ''; ?>">
			<input type="text" class="form-control" name="MRP" placeholder="MRP">
			<span class="help-block"><?php echo $MRP_ERR; ?></span>
		</div>

		<div class="form-group col-md-6 <?php echo (!empty($PUBLISHER_ERR)) ? 'has-error' : ''; ?>">
			<input type="text" class="form-control" name="PUBLISHER" placeholder="PUBLISHER">
			<span class="help-block"><?php echo $PUBLISHER_ERR; ?></span>
		</div>
		<div class="form-group col-md-6 <?php echo (!empty($PUB_DATE_ERR)) ? 'has-error' : ''; ?>">
			<input type="date" class="form-control" name="PUB_DATE" placeholder="PUB_DATE">
			<span class="help-block"><?php echo $PUB_DATE_ERR; ?></span>
		</div>
		<div class="form-group col-md-6 <?php echo (!empty($QUANTITY_ERR)) ? 'has-error' : ''; ?>">
			<input type="text" class="form-control" name="QUANTITY" placeholder="QUANTITY">
			<span class="help-block"><?php echo $QUANTITY_ERR; ?></span>
		</div>
		<div class="form-group col-md-6">
		<input type="submit" class="btn btn-primary" value="Add Book"></input>
		</div>
		</form>
		</div>
</body>
</html>
