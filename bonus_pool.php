<?php
// This php file should run once a day(00:00)
$user_amount = 0;
$total_points = 0;
//5 classes: first-1%,second-1%,third-1%,fouth-1%, fifth-1%
$classes = [floor($user_amount*0.01), floor($user_amount*0.02), floor($user_amount*0.03), floor($user_amount*0.04), floor($user_amount*0.05)];
//bonus division for five classes
$bonus_class = [$total_points * 0.299, $total_points * 0.249, $total_points * 0.199, $total_points * 0.149, $total_points * 0.099];

$servername = "localhost";
$username = "root";
$password = "root";
$db_name = "goaskme_game";

$conn = new mysqli($servername, $username, $password, $db_name);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

?>