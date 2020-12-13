<?php

session_start();
echo"hello"	;

	$fname = $_POST["fullname"];
	$email = $_POST["mail"];
	$password = $_POST["password"];
	$add1 = $_POST["address"];
	$_SESSION["fname"]=$fname;
	$hash = md5($password . $salt);
			 echo "$name";


	$conn = mysqli_connect("localhost", "root", "root", "test1");

	if(!$conn){

	 	echo "Database connection failed!";
	 }
	

	else {

		echo "Displaying all data";
		echo "$fname";
		$sql = "INSERT INTO CUST VALUES ('$fname','$email','$hash','$add1')";

		$result = mysqli_query($conn, $sql);
		header("location: welcome.html");
		}





	

	


	






?>