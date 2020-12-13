<?php
session_start();
	
	$conn = mysqli_connect("localhost", "root", "root", "test1");
	if(!$conn){

	 	echo "Database connection failed!";
	 }
    $sql = "SELECT service_id FROM CART WHERE customer_mail = '".$_SESSION['mail']."'";
    $result = mysqli_query($conn, $sql);
    while ($row1 = mysqli_fetch_assoc($result)) {
        $service = $row1['service_id'];
        $sql = "SELECT * FROM Service WHERE Unique_id = '".$service."'";
        $res = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($res)) {
        	// echo "Done";
            echo "<div id = '".$row['Unique_id']."' class='card card-1 col-md-12 row'><div class='row'><div class='col-md-9 row'>

					<div class='col-md-4 c'>Device: ".$row['Type']."</div>
					<div class='col-md-4 c'>Serviced By: ".$row['Provider']."</div>
					<div class='col-md-4 c'>".$row['price']."</div>
					<div class='col-md-12'>Overview: ".$row['Descripition']."</div></div>
					<div  id='book'  class='col-md-3 b'><a class='genric-btn danger radius get'>Remove</a></div>
			 		</div></div>";
			 	}
        }


?>
	