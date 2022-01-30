
<HTML>
	<HEAD>
		<style>
			table,th,td {
				border: 1px solid black;
			}
		</style>
	</HEAD>

	<body>
		<?php
			include 'server_conn.php';
			$afisareTabel = "SELECT * FROM `users_app`";
			$rezultat = mysqli_query($conn, $afisareTabel);
			if(mysqli_num_rows($rezultat) > 0){
				echo"<table width=\"60%\" align=center><tr>
					<th bgcolor=\"00FF00\">Name</th>	
					<th bgcolor=\"00FF00\">CNP</th>
					<th bgcolor=\"00FF00\">Activity/10</th>
					<th bgcolor=\"00FF00\">Booking time</th>";
				while($row=mysqli_fetch_assoc($rezultat)){
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
			//mysqli_close($conexiune);
		?>
	</body>
</html>
