<?php
session_start();

	$conn = mysqli_connect("localhost", "root", "root", "test1");

	if(!$conn){

	 	echo "Database connection failed!";
	 }
    $service = $_POST["id"];
    $sql="UPDATE SERVICE SET Flag = 1 WHERE Unique_id = '$service'";
    if (mysqli_query($conn, $sql)) 
    {
        $mail = $_SESSION["mail"];
        $sql="INSERT INTO CART VALUES ('$mail','$service')";
        mysqli_query($conn, $sql);
        echo "Booking added for $mail";
    } else 
    {
        echo "Error updating record: " . mysqli_error($conn);
    }

?>
	