<?php
session_start();
$account = $_SESSION["account"];
$game = $_GET["x"];
$obj = json_decode($game);
$score = $obj->sc;
$game_id = $obj->id;

$servername = "site-db";
$username = "flarum_db_user";
$password = "CduX7vqJfRx6";
$db_name = "goaskme_game";

$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

if($score != NULL){
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

		$sql = "UPDATE game_bonus_pool SET cumulative_points = cumulative_points + 5 WHERE game_id = 1";
		$conn->query($sql);

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

		$sql = "UPDATE game_bonus_pool SET cumulative_points = cumulative_points + 5 WHERE game_id = 2";
		$conn->query($sql);

	}elseif ($game_id == 3){

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

		$sql = "UPDATE game_bonus_pool SET cumulative_points = cumulative_points + 5 WHERE game_id = 3";
		$conn->query($sql);
	}
}

$conn->close();

?>