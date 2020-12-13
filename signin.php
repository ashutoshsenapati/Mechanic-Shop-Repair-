<?php
session_start();

$_SESSION["mail"] = $_POST["mail"];
// $_SESSION["pass"] = $_POST["password"];
$mail = $_POST["mail"];
$pass = $_POST["password"];
$hash = md5($pass . $salt);

// echo $mail.'</br>';
// echo $pass.'</br>';
$conn = mysqli_connect("localhost", "root", "root", "test1");

  if(!$conn){

	 	echo "Database connection failed!";
	 }

   else {

		// echo "Displaying all data";
	 if($mail=="admin@login" and $pass="1234"){

		header("location: Admin.html");
	     }		
 	  else{
		$sql = "SELECT name FROM cust WHERE mail='$mail' AND password = '$hash';";
		// echo "Yo";
		// echo "$mail".'</br>';
		$result = mysqli_query($conn, $sql);
		// $row1 = mysqli_fetch_assoc($result);
		$rows =  mysqli_num_rows($result);
		echo $row1['Name'];
		if($rows>0){
			echo "SUCCESFULLY LOGGED IN";
			while($row = mysqli_fetch_assoc($result)){
			// echo $row["name"];
			$_SESSION["name"] = $row["name"];
		}
		echo $_SESSION["name"];
			header("location: welcome.html");
			}
		else
		{

			echo " wrong username or password";

			// echo 'alert("wrong info")';
			//header("location: index.html");


		}
	}
}


?>
