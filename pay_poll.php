<?php
//pay_status 1 for successful top up; 0 for waiting status;
// session_start();
//
//rely on the format of return value!!!!
//
$input = file_get_contents("php://input");
// file_put_contents("data.txt",$input);
$json = json_decode($input);
$res = $json->result;
$txid = $json->txID;

// file_put_contents("data.txt",$input);
if($res == 1){
	if($txid != NULL){
		$url = 'https://eos.hyperion.eosrio.io/v2/history/get_transaction?id='. $txid;
		$body = file_get_contents($url);
		$body_obj = json_decode($body);
		$account = ($body_obj->actions)[0]->act->data->from;
		$amount = ($body_obj->actions)[0]->act->data->amount;
		$points = floatval($amount)*5;

	}else{
		$data = json_encode($json->data);
		$account = json_decode($data)->wallet;
		$processed = json_decode($data)->processed;
		$txid = $processed->id;
		$action_traces = ($processed->action_traces)[0];
		$points = floatval($action_traces->act->data->quantity)*5;
	}

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$db_name = "goaskme_game";


	$conn = new mysqli($servername, $username, $password, $db_name);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	//query current points
	$stq = $conn->prepare("SELECT points FROM game_user WHERE account = ?");
	$stq->bind_param("s",$account);
	$stq->execute();
	$res = $stq->get_result();
	$row = $res->fetch_array(MYSQLI_ASSOC);
	$points_before = $row["points"];
	$stq->close();
	// update user points
	$stmt = $conn->prepare("UPDATE game_user SET points = points + ? WHERE account = ?");
	$stmt->bind_param("ds",$points, $account);
	$stmt->execute();
	$stmt->close();
	// record the transaction
	$stin = $conn->prepare("INSERT INTO game_topup VALUES(?, ?, ?, ?, DEFAULT)");
	$stin->bind_param("ssdd",$account, $txid, $points, $points_before);
	$stin->execute();
	$stin->close();
	$conn->close();
	

}

// $json = $_GET["p"];
// if($json != NULL){
// 	$_SESSION["json"] = $json;
	
// 	$obj = json_decode($_SESSION["json"]);
// 	$points = $obj->po;
// 	$account = $obj->acc;
// }


// file_put_contents("da.txt", $_SESSION["json"]);
// $input = file_get_contents("data.txt");


	

?>