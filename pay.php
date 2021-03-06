<?php
session_start();
if($_POST["points"] != NULL){
  $_SESSION["topup_points"] = $_POST["points"];
}
?>
<!DOCTYPE HTML>
<html>
<head>
<META charset="utf-8">
<META HTTP-EQUIV="pragma" CONTENT="no-cache"> 
<META HTTP-EQUIV="Cache-Control" CONTENT="no-cache, must-revalidate"> 
<META HTTP-EQUIV="expires" CONTENT="0">
<title>GoAskMe Wallet Transaction</title>
<link rel="icon" href="https://goaskme.app/assets/favicon-6cggtolx.png" type="image/x-icon">
<link rel="shortcut icon" href="https://goaskme.app/assets/favicon-6cggtolx.png" type="image/x-icon">
<script src="https://cdn.jsdelivr.net/npm/eosjs-ecc@4.0.4/lib/eosjs-ecc.min.js"
    integrity="sha512-dYFDmK/d9r3/NCp6toLtfkwOjSMRBaEzaGAx1tfRItC0nsI0hVLERk05iNBQR7uDNI7ludYhcBI4vUiFHdjsTQ=="
    crossorigin="anonymous"></script>
<script src="./js/qrcode.js"></script>
<link href="css/login_style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Transparent Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css' />
<!--web-fonts-->
</head>

<body>
<!--header-->
	<div class="header-w3l">
		<h1>GoAskMe Wallet Transaction</h1>
	</div>
<!--//header-->
<script type="text/javascript">
  function redirect(){
    // var http = new XMLHttpRequest();
    // http.open("GET", "update_points.php?p=" + str , true);
    // http.send();
    window.location.replace("wallet.php");
}
</script>
<!--main-->
<div class="main-content-agile">
	<div class="sub-main-w3">
		<div id="qr">
			<script>
                var points = Number("<?php echo $_SESSION["topup_points"]; ?>");
                var account = "<?php echo $_SESSION["account"]; ?>";
                var tokens = points/5.0;
                  
                // var str = JSON.stringify({acc:account, po : points});
                window.onload = function() {
                    
            			var qrcode = new QRCode(document.getElementById("qr"), {
            				width: 260,
            				height: 260
            			});
                  
            			qrcode.makeCode(JSON.stringify({protocol:"SimpleWallet",version:"1.0",dappName:"GoAskMe",dappIcon:"https://goaskme.app/assets/favicon-6cggtolx.png",action:"transfer",to:"e5dwgxa3e.tm",amount:tokens, contract:"e5dwgxa3e.tm",symbol:"GAMT",precision:4,desc:"Top up game points", expired:Math.round(new Date().getTime()/1000)+300, callback:"https://game.goaskme.app/pay_poll.php"}));

                  // document.getElementById("refresh").onclick = function() {
                  //   uuid = makeid(10);
                  //   qrcode.makeCode(JSON.stringify({protocol:"SimpleWallet",version:"1.0",dappName:"GoAskMe",dappIcon:"https://8f34e2d148f9.ngrok.io/game/images/favicon.ico",action:"transfer",from:"",to:"",amount:12, contract:"",symbol:"",precision:2,desc:"", expired:Math.round(new Date().getTime()/1000)+300, callback:"https://8f34e2d148f9.ngrok.io/game/verify.php"}));
                  // }

                  // document.getElementById("login").onclick = poll(uuid);
    
                }
                
            </script>
		</div>
		<div class="notice">
                <span>Transaction: scan the QR code via your wallet application (We recommend mobile users take the screenshot of the QR code instead of saving the QR code image to local album)</span>
        </div>
        <div class="buttonBox">
            <button class="button" id="continue" onclick="redirect()">continue</button>
            <button class="button" id="back" onclick="redirect()">back</button>
        </div>
	</div>
</div>
<!--//main-->

<!--footer-->
<div class="footer">
	<p>&copy; 2020 GoAskMe Games Transaction Page. All rights reserved </p>
</div>
<!--//footer-->

</body>
</html>
