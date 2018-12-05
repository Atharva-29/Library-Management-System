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
	<h3>All books currently issued by students:</h3>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">Student ID</th>
	      <th scope="col">Book ID</th>
	      <th scope="col">Book Title</th>
	      <th scope="col">Fine</th>
	    </tr>
	  </thead>
	  <tbody>
		<?php 
            include('connect.php');
            
			$query="SELECT * FROM book,issued_books WHERE book.ISBN = issued_books.ISBN ORDER BY student_rollno ASC";

            if(!($result = mysqli_query($conn, $query))){

                echo "Retrieval of data from database failed".mysql_error();
            }
            if(mysqli_num_rows($result)>0){

                while ($row=mysqli_fetch_assoc($result)){

                    echo "<tr><td>".$row["student_rollno"]."</td><td>".$row["ISBN"]."</td><td>".$row["TITLE"]."</td><td>".$row["FINE"]."</td></tr>";
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