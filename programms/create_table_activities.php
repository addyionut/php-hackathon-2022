<?php
	$conn = mysqli_connect("localhost", "root", "");
	$activities_table = "CREATE TABLE `activities` (Activity_name VARCHAR(20) PRIMARY KEY,
						Room VARCHAR(30),
                        Start_time TIMESTAMP,
                        End_time TIMESTAMP,
                        Participants_number INT(20))";
	if (mysqli_query($conn, $activities_table)) {
		echo "The table was created.";
	}
	else {
		echo "The table was not created:".mysqli_error($conn);
	} 
	echo "<br>";	 	
	//mysqli_close($conn);
?>