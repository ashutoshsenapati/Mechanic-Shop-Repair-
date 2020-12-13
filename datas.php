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
		$sql = "SELECT * FROM CUST ";

		$result = mysqli_query($conn, $sql);
		
		while($row = mysqli_fetch_assoc($result)) {
			echo "<tr>

					<td class='c'>".$row['Name']."</td>
					<td class='c'>".$row['Addr']."</td>
					<td class='c'>".$row['Mail']."</td>
					<td class='c'>".$row['Password']."</td>
					<td class='c'><input type='checkbox' id='mail' name='mail' value='".$row['Mail']."'></td>
					</tr>";
 				
 }

             }
	// 	//header("location: index.html");
	// 	}



?>