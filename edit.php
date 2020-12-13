<?php

session_start();
$unique = $_POST["u_id"];
$type = $_POST["type"];
$provider = $_POST["provider"];
$price = $_POST["price"];
$desc = $_POST['service'];
$image = $_POST['img'];
echo "$unique";
echo "$type";
echo "$desc";
echo "$price";
echo "$provider";


	$conn = mysqli_connect("localhost", "root", "root", "test1");

	if(!$conn){

	 	echo "Database connection failed!";
	 }
	

	else {

		echo "Displaying all data";
		echo "$price";
		$sql = "UPDATE SERVICE SET Type='$type', price=$price, Provider = '$provider', Descripition = '$desc', Image='$image'  WHERE Unique_id = '$unique'";

		$result = mysqli_query($conn, $sql);
	    echo "$price";
	    $row = mysqli_fetch_assoc($result);
	    //echo $row['Type	'];

	     header("location: View_service.html");
	    //UPDATE SERVICE SET Type='$type',price=$price, Provider='$provider', Descripiiton='$desc' WHERE Unique_id is '$unique'
		}


?>
