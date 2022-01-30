<?php
	include 'server_conn.php';
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db_users = "users";
	$conn = mysqli_connect($servername,$username,$password, $db_users);
	if (!$conn){
		die("Connection failed".mysqli_connect_error());	
	}
	else {
        	echo "DB connected succesfully";
    	}	
    	echo "<br>";
	//mysqli_close($conn);	
?>
