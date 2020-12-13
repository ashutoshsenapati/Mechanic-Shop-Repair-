<?php
session_start();

	// $fname = $_POST["fullname"];
	// $email = $_POST["mail"];
	// $password = $_POST["password"];
	// $add1 = $_POST["address"];
	// $_SESSION["fname"]=$fname;


	$conn = mysqli_connect("localhost", "root", "root", "test1");

	if(!$conn){

	 	echo "Database connection failed!";
	 }



else {
	$device = $_GET["device"];
	if ($device == "All"){
		$device = "%";
	}
    if ($_GET["price"] == "All") {
        $sql    = "SELECT * FROM SERVICE WHERE TYPE LIKE '$device'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {

        	if(stripos($row['Descripition'],$_GET["search"]) !== false && $row['Flag']!=1){


			// echo "<div class='card card-1 col-md-12 row'><div class='row'><div class='col-md-9 row'>

			// 		<div class='col-md-4 c'>Device: ".$row['Type']."</div>
			// 		<div class='col-md-4 c'>Serviced By: ".$row['Provider']."</div>
			// 		<div class='col-md-4 c'>".$row['price']."</div>
			// 		<div class='col-md-12'>Overview: ".$row['Descripition']."</div></div>
			// 		<div class='col-md-3 b'><a href='/' class='genric-btn success radius get'>Get Service</a></div>
			//  		</div></div>";
			 		$rows[]=$row;
			 	}
			 else if($_GET['search']=='' && $row['Flag']!=1){

			// echo "<div class='card card-1 col-md-12 row'><div class='row'><div class='col-md-9 row'>

			// 		<div class='col-md-4 c'>Device: ".$row['Type']."</div>
			// 		<div class='col-md-4 c'>Serviced By: ".$row['Provider']."</div>
			// 		<div class='col-md-4 c'>".$row['price']."</div>
			// 		<div class='col-md-12'>Overview: ".$row['Descripition']."</div></div>
			// 		<div class='col-md-3 b'><a href='/' class='genric-btn success radius get'>Get Service</a></div>
			//  		</div></div>";
			 		$rows[]=$row;	
			 }	
			//$rows[]=$row;
        }
	} 
	else if ($_GET["price"] == "Low") {
        $sql    = "SELECT * FROM SERVICE WHERE PRICE <= 500 AND TYPE LIKE '$device'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
			
			if(stripos($row['Descripition'],$_GET["search"]) !== false && $row['Flag']!=1){
					$rows[] = $row;
				}
			else if($_GET['search']==''){
						$rows[] = $row;	
			 }

					        }
	} 
	else if ($_GET["price"] == "Medium") {
        $sql    = "SELECT * FROM SERVICE WHERE PRICE <= 700 AND TYPE LIKE '$device'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
			if(stripos($row['Descripition'],$_GET["search"]) !== false && $row['Flag']!=1){
							$rows[] = $row;
				}
				else if($_GET['search']=='' && $row['Flag']!=1){

							$rows[] = $row;
			 	
			 }
					
        }
	} 
	else {
        $sql    = "SELECT * FROM SERVICE  WHERE PRICE > 700 AND TYPE LIKE '$device'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
			if(stripos($row['Descripition'],$_GET["search"]) !== false && $row['Flag']!=1){
							$rows[]=$row;

				}
				else if($_GET['search']=='' && $row['Flag']!=1){
						$rows[]=$row;

			 }
					
        }
    }
    // header('Content-type: application/json');
    echo(json_encode($rows));
}

//     //header("location: index.html");
//     }



?>
	