<?php
require_once('connect.php');

$_SESSION['var']=0;
$ISBN="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$fine='0';
	$rollno=$_POST["rollno"];
	$ISBN=$_POST["ISBN"];
	$issue_date=$_POST["issue_date"];
	$no_issued_books='';

	$que="SELECT COUNT(ISBN) AS COUNT_ISBN FROM issued_books WHERE student_rollno=$rollno AND RENEWED_DATE='0000-00-00'";
	$re=mysqli_query($conn, $que);
    if(mysqli_num_rows($result)>0){

        while ($row=mysqli_fetch_assoc($result)){

        	$no_issued_books=$row["COUNT_ISBN"];
            
                }
            
            }

    if ($no_issued_books<4) {

		$query="UPDATE book SET QUANTITY=QUANTITY-1 WHERE ISBN='$ISBN' AND QUANTITY!=0";
		$res=mysqli_query($conn, $query);

		if($res){

			$sql="INSERT INTO issued_books VALUES($rollno, '$ISBN', '$issue_date', '', $fine )";
			$result=mysqli_query($conn, $sql);

		}
	}
	mysqli_close($conn);
header('Location:issuebooks.php');
}