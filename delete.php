<?php
session_start();
$delete = $_POST["delete"];
$edit = $_POST["edit"];
echo $delete;


	$conn = mysqli_connect("localhost", "root", "root", "test1");

	if(!$conn){

	 	echo "Database connection failed!";
	 }
	

	else if($edit=="") {
		$sql = "UPDATE SERVICE SET FLAG = '1' WHERE Unique_id='$delete' ";

		$result = mysqli_query($conn, $sql);
 				
 			header("location: View_Service.html");
             }
    else if($delete==""){
		$sql = "SELECT * FROM SERVICE WHERE Unique_id='$edit' ";

			//echo "$edit";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);
 			$_SESSION["id"] = $row["Unique_id"];
 			$_SESSION["Provider"] = $row["Provider"];
 			$_SESSION["Type"] = $row["Type"];
 			$_SESSION["Price"] = $row["price"];
 			$_SESSION["Description"] = $row["Descripition"];
 			$_SESSION["image"] = $row["Image"];
 			

 			header("location: Edit_Service.php");	
    }
	
	// 	}




?>