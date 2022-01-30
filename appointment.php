<html>
	<body style="background-color:LightCyan">
		<h2 style="text-align:center;">Here is your appointment</h2>
		<hr>
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
            echo "Name: " . $_POST["username"] . "<br>Activity: " . $_POST['activity'] . "<br>Booked time: " . $_POST['meeting_time'];
            if (isset($_POST['buton'])) {
                //if ($cnp) {
                    $insert = "INSERT INTO users_app (username, cnp, activity, meeting_time) VALUES ('$name', '$cnp','$activity','$time')";
                    mysqli_query($conn, $insert);
                //}
               // else{
                //    echo "Please, fill in the form!<BR><BR>";
               // }
                if(isset($_POST["cnp"]) && !empty($_POST["cnp"])) {
                    echo "Name: " . $_POST["username"] . "<br> Activity: " . $_POST['activity'] . "Booked time: " . $_POST['meeting_time'];
                }
            }
        //mysqli_close($conn);
    ?>
	</h3>
	<a href="appointments_list.php">Appointments</a>	
</html>