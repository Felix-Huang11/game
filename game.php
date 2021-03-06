<?php
session_start();
if($_SESSION["account"] == NULL){
echo "<script>alert('Error: Please scan the code and login again'); window.location.replace('index.html');</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
<META HTTP-EQUIV="pragma" CONTENT="no-cache"> 
<META HTTP-EQUIV="Cache-Control" CONTENT="no-cache, must-revalidate"> 
<META HTTP-EQUIV="expires" CONTENT="0">
<title>GoAskMe Games</title>
<link rel="icon" href="https://goaskme.app/assets/favicon-6cggtolx.png" type="image/x-icon">
<link rel="shortcut icon" href="https://goaskme.app/assets/favicon-6cggtolx.png" type="image/x-icon">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />      
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <meta name="keywords" content="Games Center Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" /> -->
<!-- <script type="application/x-javascript"> 
    addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
</script> -->

<script src="js/modernizr.custom.js"></script>
<link rel="stylesheet" type="text/css" href="css/component.css" />
<style>
        body{
                /*background-color:rgb(250,250,210);*/
                background: url("./images/1.jpg") 0px 0px no-repeat;
                background-size:cover;
                }
        .header .newTitle {
            font-size:50px;color: #fff; font-family: "Audiowide-Regular"; letter-spacing:3px; margin-bottom:0 auto;
            }
</style>
</head>
<body>
    <?php include 'login_clear.php';?>
<!--header-->
<div class="header" >

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
                        <li><a class="color2" href="./wallet.php" style="font-size: 1.75em; color:#d52685" >Wallet</a></li>
                        <li><a class="color3" href="./rating.php" style="font-size: 1.75em; color:#FF0000" >Rating</a></li>
                        
                        <!-- <div class="clearfix"> </div> -->
                    </ul>

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

<!--content-->
<div class="container">
    <div class="games">
            <!-- <h2><span style="color:#FF0000; font-size:1.25em">G</span><span style="color:#FF9900; font-size:1.25em">a</span><span style="color:#009933; font-size:1.25em" >m</span><span style="color:#66CCFF; font-size:1.25em">e</span><span style="color:#FF69B4; font-size:1.25em">s</span></h2> -->
    <div style="font-size:50px;color: #fff; font-family: Audiowide-Regular; letter-spacing:3px; margin:0 auto;">
        
        <h2 class="newTitle" style="font-size:50px;color: #fff; font-family: Audiowide-Regular; letter-spacing:3px; margin:0 auto;"> <span style="color:#FF0000; font-size:1.25em">G</span><span style="color:#FF9900; font-size:1.25em">a</span><span style="color:#009933; font-size:1.25em" >m</span><span style="color:#66CCFF; font-size:1.25em">e</span><span style="color:#FF69B4; font-size:1.25em">s</span></h2>
        <h2>
            <img class="titlePicture" src="./images/5.png" alt=" ">
        </h2>
    </div>

    <div class="wrap">
        <div class="main">
            <ul id="og-grid" class="og-grid">
                <li>
                        <a href="snake_start.php" data-largesrc="./images/snake.png" data-title="Snake" data-description="Snake Description: Use the WASD keys to control the snake. Four button controllers is for mobile users' convenience. Collect the apples as much as you can. The snake will die if it either hits the wall or eats its body.">                                                        <img class="img-responsive" src="./images/snake.png" alt="img01"/>
                        </a>
                </li>
                <li>
                        <a href="2048_start.php" data-largesrc="./images/2048.png" data-title="2048" data-description="2048 Description: This game's objective is to use the top, left, down, right arrow keys to slide numbered tiles on a grid to combine them to create a tile with the number 2048. However, players can continue to play the game after reaching the goal, creating tiles with larger numbers.">
                                <img class="img-responsive" src="./images/2048.png" alt="img02"/>
                        </a>
                </li>
                <li>
                        <a href="ball_start.php" data-largesrc="./images/hit.png" data-title="Hitball"  data-description="Hitball Description: Press the screen or hold the left button of the mouse to choose the direction of launch. The longer you hold it, the greater the power is. You will gain one point for hitting each yellow ball. The game ends when you hit the red ball.">
                        <img class="img-responsive" src="./images/hit.png" alt="img03"/></a>
                </li>
            </ul>
        </div>
    </div>
    </div>
	<script src="js/grid.js"></script>
    <script>
        $(function() {
            Grid.init();
        });
    </script>
</div>
        <!---->
        <!-- <div class="footer">
        <div class="footer-middle"> -->
                       <!--  </div>

                </div> -->

</body>
</html>
