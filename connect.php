<?php
// define('hostname','localhost');
// define('username','root');
// define('password','');
// define('database','library');
// $conn = mysqli_connect(hostname,username,password,database);
$conn = mysqli_connect('localhost','root','','library');
if($conn==TRUE)
	//echo "suce";
if ($conn->connect_error) {
    die("Error");
echo "error";
} 
?>