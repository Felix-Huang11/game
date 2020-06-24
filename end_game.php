<?php
session_start();
$account = $_SESSION["account"];
$game = $_GET["x"];
$obj = json_decode($game);
$score = $obj->sc;
$game_id = $obj->id;

$servername = "localhost";
$username = "root";
$password = "root";
$db_name = "goaskme_game";

$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

if($game_id == 1){

	$stmt = $conn->prepare("SELECT * FROM game_snake WHERE account = ?");
	$stmt->bind_param("s", $_SESSION["account"]);
	$stmt->execute();
	$res = $stmt->get_result();
	$row = $res->fetch_array(MYSQLI_ASSOC);
	$stmt->close();
	if($row == NULL){
		$st = $conn->prepare("INSERT INTO game_snake(account, score, last_game_time) VALUES (?, ?, DEFAULT)");
		$st->bind_param("si", $account, $score);
		$st->execute();
		$st->close();	
	}else{
		$st = $conn->prepare("UPDATE game_snake SET score = score + ? WHERE account = ?");
		$st->bind_param("is", $score, $account);
		$st->execute();
		$st->close();
	}

}elseif ($game_id == 2) {

	$stmt = $conn->prepare("SELECT * FROM game_2048 WHERE account = ?");
	$stmt->bind_param("s", $_SESSION["account"]);
	$stmt->execute();
	$res = $stmt->get_result();
	$row = $res->fetch_array(MYSQLI_ASSOC);
	$stmt->close();
	if($row == NULL){
		$st = $conn->prepare("INSERT INTO game_2048(account, score, last_game_time) VALUES (?, ?, DEFAULT)");
		$st->bind_param("si", $account, $score);
		$st->execute();
		$st->close();	
	}else{
		$st = $conn->prepare("UPDATE game_2048 SET score = score + ? WHERE account = ?");
		$st->bind_param("is", $score, $account);
		$st->execute();
		$st->close();
	}

}else{

	$stmt = $conn->prepare("SELECT * FROM game_hitball WHERE account = ?");
	$stmt->bind_param("s", $_SESSION["account"]);
	$stmt->execute();
	$res = $stmt->get_result();
	$row = $res->fetch_array(MYSQLI_ASSOC);
	$stmt->close();
	if($row == NULL){
		$st = $conn->prepare("INSERT INTO game_hitball(account, score, last_game_time) VALUES (?, ?, DEFAULT)");
		$st->bind_param("si", $account, $score);
		$st->execute();
		$st->close();	
	}else{
		$st = $conn->prepare("UPDATE game_hitball SET score = score + ? WHERE account = ?");
		$st->bind_param("is", $score, $account);
		$st->execute();
		$st->close();
	}
}

$conn->close();

?>