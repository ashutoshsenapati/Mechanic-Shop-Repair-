<?php
session_start();

	$conn = mysqli_connect("localhost", "root", "root", "test1");

	if(!$conn){

	 	echo "Database connection failed!";
	 }
    $sql="UPDATE SERVICE SET Flag = 1 WHERE Unique_id = '$service'";
    if (mysqli_query($conn, $sql)) 
    {   $service = $_POST['id'];
        $mail = $_SESSION["mail"];
        $sql="DELETE FROM CART WHERE service_id = '".$service."'";
        $sql1 = "UPDATE service SET FLAG=NULL WHERE Unique_id='$service'";
        mysqli_query($conn, $sql);
        mysqli_query($conn, $sql1);
        echo "Service $service removed from cart";
        header("location: cart.html");
    } else 
    {
        echo "Error updating record: " . mysqli_error($conn);
    }


?>
	