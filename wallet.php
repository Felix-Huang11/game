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
    
    $points = 0;

    $servername = "localhost";
	$username = "root";
	$password = "root";
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
	
	if($row == NULL){
		$st = $conn->prepare("INSERT INTO game_user (account, wallet,points) VALUES (?, ?, ?)");
		$st->bind_param("ssi", $_SESSION["account"], $_SESSION["wallet"], $points);
		$st->execute();
		$st->close();	
	}else{
		$points = $row->points;
	}
	$stmt->close();
	$conn->close();
?>