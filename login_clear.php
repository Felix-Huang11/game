<?php 
	$servername = "site-db";
	$username = "flarum_db_user";
	$password = "CduX7vqJfRx6";
	$db_name = "goaskme_game";
	$date = new DateTime();
	$expired = $date->getTimestamp() - 300;

	// Create connection
	$conn = new mysqli($servername, $username, $password, $db_name);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$stmt = $conn->prepare("DELETE FROM game_login WHERE myTimestamp < ?");
	$stmt->bind_param("i", $expired);
	$stmt->execute();

	$stmt->close();
	$conn->close();

?>