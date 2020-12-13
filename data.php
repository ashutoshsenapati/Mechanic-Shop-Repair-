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
		$sql = "SELECT * FROM SERVICE WHERE FLAG IS NULL ";

		$result = mysqli_query($conn, $sql);

		while($row = mysqli_fetch_assoc($result)) {
			echo "<tr>

					<td class='c'>".$row['Type']."</td>
					<td class='c'>".$row['Provider']."</td>
					<td class='c'>".$row['Descripition']."</td>
					<td class='c'>".$row['price']."</td>
					<td class='c'>".$row['Unique_id']."</td>
					<td class='c'><input type='checkbox' id='delete' name='delete' value='".$row['Unique_id']."'></td>
					<td class='c'><input type='checkbox' id='edit' name='edit' value='".$row['Unique_id']."'></td>
					</tr>";
 				
 }

             }
	// 	//header("location: index.html");
	// 	}



?>