<?php
	include 'db_connexion.php';
	$users_table = "CREATE TABLE `users_app` (
								Username VARCHAR(20),
								CNP VARCHAR(30) PRIMARY KEY,
                                Activity VARCHAR(20),
								Booking_time TIMESTAMP
                                )";
	mysqli_query($conn, $users_table);
	if (mysqli_query($conn, $users_table)) {
		echo "The table was created.";
	}
	else {
		echo "The table was not created:".mysqli_error($conn);
	} 
	echo "<br>";	 	
	//mysqli_close($conn);
?>