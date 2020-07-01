<?php
include 'start.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<script type="text/javascript">
		var points =Number("<?php echo $points; ?>");
		if(points >= 5){
			alert("You have cost 5 points for this round, enjoy your time!");
			window.location.replace("./ICST_Games/2048/2048.html");

		}else{
			alert("You don't have enough points(5 points/time), please check you wallet");
			window.location.replace("wallet.php");
		}
	</script>

</body>
</html>