<?php
include 'wallet_script.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Wallet</title>
<link rel="icon" href="https://goaskme.app/assets/favicon-6cggtolx.png" type="image/x-icon">
<link rel="shortcut icon" href="https://goaskme.app/assets/favicon-6cggtolx.png" type="image/x-icon">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/wallet.css" rel="stylesheet" type="text/css" media="all" />      
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Games Center Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/modernizr.custom.js"></script>
<link rel="stylesheet" type="text/css" href="css/component.css" />
<style>
        
</style>
</head>
<body>
    
<!--header-->
<div class="header" >

                <!---->

                <div class="header-top" style="background: url("./images/1.jpg") 0px 0px no-repeat;
                background-size:cover;">
                <div class="container">
                <div class="head-top" >
                        <div class="logo">
                                <h1 ><a href="https://goaskme.app" style="text-align:center; font-size:50px; color:#F0E68C;">GoAskMe</a></h1>
                        </div>

                                <!-- <div class="clearfix"></div> -->
                        <div class="top-nav">       
                              <span class="menu"><img src="images/menu.png" alt=""> </span>
                                
                                    <ul>
                                        <li class="active"><a class="color1" href="./game.php" style="font-size: 1.75em; color: #fd9f3e" >Home</a></li>
                                        <li><a class="color2" href="#" style="font-size: 1.75em; color:#d52685" >Wallet</a></li>
                                        <li><a class="color3" href="./rating.php" style="font-size: 1.75em; color:#FF0000" >Rating</a></li>
                                        <!-- <div class="clearfix"> </div> -->
                                    </ul>

                                    <!--script-->
                                <script>
                                    $("span.menu").click(function(){
                                        $(".top-nav ul").slideToggle(500, function(){
                                        });
                                    });
                            </script>

                                </div>
                </div>
                </div>
        </div>
</div>
<script type="text/javascript">
    var account = "<?php echo $_SESSION["account"]; ?>";
    function send(i)
     {
        if (i==0){
            document.form1.action="pay.php";
        }
        else{
            document.form1.action="withdraw.php";
        }
         // document.form1.submit();
     }

</script>
<!--content-->
<div class="container">
    <div class="design-w3l">
            <div class="mail-form-agile">
                <form name="form1" method="post">
                    <div class="info">
                        <span>ACCOUNT: </span><span><?php echo $_SESSION["account"]; ?></span><br>
                        <span>WALLET: </span><span><?php echo $_SESSION["wallet"]; ?></span><br>
                        <span>POINTS: </span><span><?php echo $points; ?></span>
                        
                    </div>
                    

                    <div class="pay">
                        <span style="color:#F0E68C">Points:GAMT = 5 : 1</span><br><br>
                        <input type="number" min="5" name="points" id="points" class="points" placeholder="Enter the points " required=""/>
                    
                        <input type="submit" class="check" id ="in" onclick="send(0)" value="   TOP UP   "><br><br>
                        <input type="submit" class="check" id ="out" onclick="send(1)" value="WITHDRAW">
                        
                    </div>
                    
                </form>
            </div>
          <div class="clear"> </div>
        </div>
    
</div>
        <!---->
        <!-- <div class="footer">
        <div class="footer-middle"> -->
                        </div>

                </div>

</body>
</html>
