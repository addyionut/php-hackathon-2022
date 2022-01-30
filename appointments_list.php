<!DOCTYPE html>
<html>
	<head>
		<style>
			table,th,td {
				border: 1px solid black;
			}
		</style>
	</head>
	<body>
		<?php
			include 'server_conn.php';
			$users_table = "SELECT * FROM `users_app`";
			$result = mysqli_query($conn, $users_table);
			if (mysqli_num_rows($result) > 0) {
				echo "<table width=\"60%\" align=center><tr>
					<th bgcolor=\"00FF00\">Name</th>	
					<th bgcolor=\"00FF00\">CNP</th>
					<th bgcolor=\"00FF00\">Activity/10</th>
					<th bgcolor=\"00FF00\">Booking time</th>";
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<tr><td>".$row["username"]."</td>"
							."<td>".$row["cnp"]."</td>"
							."<td>".$row["activity"]."</td>"
							."<td >".$row["meeting_time"]."</td>";
				}
				echo "</table>";
			}
			else {
				echo "0 rows selected";
			}
			//mysqli_close($conn);
		?>
	</body>
</html>
