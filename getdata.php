<?php

	include('conf.php');

	// query the db, get only some of the queries
	$query = mysqli_query($connection, "SELECT * FROM `shoutbox` ORDER BY id DESC LIMIT 10");

	if($query === false) {
		die(mysqli_error($connection)); // a little precaution
	}

	WHILE ($rows = mysqli_fetch_array($query)):
		$username = $rows['username'];
		$message = $rows['message'];
		$postDate = $rows['date'];

		// display and format data
		echo "<strong>Name:</strong> $username<br>$message<br>$postDate<br><br>";

	endwhile;
	
	// close the connection	 
	mysqli_close($connection);

?>
