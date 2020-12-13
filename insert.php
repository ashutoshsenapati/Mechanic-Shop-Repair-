<?php

session_start();
$unique = $_POST["u_id"];
$type = $_POST["type"];
$provider = $_POST["provider"];
$price = $_POST["price"];
$desc = $_POST['service'];
$image = $_POST['img'];
echo "$unique";


	$conn = mysqli_connect("localhost", "root", "root", "test1");

	if(!$conn){

	 	echo "Database connection failed!";
	 }
	

	else {

		echo "Displaying all data";
		echo "$price";
		$sql = "INSERT INTO service VALUES ('$type','$provider','$desc','$price','$unique',null,'$image')";

		$result = mysqli_query($conn, $sql);
	    header("location: admin.html");
		}


?>
