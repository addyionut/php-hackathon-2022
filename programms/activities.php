<html>
	<body style="background-color:LightCyan">
		<h2 style="text-align:center;">Activity created</h2>
	</body>
</html>

<html>
	<h3 style="text-align:center;">
	<hr>
    <?php
        include '..\new_appointments\create_db_users.php';
        include 'create_table_activities.php';
        $activity_name = $_POST['activity_name'];
        $room = $_POST['room'];
        $start_time = $_POST['start_time'];
        $end_time = $_POST['end_time'];
        $participants = $_POST['participants'];
        $insert = "INSERT INTO activities (Activity_name, Room, Start_time, End_time, Participants_number) VALUES ('$activity_name', '$room', '$start_time', '$end_time', $participants)";
        $conn = mysqli_connect("localhost", "root", "");
        if (mysqli_query($conn, $insert)) {
            echo "Data added in the table<br>";
        }
        else {
            echo "Not added<br>";
        }
        if (isset($_POST["activity_name"]) && !empty($_POST["activity_name"])) {
            echo "Activity: " . $_POST["activity_name"] . "<br>Room: " . $_POST['room'] . "<br>Start time: " . $_POST['start_time'] . "<br>End time: " . $_POST['end_time'] . "<br>Maximum number of participants: " . $_POST['participants'];
        }
        //mysqli_close($conn);
    ?>
	</h3>
	<a href="activities_list.php">Appointments</a>	
</html>