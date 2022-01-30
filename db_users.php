<?php
	include'server_conn.php';
	$db_users="CREATE DATABASE users";
    	if (mysqli_query($conn,$db_users)) {	
        	echo "Database created successfuly";	
   	}
    	else {
        	echo "Error creating database:".mysqli_error($conn);	
    	}
    	//mysqli_close($conn);
?>
