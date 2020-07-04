<?php
session_start();
$points = $_POST["points"];
$tokens = $points/5.0;

$servername = "site-db";
$username = "game_user";
$password = "5DtNfLKdPdU1y6AL";
$db_name = "goaskme_game";
$valid = 0;

if($points < 500){
	$valid = -1;
}else{
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
	$total_points = $row["points"];
	$stmt->close();

	if($total_points >= $points){

		$stmt1 = $conn->prepare("UPDATE game_user SET points= points - ? WHERE account = ?");
		$stmt1->bind_param("ds", $points, $_SESSION["account"]);
		$stmt1->execute();
		$stmt1->close();
		$memo = "withdraw request";

		$st = $conn->prepare("INSERT INTO game_withdraw(account, GAMT_amount,request_time,memo) VALUES (?, ?, DEFAULT,?)");
		$st->bind_param("sds", $_SESSION["account"], $tokens, $memo);
		$st->execute();
		$st->close();
		$valid = 1;
	}

	$conn->close();

}



?>
<!DOCTYPE html>
<html>
<head>
	<title>withdraw</title>
</head>
<body>
	<script type="text/javascript">
		var tokens = Number("<?php echo $tokens; ?>");
		var account = "<?php echo $_SESSION["account"]; ?>";
		var valid = Number("<?php echo $valid; ?>");
		if(valid == 1){
			alert("Withdraw Request: "+ account + " " + tokens + " GAMT");
		}else if(valid == 0){
			alert("Error: You don't have enough points");
		}else{
			alert("Error: The minimum withdrawal amount is 500 points");
		}
		window.location.replace("wallet.php");

	</script>

</body>
</html>