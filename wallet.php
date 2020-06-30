<?php
	session_start();
	$info = $_GET["info"];
    $obj = json_decode($info);
    $account = $obj->account;
    $ref = $obj->ref;
    if($account != NULL and $ref != NULL){
    	$_SESSION["account"] = $account;
    	$_SESSION["wallet"] = $ref;
    }

    if($_SESSION["account"] != NULL and $_SESSION["wallet"] != NULL){
    	$servername = "site-db";
		$username = "flarum_db_user";
		$password = "CduX7vqJfRx6";
		$db_name = "goaskme_game";

		$conn = new mysqli($servername, $username, $password, $db_name);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$stmt = $conn->prepare("SELECT account, wallet, points FROM game_user WHERE account = ?");
		$stmt->bind_param("s", $_SESSION["account"]);
		$stmt->execute();
		$res = $stmt->get_result();
		$row = $res->fetch_array(MYSQLI_ASSOC);
		// var_dump($row);
		$points = $row["points"];
		$stmt->close();
		if($row == NULL){
			$new_points = 0.0;
			$st = $conn->prepare("INSERT INTO game_user (account, wallet, points) VALUES (?, ?, ?)");
			$st->bind_param("ssd", $_SESSION["account"], $_SESSION["wallet"], $new_points);
			$st->execute();
			$st->close();	
		}else{
			$st = $conn->prepare("UPDATE game_user SET wallet= ? WHERE account = ?");
			$st->bind_param("ss", $_SESSION["wallet"], $_SESSION["account"]);
			$st->execute();
			$st->close();
		}
		
		$conn->close();
    }
    
?>