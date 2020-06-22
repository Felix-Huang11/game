<?php
session_start();
$input = file_get_contents("php://input");
$json = $_GET["p"];
if($json != NULL){
	$_SESSION["json"] = $json;
	
	// $obj = json_decode($_SESSION["json"]);
	// $points = $obj->po;
	// $account = $obj->acc;
}

file_put_contents("data.txt", $input);
file_put_contents("da.txt", $_SESSION["json"]);
// $input = file_get_contents("data.txt");
$res = json_decode($input)->result;

if($res == 1){
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$db_name = "goaskme_game";

	$conn = new mysqli($servername, $username, $password, $db_name);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$stmt = $conn->prepare("UPDATE game_user SET points=points + ? WHERE account = ?");
	$stmt->bind_param("is", $points, $account);
	$stmt->execute();
	$stmt->close();
	$conn->close();
}
	

?>