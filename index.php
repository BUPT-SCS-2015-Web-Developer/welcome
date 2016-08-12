<?php
error_reporting(0);
include ('backend/header_api_session.php');
include ('backend/iapp.php');
?>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport"
        content="width=device-width, initial-scale=1">
  <title>北邮迎新系统 2016</title>

  <!-- Set render engine for 360 browser -->
  <meta name="renderer" content="webkit">

  <!-- No Baidu Siteapp-->
  <meta http-equiv="Cache-Control" content="no-siteapp"/>

  <link rel="icon" type="image/png" href="assets/i/favicon.png">

  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="assets/i/app-icon72x72@2x.png">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
  <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">

  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-TileImage" content="assets/i/app-icon72x72@2x.png">
  <meta name="msapplication-TileColor" content="#0e90d2">
  <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
  <!--
  <link rel="canonical" href="http://www.example.com/">
  -->
  <link rel="stylesheet" href="assets/css/amazeui.css">
  <link rel="stylesheet" href="buptYB/css/style.css">
  <link rel="stylesheet" href="buptYB/css/index.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a
  href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->
<header class="am-topbar am-topbar-inverse yingxin-header">
  <div class="am-topbar-brand">
    <strong>BUPT</strong> 2016 <small>迎新系统</small>
  </div>

  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

  <ul class="am-nav am-nav-pills am-topbar-nav">
    <li class="am-active"><a href="index.php">首页</a></li>
    <li><a href="school.html">校区简介</a></li>
    <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          地图查询 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
            <li><a href="mapbb.html">本部</a></li>
            <li><a href="maphh.html">宏福</a></li>
        </ul>
    </li>
    <li><a href="recent.html">近期安排</a></li>
    <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          信息登记 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
            <li><a href="register.php?type=1">基本信息</a></li>
            <li><a href="register.php?type=2">家庭信息</a></li>
            <li><a href="register.php?type=3">军训服装</a></li>
        </ul>
    </li>
    <li><a href="safe.html">安全教育</a></li>
    <li><a href="note.html">入学须知</a></li>
  </ul>
 </div>

</header>
    
    
    
<div id="container">
<div id="the-box">
    <div id="boxWelcome" class="boxType">
        <h1>欢迎使用北邮迎新系统!</h1>
        <div class="line"></div>
        <div id="pStatus">
        </div>
    </div>
    
    
    
    <div id="boxSchool" class="littleBoxType" onclick="window.location.href='school.html';">
        <h2>校区简介<span class="am-icon-check-square-o"></span></h2>
        <div class="line"></div>
        <p>
            在这里查看北邮三个校区的简介。
        </p>
    </div>
    
    <div id="boxMap" class="littleBoxType" onclick="window.location.href='mapbb.html';">
        <h2>地图查询<span class="am-icon-check-square-o"></span></h2>
        <div class="line"></div>
        <p>
            迷路了？别担心，这里有详细的校区地图！
        </p>
    </div>
    
    <div id="boxDate" class="littleBoxType" onclick="window.location.href='recent.html';">
        <h2>近期安排<span class="am-icon-check-square-o"></span></h2>
        <div class="line"></div>
        <p>
            在这里查看新生报道的流程。
        </p>
    </div>
    
    <div id="boxRegister" class="littleBoxType" onclick="window.location.href='register.php?type=1';">
        <h2>信息登记<span class="am-icon-check-square-o"></span></h2>
        <div class="line"></div>
        <p>
            登记您的资料、家庭、军训服装信息等。
        </p>
    </div>
    
    <div id="boxSafety" class="littleBoxType" onclick="window.location.href='safe.html';">
        <h2>安全教育<span class="am-icon-check-square-o"></span></h2>
        <div class="line"></div>
        <p>
            出门在外需要了解一些常见的安全知识。
        </p>
    </div>
    
    <div id="boxNote" class="littleBoxType" onclick="window.location.href='note.html';">
        <h2>入学须知<span class="am-icon-check-square-o"></span></h2>
        <div class="line"></div>
        <p>
            入学后的一些常见注意事项！
        </p>
    </div>
    
    
    <img class="bg" src="buptYB/i/bg11.jpg" alt="">
    </div>
</div>
    


<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<script src="buptYB/js/index.ie8polyfill.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<!--<![endif]-->

<script src="assets/js/amazeui.js"></script>
<script src="assets/js/js.cookie.js"></script>
<script>
    if(!Cookies.get("done")) {
        Cookies.set("done",0);
    }
    $(".littleBoxType span").hide();
</script>
<script src="buptYB/js/nav.js"></script>
    
<script>

function adjust() {
    var h=$(window).height();
    var w=$(window).width();
    
    $("#boxWelcome").width($("#boxWelcome").height());
    $("#boxSchool").width($("#boxSchool").height());
    $("#boxMap").width($("#boxMap").height());
    $("#boxRegister").width($("#boxRegister").height());
    $("#boxNote").width($("#boxNote").height());
    $("#boxSafety").width($("#boxSafety").height());
    $("#boxDate").width($("#boxDate").height());
  
}
function pString(a,b,c) {
    if (b) return "<p>您已完成"+a+"的登记</p>";
    else return "<p>您尚未完成"+a+"的登记,请前往<a href='register.php?type="+c+"'>此处</a>登记";
}
$(function(){
    
   // adjust();
    window.onresize=function(){
       // adjust();
    } 
    if(!(Cookies.get('form1') || Cookies.get('form2') || Cookies.get('form3') )) {
        $("#pStatus").html("您尚未登记信息，请前往<a href='register.php'>此处</a>登记");
    } else {
        $("#pStatus").html(pString("基本信息",Cookies.get('form1'),1)+pString("家庭信息",Cookies.get('form2'),2)+pString("军训服装",Cookies.get('form3'),3));
    }

    
});


</script>
</body>
</html>