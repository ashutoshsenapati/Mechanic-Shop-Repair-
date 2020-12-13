<?php
session_start();

	$conn = mysqli_connect("localhost", "root", "root", "test1");

	if(!$conn){

	 	echo "Database connection failed!";
	 }
    $select = mysqli_query($conn, "SELECT * FROM CUST WHERE Mail = '".$_POST['mail']."'") or exit(mysqli_error($connectionID));
    if(mysqli_num_rows($select)) {
    echo 'This email is already being used';
    }
else{
    echo "Email not in use !";
}
?>
	