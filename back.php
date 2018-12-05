<?php
require_once('connect.php');
session_start();
?>
<html>
<head>
	<title>Books</title>
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
<style type="text/css">
	div,table,th,td,tbody,tr{
		color: white;
	}
</style>

<div class="container">
	<h3>Search Result:</h3>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">ISBN</th>
	      <th scope="col">TITLE</th>
	      <th scope="col">AVAILABILITY</th>
	    </tr>
	  </thead>
	  <tbody>
		<?php 
            include('connect.php');
            if(isset($_POST['searchquery']) && $_POST['searchquery'] != ""){
			$searchquery = preg_replace('#[^a-z 0-9?!]#i', '', $_POST['searchquery']);
			$query = "(SELECT * FROM book WHERE TITLE LIKE '%$searchquery%') UNION (SELECT * FROM book WHERE ISBN IN (SELECT ISBN FROM written WHERE AUTH_ID IN (SELECT AUTH_ID FROM author WHERE AUTH_NAME LIKE '%$searchquery%')))";
	
}
            if(!($result = mysqli_query($conn,$query))){

                echo "Retrieval of data from database failed".mysql_error();
            }
            if(mysqli_num_rows($result)>0){

                while ($row=mysqli_fetch_assoc($result)){

                    echo "<tr><td>".$row["ISBN"]."</td><td>".$row["TITLE"]."</td><td>".$row["QUANTITY"]."</td></tr>";
                }
            }
            else{

                echo "0 Results";
            }

            mysqli_close($conn)?>
        </tbody>
	</table>
</div>
</body>
</html>


<!-- back.php -->
<!-- <?php
// require_once('connect.php');
// if(isset($_POST['searchquery']) && $_POST['searchquery'] != ""){
// 	$searchquery = preg_replace('#[^a-z 0-9?!]#i', '', $_POST['searchquery']);
// 		$sqlCommand = "(SELECT * FROM book WHERE TITLE LIKE '%$searchquery%') UNION (SELECT * FROM book WHERE ISBN IN (SELECT ISBN FROM written WHERE AUTH_ID IN (SELECT AUTH_ID FROM author WHERE AUTH_NAME LIKE '%$searchquery%')))";
	
// }
        
//     $result = $conn->query($sqlCommand);
//     if($result->num_rows > 0)
// {
		
// 	echo "<table><tr><th>ISBN</th><th>TITLE</th><th>AVAILABILITY</th></tr>";
//     while($row = $result->fetch_assoc()) {
//        echo "<tr><td>".$row["ISBN"]."</td><td>".$row["TITLE"]."</td><td> ".$row["QUANTITY"]."</td></tr>";
//     }
//     echo "</table>";	} 
//     else 
//     {
// 		echo "<h1>No Result Found</h1>";
//	  }
?> -->