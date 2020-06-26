<?php
unset($snake_list);
unset($erlingsiba_list);
unset($hitball_list);
$servername = "localhost";
$username = "root";
$password = "root";
$db_name = "goaskme_game";
$snake_list = array();
$erlingsiba_list = array();
$hitball_list = array();

$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
//snake
$sql1 = "SELECT * FROM game_snake ORDER BY score DESC LIMIT 5";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0){
	while($row1 = $result1->fetch_assoc()){
		array_push($snake_list, $row1);
	}
}
//2048
$sql2 = "SELECT * FROM game_2048 ORDER BY score DESC LIMIT 5";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0){
	while($row2 = $result2->fetch_assoc()){
		array_push($erlingsiba_list, $row2);
	}
}
//hitball
$sql3 = "SELECT * FROM game_hitball ORDER BY score DESC LIMIT 5";
$result3 = $conn->query($sql3);

if ($result3->num_rows > 0){
	while($row3 = $result3->fetch_assoc()){
		array_push($hitball_list, $row3);
	}
}
// var_dump($snake_list);
// var_dump($erlingsiba_list);
// var_dump($hitball_list);
$conn->close();


?>