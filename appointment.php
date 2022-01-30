<html>
	<body style="background-color:LightCyan">
		<h2 style="text-align:center;">Here is your appointment</h2>
	</body>
</html>

<html>
	<h3 style="text-align:center;">
	<hr>
    <?php
        include 'create_table_users.php';
        $name = $_POST['username'];
        $cnp = $_POST['cnp'];
        $activity = $_POST['activity'];
        $time = $_POST['meeting_time'];
        $insert = "INSERT INTO users_app (Username, CNP, Activity, Booking_time) VALUES ('$name', '$cnp','$activity','$time')";
        if (mysqli_query($conn, $insert)) {
            echo "Data added in the table<br>";
        }
        else {
            echo "Not added<br>";
        }
        if (isset($_POST["cnp"]) && !empty($_POST["cnp"])) {
            echo "Name: " . $_POST["username"] . "<br>Activity: " . $_POST['activity'] . "<br>Booked time: " . $_POST['meeting_time'];
        }
        //mysqli_close($conn);
    ?>
	</h3>
	<a href="appointments_list.php">Appointments</a>	
</html>
