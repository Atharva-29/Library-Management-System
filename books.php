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
<body background="librarybg3.jpg">
<!-- <style type="text/css">
	div,table,th,td,tbody,tr{
		color: white;
	}
</style> -->

<div class="container ml-0">
	        <div class="row">

			<?php include('connect.php');
			$query="SELECT IMAGE,TITLE,ISBN FROM book";

            if(!($result = mysqli_query($conn,$query))){

                echo "Retrieval of data from database failed".mysql_error();
            }
            if(mysqli_num_rows($result)>0){

                while ($row=mysqli_fetch_assoc($result)){

                   echo '<div class="col-9 col-sm-12 col-md-12 col-lg-4 pb-3">';
                    echo '<div class="card text-center" style="min-width: 16rem;">';
                            
                     echo '<img class="card-img-top img-fluid" src="http://localhost/php/Miniproject/library_git/'.$row["IMAGE"].'">';

                       echo'<div class="card-body">';
                        echo'<h6>'.$row["TITLE"].'</h6>';
                        echo'<p class="text-primary">BOOK ISBN: '.$row["ISBN"].'</p>';
                        echo'</div>';

                    echo'</div>';
                	echo'</div>';
             	}
         	}
            else{

                echo "0 Results";
            }
            mysqli_close($conn);
            ?>

</div>
</body>
</html>