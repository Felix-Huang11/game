<?php
session_start();
$account = $_SESSION["account"];
// echo $account;

$servername = "site-db";
$username = "game_user";
$password = "5DtNfLKdPdU1y6AL";
$db_name = "goaskme_game";

$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("SELECT points  FROM game_user WHERE account = ?");
$stmt->bind_param("s", $account);
$stmt->execute();
$res = $stmt->get_result();
$row = $res->fetch_array(MYSQLI_ASSOC);
// var_dump($row);
$points = $row["points"];
// echo $points;
$stmt->close();

if($points >= 5){
	$st = $conn->prepare("UPDATE game_user SET points = points - 5 WHERE account = ?");
	$st->bind_param("s", $account);
	$st->execute();
	$st->close();
}
$conn->close();
//points get into bonus_pool, for the sake of convinience, this part implemented in end_game.php.

?>