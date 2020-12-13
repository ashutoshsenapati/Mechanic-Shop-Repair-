<?php
$delete_us = $_POST["mail"];
echo $delete_us;


	$conn = mysqli_connect("localhost", "root", "root", "test1");

	if(!$conn){

	 	echo "Database connection failed!";
	 }
	

	else {
		$sql = "DELETE FROM cust WHERE mail='$delete_us' ";

		$result = mysqli_query($conn, $sql);
 				
 			header("location: View_User.html");
             }
	
	// 	}




?>