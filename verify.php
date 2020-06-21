<?php
$input = file_get_contents("php://input");
$obj = json_decode($input);
$uuid = $obj->uuID;
$account = $obj->account;
$timestamp = $obj->timestamp;
$ref = $obj->ref;
$sign = $obj->sign;

if(!is_null($uuid)){
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$db_name = "goaskme_game";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $db_name);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$stmt = $conn->prepare("INSERT INTO game_login (uuid, account, myTimestamp,ref,sign) VALUES (?, ?, ?, ?, ?)");
	$stmt->bind_param("ssiss", $uuid, $account, $timestamp, $ref, $sign);

	$myObj = new stdClass();
	if($stmt->execute() === TRUE){
		$myObj->code = 0;
		$myObj->error = "successful";
		$myJSON = json_encode($myObj);
		echo $myJSON;
	}else{
		$myObj->code = 1;
		$myObj->error = "Failed";
		$myJSON = json_encode($myObj);
		echo $myJSON;
	}

	$stmt->close();
	$conn->close();
}


?>