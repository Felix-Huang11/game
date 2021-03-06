<?php
include 'rating_script.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rating</title>
    <link rel="icon" href="https://goaskme.app/assets/favicon-6cggtolx.png" type="image/x-icon">
    <link rel="shortcut icon" href="https://goaskme.app/assets/favicon-6cggtolx.png" type="image/x-icon">
    <link rel="stylesheet" href="css/common.css"/>
    <link rel="stylesheet" href="css/iconfont.css"/>
    <style type="text/css">
        *{ color: #fff;}
        body{ background: #191d23; width: 100%; height: 100%;}
        .bg{ position: absolute; width: 100%; height: 100%; left: 0; top: 0%; z-index: -9999;}
        .title_1{ width: 20%; margin: 100px auto 0;}
        .time{ width: 50%; margin: 30px auto 20px; display: flex; justify-content: space-between; align-items: flex-end; border-bottom: 1px solid #5d6064;}
        .time .text1{ background: #31d3d3; color: #fff;font-size: 14px; font-weight: 800; text-align: center; width: 180px; height: 40px; line-height: 40px;}
        .tiem_content span{ font-size: 14px; color: #b2b4b6; margin-right: 10px;}
        .playNum{ width: 100%; margin: 0 auto; font-size: 80px; color: #fff; text-align: center;}
        .content{ width: 94%; min-width: 1400px; margin: 40px auto 0; display: flex;justify-content: space-around;}
        .item{ width: 300px; height: 420px; background: url("images/itembg.png") no-repeat; background-size: 100% 100%; }
        .item .title{ font-size: 24px;font-weight: 800; color: #fff; text-align: center; height: 68px; line-height: 70px;}

        .portrait{ border: 2px solid #fff; border-radius: 50%;overflow: hidden;}
        .portrait img{ width: 100%; height: 100%;}
        /*第一个样式*/
        .partition{ width: 60%; height: 30px; margin: 10px auto; border-radius: 20px; display: flex; justify-content: space-around; align-items: center; background: #20242a; color: #fff;}
        .partition i{color: #fff; font-size: 20px; cursor: pointer;}
        .partition div{ font-size: 14px; color: #fff; width: 40%; text-align: center;}
        .list{ width: 90%;margin: 0 auto;}
        .list1 div{ margin: 10px auto; color: #ffffff; text-align: center; }
        .top3{ width: 100%; height: 150px; display: flex; justify-content: space-around; flex-wrap: nowrap; align-items: flex-end; background: url("images/item1bg1.png"); background-size: 100% 100%;}
        .top3 div{ margin: 4px auto;}
        .list1 .nick{ font-size: 12px; color: #fff; height: 13px; overflow: hidden;}
        .list1 .num{ font-size: 14px; color: #fff;}
        .top3_1,.top3_2,.top3_3{ width: 33.33%;}
        .top3_1 .nick,.top3_2 .nick,.top3_3 .nick{ max-width: 80px;}
        .top3 .top3_1{ align-self: flex-start; margin-top: 18px;}
        .top3 .portrait{ width: 36px; height: 36px;}
        .top4,.top5{ width: 100%; height: 52px;  display: flex; justify-content: flex-start; flex-wrap: nowrap; align-items: center; }
        .top4{ background: url("images/item1bg4.png"); background-size: cover;}
        .top5{ background: url("images/item1bg5.png"); background-size: cover;}
        .top4 .portrait,.top5 .portrait{ margin: 0 0px 0 20px;}
        .top4 .num,.top5 .num{ margin: 0 ; width: 90px;}
        .top4 .nick,.top5 .nick{ width: 110px; text-align: left;height: 30px;}
        .top4 .portrait,.top5 .portrait{ width: 28px;height: 28px;}

        /*第二个样式*/
        .list2 li{ display: flex; justify-content: flex-start; flex-wrap: nowrap; margin: 18px 0 38px 0;}
        .list2 li .index{ background: url("images/rbg2.png") no-repeat; background-size: 100% 100%; width: 16px; height: 30px; line-height: 30px;text-indent: 2px; font-size: 16px;}
        .list2 li .percent{ width: 196px;margin-left: 10px;}
        .list2 .percent_title{ font-size: 13px; margin: 2px 0 2px;}
        .list2 .percent_bg{position: relative;width: 100%; background: #191d23; height: 8px; border-radius: 8px;}
        .list2 .percent_num{ position: absolute; width: 10%; background: #31d3d3; height: 8px; border-radius: 8px;}
        .list2 .count{ width: 50px; text-align: right; line-height: 36px; height: 30px; font-size: 14px;}

        /*第三个样式*/
        .list3 li{ display: flex;justify-content: space-between;margin: 25px 4px 44px;}
        .list3 .percent{display: flex; justify-content: flex-start; width: 82%;}
        .list3 .index{ border: 1px solid #31d3d3;border-top-left-radius:30px;border-bottom-left-radius:30px; overflow: hidden;
            width: 30px;background: #000; text-align: center; height: 22px; line-height: 22px;}
        .list3 .percent_num{ border: 1px solid #31d3d3;border-top-right-radius:30px;border-bottom-right-radius:30px; overflow: hidden;
            width: 30%; max-width: 180px; background: #31d3d3; font-size: 14px; height: 22px; line-height: 22px;}
        .list3 .percent_count{ width: 42px; text-align: right; font-size: 14px; line-height: 22px; height: 22px;}

        /*第四个样式*/
        .list4 li{ display: flex; justify-content: flex-start; height: 46px; background: url("img/item4_bg.png");
            background-size: cover;  align-items: center; margin: 10px 0;}
        .list4 .index{ width: 50px; text-align: center; height: 46px; line-height: 46px; font-size: 26px;}
        .list4 .portrait{ width: 30px; height: 30px;}
        .list4 .nick{ width: 120px; margin-left: 16px;}
    </style>
</head>
<body>
<img class="bg" src="images/rbg.png"/>
<div class="title_1"><img src="images/title.png"/></div>
<div class="time">
    <div class="text1">UPDATE TIME</div>
    <div class="tiem_content">
        <!-- <span class="ymd">2018.03.21</span> -->
        <span class="hms"></span>
    </div>
</div>
<!-- <div class="playNum">68,383,28</div> -->
<div class="content">
    <!-- <div class="item item1">
        <div class="data">
            <div class="title">POINTS RATING - TOP5</div>

            <ul class="list list2">
               <li>
                   <div class="index">1</div>
                   <div class="percent">
                       <div class="percent_title">mwxely555.tp</div>
                       <div class="percent_bg">
                           <div class="percent_num" style="width: 100%"></div>
                       </div>
                   </div>
                   <div class="count">300万</div>
               </li>
               <li>
                   <div class="index">2</div>
                   <div class="percent">
                       <div class="percent_title">ddhfhjg.tp</div>
                       <div class="percent_bg">
                           <div class="percent_num" style="width: 80%"></div>
                       </div>
                   </div>
                   <div class="count">255万</div>
               </li>
               <li>
                   <div class="index">3</div>
                   <div class="percent">
                       <div class="percent_title">hgfghjkk.tp</div>
                       <div class="percent_bg">
                           <div class="percent_num" style="width: 70%"></div>
                       </div>
                   </div>
                   <div class="count">190万</div>
               </li>
               <li>
                   <div class="index">4</div>
                   <div class="percent">
                       <div class="percent_title">hgfghjkk.tp</div>
                       <div class="percent_bg">
                           <div class="percent_num" style="width: 60%"></div>
                       </div>
                   </div>
                   <div class="count">190万</div>
               </li>
               <li>
                   <div class="index">5</div>
                   <div class="percent">
                       <div class="percent_title">hgfghjkk.tp</div>
                       <div class="percent_bg">
                           <div class="percent_num" style="width: 50%"></div>
                       </div>
                   </div>
                   <div class="count">190万</div>
               </li>

            </ul>
        </div>
    </div> -->
    <div class="item">
        <div class="title">SNAKE RATING - TOP5</div>
        <ul class="list list3">
            <li>
                <div class="percent">
                    <div class="index">1</div>
                    <div class="percent_num" style="width: 65%"><?php echo $snake_list[0]["account"]; ?></div>
                </div>
                <div class="percent_count"><?php echo $snake_list[0]["score"]; ?></div>
            </li>
            <li>
                <div class="percent">
                    <div class="index">2</div>
                    <div class="percent_num" style="width: 65%"><?php echo $snake_list[1]["account"]; ?></div>
                </div>
                <div class="percent_count"><?php echo $snake_list[1]["score"]; ?></div>
            </li>
            <li>
                <div class="percent">
                    <div class="index">3</div>
                    <div class="percent_num" style="width: 65%"><?php echo $snake_list[2]["account"]; ?></div>
                </div>
                <div class="percent_count"><?php echo $snake_list[2]["score"]; ?></div>
            </li>
            <li>
                <div class="percent">
                    <div class="index">4</div>
                    <div class="percent_num" style="width: 65%"><?php echo $snake_list[3]["account"]; ?></div>
                </div>
                <div class="percent_count"><?php echo $snake_list[3]["score"]; ?></div>
            </li>
            <li>
                <div class="percent">
                    <div class="index">5</div>
                    <div class="percent_num" style="width: 65%"><?php echo $snake_list[4]["account"]; ?></div>
                </div>
                <div class="percent_count"><?php echo $snake_list[4]["score"]; ?></div>
            </li>
        </ul>
    </div>
    <div class="item">
        <div class="title">2048 RATING - TOP5</div>
        <ul class="list list3">
            <li>
                <div class="percent">
                    <div class="index">1</div>
                    <div class="percent_num" style="width: 65%"><?php echo $erlingsiba_list[0]["account"]; ?></div>
                </div>
                <div class="percent_count"><?php echo $erlingsiba_list[0]["score"]; ?></div>
            </li>
            <li>
                <div class="percent">
                    <div class="index">2</div>
                    <div class="percent_num" style="width: 65%"><?php echo $erlingsiba_list[1]["account"]; ?></div>
                </div>
                <div class="percent_count"><?php echo $erlingsiba_list[1]["score"]; ?></div>
            </li>
            <li>
                <div class="percent">
                    <div class="index">3</div>
                    <div class="percent_num" style="width: 65%"><?php echo $erlingsiba_list[2]["account"]; ?></div>
                </div>
                <div class="percent_count"><?php echo $erlingsiba_list[2]["score"]; ?></div>
            </li>
            <li>
                <div class="percent">
                    <div class="index">4</div>
                    <div class="percent_num" style="width: 65%"><?php echo $erlingsiba_list[3]["account"]; ?></div>
                </div>
                <div class="percent_count"><?php echo $erlingsiba_list[3]["score"]; ?></div>
            </li>
            <li>
                <div class="percent">
                    <div class="index">5</div>
                    <div class="percent_num" style="width: 65%"><?php echo $erlingsiba_list[4]["account"]; ?></div>
                </div>
                <div class="percent_count"><?php echo $erlingsiba_list[4]["score"]; ?></div>
            </li>


        </ul>
    </div>
    <div class="item item4">
        <div class="data">
            <div class="title">HITBALL RATING - TOP5</div>
            <!-- <div class="partition">
                <i class="iconfont icon-sanjiao4"></i>
                <div>mwxely555.tp</div>
                <i class="iconfont icon-sanjiao3"></i>
            </div> -->
            <ul class="list list3">
                <li>
                    <div class="percent">
                        <div class="index">1</div>
                        <div class="percent_num" style="width: 65%"><?php echo $hitball_list[0]["account"]; ?></div>
                    </div>
                    <div class="percent_count"><?php echo $hitball_list[0]["score"]; ?></div>
                </li>
                <li>
                    <div class="percent">
                        <div class="index">2</div>
                        <div class="percent_num" style="width: 65%"><?php echo $hitball_list[1]["account"]; ?></div>
                    </div>
                    <div class="percent_count"><?php echo $hitball_list[1]["score"]; ?></div>
                </li>
                <li>
                    <div class="percent">
                        <div class="index">3</div>
                        <div class="percent_num" style="width: 65%"><?php echo $hitball_list[2]["account"]; ?></div>
                    </div>
                    <div class="percent_count"><?php echo $hitball_list[2]["score"]; ?></div>
                </li>
                <li>
                    <div class="percent">
                        <div class="index">4</div>
                        <div class="percent_num" style="width: 65%"><?php echo $hitball_list[3]["account"]; ?></div>
                    </div>
                    <div class="percent_count"><?php echo $hitball_list[3]["score"]; ?></div>
                </li>
                <li>
                    <div class="percent">
                        <div class="index">5</div>
                        <div class="percent_num" style="width: 65%"><?php echo $hitball_list[4]["account"]; ?></div>
                    </div>
                    <div class="percent_count"><?php echo $hitball_list[4]["score"]; ?></div>
                </li>
            </ul>        
        </div>
    </div>
</div>
</body>
<script src="js/jquery.min.js"></script>
<script type="text/javascript">
    function getNowFormatDate() {
        var date = new Date();
        var seperator1 = "-";
        var seperator2 = ":";
        var month = date.getMonth() + 1;
        var strDate = date.getDate();
        if (month >= 1 && month <= 9) {
            month = "0" + month;
        }
        if (strDate >= 0 && strDate <= 9) {
            strDate = "0" + strDate;
        }
        var currentdate = date.getFullYear() + seperator1 + month + seperator1 + strDate
            + " " + date.getHours() + seperator2 + date.getMinutes()
            + seperator2 + date.getSeconds();
        return currentdate;
    }
    $(".hms").html(getNowFormatDate());
//     var NowFormatDate;
//     $(function(){
//         getdata();
//         setInterval(function(){getdata()},5000);
//         function getdata(){
//             NowFormatDate = getNowFormatDate();
//             $(".hms").html(NowFormatDate);
//             $.ajax({
//                 url:'http://test.hexntc.com/videocenter/backend/web/index.php?r=mob/rank',
//                 data:{},
//                 type:'post',
//                 datatype:'json',
//                 success:function (mes) {
//                     var mes = JSON.parse(mes);
//                     console.log();
//                     //平台KOL - TOP5
//                     var data = mes.data[0].living;
// //                console.log(data);
//                     var item1 = '';
//                     $.each(data,function(i,v){
//                         item1 += '        <div class="data">'
//                             + '<div class="title">平台KOL - TOP5</div>'
//                             + '<div class="partition">'
//                             + '<i class="iconfont icon-sanjiao4" onclick="item1(this)" data-type="0"></i>'
//                             + '<div>'+v.name+'</div>'
//                             + '<i class="iconfont icon-sanjiao3" onclick="item1(this)" data-type="1"></i>'
//                             + '</div>'
//                             + '<div class="list list1">'
//                             + '<div class="top3">'
//                             + '<div class="top3_2">'
//                             + '<div class="portrait"><img src="'+v.rank[1].pic+'"/></div>'
//                             + '<div class="nick">'+v.rank[1].nickname+'</div>'
//                             + '<div class="type">'+v.rank[1].type+'</div>'
//                             + '<div class="num">'+v.rank[1].ol+'</div>'
//                             + '</div>'
//                             + '<div class="top3_1">'
//                             + '<div class="portrait"><img src="'+v.rank[0].pic+'"/></div>'
//                             + '<div class="nick">'+v.rank[0].nickname+'</div>'
//                             + '<div class="type">'+v.rank[0].type+'</div>'
//                             + '<div class="num">'+v.rank[0].ol+'</div>'
//                             + '</div>'
//                             + '<div class="top3_3">'
//                             + '<div class="portrait"><img src="'+v.rank[2].pic+'"/></div>'
//                             + '<div class="nick">'+v.rank[2].nickname+'</div>'
//                             + '<div class="type">'+v.rank[2].type+'</div>'
//                             + '<div class="num">'+v.rank[2].ol+'</div>'
//                             + '</div>'
//                             + '</div>'
//                             + '<div class="top4">'
//                             + '<div class="portrait"><img src="'+v.rank[3].pic+'"/></div>'
//                             + '<div class="nick"><p>'+v.rank[3].nickname+'</p><p>'+v.rank[3].type+'</p></div>'
// //                        + '<div class="type">'+v.rank[3].type+'</div>'
//                             + '<div class="num">'+v.rank[3].ol+'</div>'
//                             + '</div>'
//                             + '<div class="top5">'
//                             + '<div class="portrait"><img src="'+v.rank[4].pic+'"/></div>'
//                             + '<div class="nick"><p>'+v.rank[4].nickname+'</p><p>'+v.rank[4].type+'</p></div>'
// //                        + '<div class="type">'+v.rank[4].type+'</div>'
//                             + '<div class="num">'+v.rank[4].ol+'</div>'
//                             + '</div>'
//                             + '</div>'
//                             + '</div>'
//                     })
//                     $('.item1').html(item1);
//                     $(".item1").children().hide();
//                     $(".item1").children().eq(0).show();

//                     //                微博热门排行榜 - TOP5
//                     data = mes.data[1].hotrank;
//                     var out = data[0].ol;
// //                console.log(data);
//                     item1='';
//                     var ol;
//                     $.each(data,function(i,v){
//                         ol = (v.ol / out).toFixed(2) * 100;
//                         item1 += '<li>'
//                             +'<div class="index">'+v.rank+'</div>'
//                             +'<div class="percent">'
//                             +'<div class="percent_title">'+v.title+'</div>'
//                             +'<div class="percent_bg">'
//                             +'<div class="percent_num" style="width: '+ol+'%"></div>'
//                             +'</div>'
//                             +'</div>'
//                             +'<div class="count">'+v.olview+'</div>'
//                             +'</li>'
//                     })
//                     $('.list2').html(item1);

// //                平台播放排行榜 - TOP5
//                     data = mes.data[2].playrank;
// //                console.log(data);
//                     item1='';
//                     out = data[0].ol;
//                     $.each(data,function(i,v){
//                         ol = (v.ol / out).toFixed(2) * 80;
// //                    ol = (v.ol / out).toFixed(2) * 100;
//                         item1 +=    '<li>'
//                             +'<div class="percent">'
//                             +'<div class="index">'+v.rank+'</div>'
//                             +'<div class="percent_num" style="width: '+ol+'%">'+v.title+'</div>'
//                             +'</div>'
//                             +'<div class="percent_count">'+v.olview+'</div>'
//                             +'</li>'
//                     })
//                     $('.list3').html(item1);

// //                平台综艺排行榜 - TOP5
//                     data = mes.data[3].zongyirank;
//                     console.log(data);
//                     item1='';
//                     var ul = '';
//                     $.each(data,function(i,v){
//                         ul='';
//                         $.each(v.rank,function(i2,v2){
//                             v2.ol = v2.ol.replace(";","");
//                             ul+=    '<li>'
//                                 +'<div class="index">'+v2.rank+'</div>'
//                                 +'<div class="portrait"><img src="'+v2.pic+'"></div>'
//                                 +'<p class="nick">'+v2.title+'</p>'
//                                 +'<p class="type">'+v2.ol+'</p>'
//                                 +'</li>'
//                         })

//                         item1 +=    '<div class="data4">'
//                             +'<div class="title">平台综艺排行榜 - TOP5</div>'
//                             +'<div class="partition">'
//                             + '<i class="iconfont icon-sanjiao4" onclick="item4(this)" data-type="0"></i>'
//                             + '<div>'+v.name+'</div>'
//                             + '<i class="iconfont icon-sanjiao3" onclick="item4(this)" data-type="1"></i>'
//                             +'</div>'
//                             +'<ul class="list list4">'
//                             +ul
//                             +'</ul>'
//                             +'</div>'
//                     })
//                     $('.item4').html(item1);
//                     $(".item4").children().hide();
//                     $(".item4").children().eq(0).show();

//                 }
//             })
//         }
//     })
//     var type1,index1,len1;
//     function item1(on_this){
//         type1= $(on_this).attr('data-type');
//         index1 = $(on_this).parent().parent().index();
//         len1 = parseInt($(".data").length);
//         (type1=='0')? index1-- : index1++;
//        // console.log(index1);
//        // console.log(len1);
//         if(index1 == -1 || index1 == len1){
//             return;
//         }
//         $(".item1").children().hide();
//         $(".item1").children().eq(index1).show();
//     }
//     var type4,index4,len4;
//     function item4(on_this){
//         type4= $(on_this).attr('data-type');
//         index4 = $(on_this).parent().parent().index();
//         len4 = parseInt($(".data4").length);
//         (type4=='0')? index4-- : index4++;
//         // console.log(index4);
//         // console.log(len4);
//         if(index4 == -1 || index4 == len4){
//             return;
//         }
//         $(".item4").children().hide();
//         $(".item4").children().eq(index4).show();
//     }

</script>
</html>