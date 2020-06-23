<?php
// $json = $_GET["p"];
// $obj = json_decode($json);
// $points = $obj->po;
// $account = $obj->acc;

// // file_put_contents("data.txt", $json);

// if($points != NULL and $account != NULL){
// 	$servername = "localhost";
// 	$username = "root";
// 	$password = "root";
// 	$db_name = "goaskme_game";

// 	$conn = new mysqli($servername, $username, $password, $db_name);
// 	if ($conn->connect_error) {
// 		die("Connection failed: " . $conn->connect_error);
// 	}
// 	$stmt = $conn->prepare("UPDATE game_user SET points = points + ? WHERE account = ? and pay_status = 0");
// 	$stmt->bind_param("is",$points, $account);
// 	$stmt->execute();
// 	$stmt->close();

// 	$st = $conn->prepare("UPDATE game_user SET pay_status = 1 WHERE account = ?");
// 	$st->bind_param("s",$account);
// 	$st->execute();
// 	$st->close();

// 	$conn->close();
}

?>