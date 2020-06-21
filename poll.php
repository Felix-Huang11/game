<?php 
	$uuid = $_GET["x"];
	file_put_contents("uuid.txt", $uuid);
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$db_name = "goaskme_game";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $db_name);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$stmt = $conn->prepare("SELECT uuID, account, myTimestamp, ref, sign FROM game_login WHERE uuID = ?");
	$stmt->bind_param("s", $uuid);
	$stmt->execute();
	$res = $stmt->get_result();
	$row = $res->fetch_array(MYSQLI_ASSOC);
	if($row != NULL){
		$str = json_encode($row);
		echo $str;
	}else{
		echo "";
	}
	$conn->close();


// $myfile = fopen("data.txt","w+");
// fwrite($myfile,$input);
// fclose($myfile);
// file_put_contents("data.txt", $input);
// $contents = file_get_contents("data.txt");
// $myObj = new stdClass();
// if(strcmp($contents, "") != 0){
// 	$myObj->code = 0;
// 	$myObj->error = "successful";
// 	$myJSON = json_encode($myObj);
// 	echo $myJSON;
	
// }else{
// 	$myObj->code = 1;
// 	$myObj->error = "Failed";
// 	$myJSON = json_encode($myObj);
// 	echo $myJSON;
// }

?>

