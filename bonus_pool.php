#!/usr/bin/php
<?php
//use crontab: 0 0 * * * /Library/WebServer/Documents/bonus_pool.php /usr/bin/php
// This php file should run once a day(00:00)

function getClass($user_amount){
	//5 classes: first-1%,second-1%,third-1%,fouth-1%, fifth-1%
	$classes = [0, floor($user_amount*0.01), floor($user_amount*0.02), floor($user_amount*0.03), floor($user_amount*0.04), floor($user_amount*0.05)];
	
	return $classes;
}

function getBonusClass($total_points){
	//bonus division for five classes
	//30%,25%, 20%, 15%, 10%
	$bonus_class = [$total_points * 0.299, $total_points * 0.249, $total_points * 0.199, $total_points * 0.149, $total_points * 0.099];

	return $bonus_class;
}

function getUserAmount($game_table, $conn){
	//user amount
	$stmt = $conn->prepare("SELECT COUNT(*) FROM $game_table");
	$stmt->execute();
	$res = $stmt->get_result();
	$user_amount = ($res->fetch_array(MYSQLI_NUM))[0];
	$stmt->close();

	return $user_amount;
}

function getTotalPoints($game_id, $conn){
	//total points
	$stmt_points = $conn->prepare("SELECT cumulative_points FROM game_bonus_pool WHERE game_id = ?");
	$stmt_points->bind_param("i",$game_id);
	$stmt_points->execute();
	$res_points = $stmt_points->get_result();
	$total_points = ($res_points->fetch_array(MYSQLI_NUM))[0];
	$stmt_points->close();

	return $total_points;
}

function rewardOneClass($offset, $user_number, $bonus, $game_table, $conn){

	$stmt = $conn->prepare("SELECT account FROM $game_table ORDER BY score DESC LIMIT ?, ?");
	$stmt->bind_param("ii", $offset, $user_number);
	$stmt->execute();
	$result = $stmt->get_result();
	$stmt->close();
	while($row = $result->fetch_assoc()){
		$points = ($bonus/$user_number);
		$account = $row["account"];
		$stmt1 = $conn->prepare("UPDATE game_user SET points = points + ? WHERE account = ?");
		$stmt1->bind_param("ds",$points, $account);
		$stmt1->execute();
		$stmt1->close();
	}
}

function reward5Percent($game_table, $game_id, $conn){
	$user_amount = getUserAmount($game_table, $conn);
	$total_points = getTotalPoints($game_id, $conn);
	$bonus_class = getBonusClass($total_points);
	if($user_amount <= 100){
		$classes = [0, 1, 2, 3, 4, 5];
	}else{
		$classes = getClass($user_amount);
	}

	for($x=1; $x < 6; $x++){
		if($classes[$x]-$classes[$x-1] >= 1){
			rewardOneClass($classes[$x-1], $classes[$x]-$classes[$x-1], $bonus_class[$x-1], $game_table, $conn);
		}
	}
}

function resetGameScore($conn, $game_table){
	$stmt = $conn->prepare("TRUNCATE TABLE $game_table");
	$stmt->execute();
	$stmt->close();
}

function resetBonusPool($conn){
	$sql = "UPDATE game_bonus_pool SET cumulative_points = 0";
	$conn->query($sql);
}

//main
function run(){
	// $servername = "localhost";
	// $username = "root";
	// $password = "root";
	// $db_name = "goaskme_game
	$servername = "127.0.0.1";
	$username = "root";
	$password = "2cb53afKAFmg";
	$db_name = "goaskme_game";
	
	$conn = new mysqli($servername, $username, $password, $db_name);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	// reward
	reward5Percent("game_snake", 1, $conn);
	reward5Percent("game_2048", 2, $conn);
	reward5Percent("game_hitball", 3, $conn);
	// reset score
	resetGameScore($conn, "game_snake");
	resetGameScore($conn, "game_2048");
	resetGameScore($conn, "game_hitball");
	// reset pool
	resetBonusPool($conn);

	$conn->close();

}
//run the script
run();




?>