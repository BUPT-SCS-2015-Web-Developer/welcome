<?php
/*
include ('backend/header_api_session.php');
include ('backend/iapp.php');

if(!isset($_SESSION['usrid']))
{
    session_regenerate_id(true);
    echo "<script language='javascript'>document.location = 'index.php';</script>";
    exit;
}
*/
?>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <title>信息登记|北邮迎新系统 2016</title>

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
    <style>
        .am-tabs {

        }

        .am-tab-panel {
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }

        .am-tabs-bd {
            border: none;
        }

        .am-tabs-nav li {
            transition: all 1s ease;
            -moz-transition: all 1s ease;
            -webkit-transistion: all 1s ease;
            -o-transition: all 1s ease;
        }

        .am-tabs-nav li a {
            transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -webkit-transistion: all 0.3s ease;
            -o-transition: all 0.3s ease;
        }

        .am-tabs-nav li:hover {
            background-color: rgba(255, 255, 255, 1);
        }

        .am-tabs-nav li:hover a {
            line-height: 35px;
        }

        .blackBlock {
            margin: 10px;
            margin-top: 0;
            background-color: rgba(0, 0, 0, 0.4);
            color: white;
            text-shadow: 0 0 3px black;
            height: auto;
            min-height: 100%;
        }

        .am-scrollable-vertical {
            height: 86%;
        }

        input, select, textarea {
            background-color: rgba(0, 0, 0, 0.1) !important;
            color: rgba(255, 255, 255, 1) !important;
        }

        option {
            color: rgba(0, 0, 0, 0.9) !important;
        }

        .am-accordion-item dt, .am-accordion-item dl, .am-accordion-item dd, .am-accordion-content {
            color: white !important;
        }

        .am-table {
            color: white !important;
        }

        fieldset h2 {
            margin-top: 0px;
        }
    </style>
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a
        href="http://browsehappy.com/" target="_blank">升级浏览器</a>
    以获得更好的体验！</p>
<![endif]-->
<header class="am-topbar am-topbar-inverse yingxin-header">
    <div class="am-topbar-brand">
        <strong>BUPT</strong> 2016
        <small>迎新系统</small>
    </div>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
            data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span
            class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

        <ul class="am-nav am-nav-pills am-topbar-nav">
            <li><a href="index.php">首页</a></li>
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
                    <li class="am-active"><a href="register.php?type=1">基本信息</a></li>
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

    <div data-am-widget="tabs" class="am-tabs am-tabs-default" id="specialTab" data-am-tabs-noswipe="1">
        <ul class="am-tabs-nav am-cf">
            <li id="panelLi1" class="am-active"><a href="[data-tab-panel-0]">基本信息</a></li>
            <li id="panelLi2" class=""><a href="[data-tab-panel-1]">家庭信息</a></li>
            <li id="panelLi3" class=""><a href="[data-tab-panel-2]">军训服装</a></li>
        </ul>

        <div class="am-tabs-bd">

            <!-- 基本信息 -->
            <div id="panel1" data-tab-panel-0 class="am-tab-panel am-active am-scrollable-vertical">
                <div class="blackBlock">
                    <form action="backend/regDataHandler.php?formid=1" method="post" class="am-form" id="form1" data-am-validator>
                        <fieldset>
                            <legend style="color:white">基本信息</legend>

                            <div class="am-form-group">
                                <label for="form1Name">姓名</label>
                                <input type="text" class="" id="form1Name" name="form1Name" placeholder="请输入姓名" required>
                            </div>

                            <div class="am-form-group">
                                <label for="form1Nation">民族</label>
                                <input type="text" class="" id="form1Nation" name="form1Nation" placeholder="请输入民族" required>
                            </div>

                            <div class="am-form-group">
                                <label for="form1Sex">性别</label>
                                <select id="form1Sex" name="form1Sex" required>
                                    <option selected disabled>请选择</option>
                                    <option value="男">男</option>
                                    <option value="女">女</option>
                                </select>
                                <span class="am-form-caret"></span>
                            </div>

                            <div class="am-form-group">
                                <label for="form1ID">身份证号</label>
                                <input type="text" class="" id="form1ID" name="form1ID" placeholder="请输入18位身份证号" required>
                            </div>

                            <div class="am-form-group">
                                <label for="form1NativePlace">籍贯</label>
                                <input type="text" class="" id="form1NativePlace" name="form1NativePlace"
                                       placeholder="请输入祖籍地" required>
                            </div>

                            <div class="am-form-group">
                                <label for="form1PoliticalStatus">政治面貌</label>
                                <select id="form1PoliticalStatus" name="form1PoliticalStatus" required>
                                    <option selected disabled>请选择</option>
                                    <option>中共党员</option>
                                    <option>中共预备党员</option>
                                    <option>共青团员</option>
                                    <option>群众(普通公民)</option>
                                    <option>其他</option>
                                </select>
                                <span class="am-form-caret"></span>
                            </div>

                            <!-- 学院 下拉版
                            <div class="am-form-group">
                              <label for="form1School">学院</label>
                              <select id="form1School" name="form1School">
                                <option>信息与通信工程学院</option>
                                <option>电子工程学院</option>
                                <option>计算机学院</option>
                                <option>自动化学院</option>
                                <option>软件学院</option>
                                <option>数字媒体与设计艺术学院</option>
                                <option>理学院</option>
                                <option>经济管理学院</option>
                                <option>公共管理学院</option>
                              </select>
                              <span class="am-form-caret"></span>
                            </div>
                            -->

                            <div class="am-form-group">
                                <label for="form1School">学院</label>
                                <input type="text" class="" id="form1School" name="form1School" placeholder="请输入所在学院" required>
                            </div>

                            <div class="am-form-group">
                                <label for="form1School">专业</label>
                                <input type="text" class="" id="form1Major" name="form1Major" placeholder="请输入所在专业" required>
                            </div>

                            <div class="am-form-group">
                                <label for="form1Household">户口性质</label>
                                <select id="form1Household" name="form1Household" required>
                                    <option selected disabled>请选择</option>
                                    <option>农业户口</option>
                                    <option>非农业户口(城镇户口)</option>
                                </select>
                                <span class="am-form-caret"></span>
                            </div>

                            <!-- 户口 输入版
                            <div class="am-form-group">
                              <label for="form1Household">户口性质</label>
                              <input type="text" class="" id="form1Household" name="form1Household" placeholder="请输入户口性质">
                            </div>
                            -->

                            <div class="am-form-group">
                                <label for="form1Residing">户口所在地</label>
                                <input type="text" class="" id="form1Residing" name="form1Residing"
                                       placeholder="请输入户口所在地" required>
                            </div>

                            <div class="am-form-group">
                                <label for="form1Postcode">邮编</label>
                                <input type="number" class="" id="form1Postcode" name="form1Postcode"
                                       placeholder="请输入邮政编码" required>
                            </div>

                            <div class="am-form-group">
                                <label for="form1Address">家庭详细住址(通讯地址)</label>
                                <input type="text" class="" id="form1Address" name="form1Address"
                                       placeholder="请输入家庭详细住址" required>
                            </div>

                            <div class="am-form-group">
                                <label for="form1PhoneNumber">手机号码</label>
                                <input type="text" class="" id="form1PhoneNumber" name="form1PhoneNumber"
                                       placeholder="请输入手机号码" required>
                            </div>

                            <div class="am-form-group">
                                <label for="form1QQ">QQ号码</label>
                                <input type="number" class="" id="form1QQ" name="form1QQ" placeholder="请输入QQ号" required>
                            </div>

                            <div class="am-form-group">
                                <label for="form1Hobby">兴趣爱好</label>
                                <textarea class="" rows="6" id="form1Hobby" name="form1Hobby"
                                          placeholder="请输入兴趣爱好" required></textarea>
                            </div>

                            <div class="am-checkbox">
                                <label>
                                    <input type="checkbox" name="form1Poverty">家庭贫困(需开具当地政府的证明)
                                </label>
                            </div>

                            <div class="am-form-group">
                                <label for="form1Income">家庭月收入</label>
                                <input type="text" class="" id="form1Income" name="form1Income" placeholder="请输入家庭月收入" required>
                            </div>

                            <div class="am-form-group">
                                <label for="form1Blood">血型</label>
                                <select id="form1Blood" name="form1Blood" required>
                                    <option selected disabled>请选择</option>
                                    <option>A</option>
                                    <option>B</option>
                                    <option>AB</option>
                                    <option>O</option>
                                    <option>其他</option>
                                </select>
                                <span class="am-form-caret"></span>
                            </div>

                            <div class="am-form-group">
                                <label for="form1Allergy">过敏病史</label>
                                <input type="text" class="" id="form1Allergy" name="form1Allergy"
                                       placeholder="请输入过敏病史(如无则不填)">
                            </div>

                            <div class="am-form-group">
                                <label for="form1Allergen">过敏原</label>
                                <input type="text" class="" id="form1Allergen" name="form1Allergen"
                                       placeholder="请输入过敏原(如无则不填)">
                            </div>

                            <div class="am-form-group">
                                <label for="form1MedicalHistory">既往病史</label>
                                <textarea class="" rows="4" id="form1MedicalHistory" name="form1MedicalHistory"
                                          placeholder="请输入既往病史(本项保密，请如实填写相关信息)"></textarea>
                                <span class="am-form-caret">本项保密，请如实填写相关信息</span>
                            </div>

                            <div class="am-form-group">
                                <label for="form1Special">特殊要求请备注</label>
                                <textarea class="" rows="5" id="form1Special" name="form1Special"
                                          placeholder="特殊要求"></textarea>
                            </div>

                            <p>
                                <button id="form1Submit" type="submit" class="am-btn am-btn-default">提交</button>
                            </p>
                        </fieldset>
                    </form>
                </div>
            </div>

            <!-- 家庭信息 -->
            <div id="panel2" data-tab-panel-1 class="am-tab-panel am-scrollable-vertical">
                <div class="blackBlock">
                    <form action="backend/regDataHandler.php?formid=2" method="post" class="am-form" id="form2" data-am-validator>
                        <fieldset>
                            <legend style="color:white">家庭信息</legend>

                            <h2>父母或直系亲属(一)</h2>
                            <hr>
                            <div class="am-form-group">
                                <label for="form2-1Name">姓名</label>
                                <input type="text" class="" id="form2-1Name" name="form2-1Name" placeholder="输入亲属姓名" required>
                            </div>

                            <div class="am-form-group">
                                <label for="form2-1Relationship">与本人关系</label>
                                <input type="text" class="" id="form2-1Relationship" name="form2-1Relationship"
                                       placeholder="输入亲属与本人关系" required>
                            </div>

                            <div class="am-form-group">
                                <label for="form2-1PoliticalStatus">政治面貌</label>
                                <select id="form2-1PoliticalStatus" name="form2-1PoliticalStatus" required>
                                    <option selected disabled>请选择</option>
                                    <option>中共党员</option>
                                    <option>中共预备党员</option>
                                    <option>共青团员</option>
                                    <option>群众(普通公民)</option>
                                    <option>其他</option>
                                </select>
                                <span class="am-form-caret"></span>
                            </div>

                            <div class="am-form-group">
                                <label for="form2-1ID">身份证号</label>
                                <input type="text" class="" id="form2-1ID" name="form2-1ID" placeholder="请输入18位身份证号" required>
                            </div>

                            <div class="am-form-group">
                                <label for="form2-1Workplace">工作单位</label>
                                <input type="text" class="" id="form2-1Workplace" name="form2-1Workplace"
                                       placeholder="请输入亲属工作单位" required>
                            </div>

                            <div class="am-form-group">
                                <label for="form2-1MobileNumber">移动电话</label>
                                <input type="text" class="" id="form2-1MobileNumber" name="form2-1MobileNumber"
                                       placeholder="请输入亲属移动电话号码" required>
                            </div>

                            <div class="am-form-group">
                                <label for="form2-1Landline">固定电话</label>
                                <input type="text" class="" id="form2-1Landline" name="form2-1Landline"
                                       placeholder="请输入亲属固定电话号码">
                            </div>

                            <div class="am-form-group">
                                <label for="form2-1Postcode">通讯邮编</label>
                                <input type="number" class="" id="form2-1Postcode" name="form2-1Postcode"
                                       placeholder="请输入亲属通讯邮政编码">
                            </div>

                            <div class="am-form-group">
                                <label for="form2-1Address">通讯地址</label>
                                <input type="text" class="" id="form2-1Address" name="form2-1Address"
                                       placeholder="请输入亲属通讯地址" required>
                            </div>

                            <h2>父母或直系亲属(二)</h2>
                            <hr>
                            <div class="am-form-group">
                                <label for="form2-2Name">姓名</label>
                                <input type="text" class="" id="form2-2Name" name="form2-2Name" placeholder="输入亲属姓名">
                            </div>

                            <div class="am-form-group">
                                <label for="form2-2Relationship">与本人关系</label>
                                <input type="text" class="" id="form2-2Relationship" name="form2-2Relationship"
                                       placeholder="输入亲属与本人关系">
                            </div>

                            <div class="am-form-group">
                                <label for="form2-2PoliticalStatus">政治面貌</label>
                                <select id="form2-2PoliticalStatus" name="form2-2PoliticalStatus">
                                    <option value="" selected disabled>请选择</option>
                                    <option>中共党员</option>
                                    <option>中共预备党员</option>
                                    <option>共青团员</option>
                                    <option>群众(普通公民)</option>
                                    <option>其他</option>
                                </select>
                                <span class="am-form-caret"></span>
                            </div>

                            <div class="am-form-group">
                                <label for="form2-2ID">身份证号</label>
                                <input type="text" class="" id="form2-2ID" name="form2-2ID" placeholder="请输入18位身份证号">
                            </div>

                            <div class="am-form-group">
                                <label for="form2-2Workplace">工作单位</label>
                                <input type="text" class="" id="form2-2Workplace" name="form2-2Workplace"
                                       placeholder="请输入亲属工作单位">
                            </div>

                            <div class="am-form-group">
                                <label for="form2-2MobileNumber">移动电话</label>
                                <input type="text" class="" id="form2-2MobileNumber" name="form2-2MobileNumber"
                                       placeholder="请输入亲属移动电话号码">
                            </div>

                            <div class="am-form-group">
                                <label for="form2-2Landline">固定电话</label>
                                <input type="text" class="" id="form2-2Landline" name="form2-2Landline"
                                       placeholder="请输入亲属固定电话号码">
                            </div>

                            <div class="am-form-group">
                                <label for="form2-2Postcode">通讯邮编</label>
                                <input type="number" class="" id="form2-2Postcode" name="form2-2Postcode"
                                       placeholder="请输入亲属通讯邮政编码">
                            </div>

                            <div class="am-form-group">
                                <label for="form2-2Address">通讯地址</label>
                                <input type="text" class="" id="form2-2Address" name="form2-2Address"
                                       placeholder="请输入亲属通讯地址">
                            </div>

                            <h2>在京联系人(如无则不填)</h2>
                            <hr>
                            <div class="am-form-group">
                                <label for="form2-3Name">姓名</label>
                                <input type="text" class="" id="form2-3Name" name="form2-3Name" placeholder="输入姓名">
                            </div>

                            <div class="am-form-group">
                                <label for="form2-3Relationship">与本人关系</label>
                                <input type="text" class="" id="form2-3Relationship" name="form2-3Relationship"
                                       placeholder="输入与本人关系">
                            </div>

                            <div class="am-form-group">
                                <label for="form2-3PoliticalStatus">政治面貌</label>
                                <select id="form2-3PoliticalStatus" name="form2-3PoliticalStatus">
                                    <option value="" selected disabled>请选择</option>
                                    <option>中共党员</option>
                                    <option>中共预备党员</option>
                                    <option>共青团员</option>
                                    <option>群众(普通公民)</option>
                                    <option>其他</option>
                                </select>
                                <span class="am-form-caret"></span>
                            </div>

                            <div class="am-form-group">
                                <label for="form2-3ID">身份证号</label>
                                <input type="text" class="" id="form2-3ID" name="form2-3ID" placeholder="请输入18位身份证号">
                            </div>

                            <div class="am-form-group">
                                <label for="form2-3Workplace">工作单位</label>
                                <input type="text" class="" id="form2-3Workplace" name="form2-3Workplace"
                                       placeholder="请输入工作单位">
                            </div>

                            <div class="am-form-group">
                                <label for="form2-3MobileNumber">移动电话</label>
                                <input type="text" class="" id="form2-3MobileNumber" name="form2-3MobileNumber"
                                       placeholder="请输入移动电话号码">
                            </div>

                            <div class="am-form-group">
                                <label for="form2-3Landline">固定电话</label>
                                <input type="text" class="" id="form2-3Landline" name="form2-3Landline"
                                       placeholder="请输入固定电话号码">
                            </div>

                            <div class="am-form-group">
                                <label for="form2-3Postcode">通讯邮编</label>
                                <input type="number" class="" id="form2-3Postcode" name="form2-3Postcode"
                                       placeholder="请输入通讯邮政编码">
                            </div>

                            <div class="am-form-group">
                                <label for="form2-3Address">通讯地址</label>
                                <input type="text" class="" id="form2-3Address" name="form2-3Address"
                                       placeholder="请输入通讯地址">
                            </div>
                            <p>
                                <button id="form2Submit" type="submit" class="am-btn am-btn-default">提交</button>
                            </p>
                        </fieldset>
                    </form>
                </div>
            </div>

            <!-- 军训服装 -->
            <div id="panel3" data-tab-panel-2 class="am-tab-panel am-scrollable-vertical">
                <div class="blackBlock">
                    <form action="backend/regDataHandler.php?formid=3" method="post" class="am-form" id="form3" data-am-validator>
                        <fieldset>
                            <legend style="color:white">军训服装</legend>

                            <div class="am-form-group">
                                <label for="form3Size">军训服尺码</label>
                                <select id="form3Size" name="form3Size" required>
                                    <option disabled selected>请选择</option>
                                    <option>S</option>
                                    <option>M</option>
                                    <option>L</option>
                                    <option>XL</option>
                                    <option>XXL</option>
                                    <option>XXXL</option>

                                </select>
                                <span class="am-form-caret"></span>
                            </div>

                            <section data-am-widget="accordion" class="am-accordion am-accordion-basic"
                                     data-am-accordion='{  }' id="section">
                                <dl class="am-accordion-item">
                                    <dt class="am-accordion-title">
                                        服装尺码与身高尺寸对照表
                                    </dt>
                                    <dd class="am-accordion-bd am-collapse">
                                        <!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
                                        <div class="am-accordion-content">
                                            <table class="am-table am-table-bordered am-table-radius">
                                                <thead>
                                                <tr>
                                                    <th>尺码</th>
                                                    <th>S</th>
                                                    <th>M</th>
                                                    <th>L</th>
                                                    <th>XL</th>
                                                    <th>XXL</th>
                                                    <th>XXXL</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>[男]身高</td>
                                                    <td>165</td>
                                                    <td>170</td>
                                                    <td>175</td>
                                                    <td>180</td>
                                                    <td>185</td>
                                                    <td>190</td>
                                                </tr>
                                                <tr>
                                                    <td>[女]身高/胸围</td>
                                                    <td>155/82A</td>
                                                    <td>160/86A</td>
                                                    <td>165/90A</td>
                                                    <td>170/94A</td>
                                                    <td>172/98A</td>
                                                    <td>175/102A</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </dd>
                                </dl>
                            </section>

                            <div class="am-form-group">
                                <label for="form3Shoe">鞋码</label>
                                <input type="number" class="" id="form3Shoe" name="form3Shoe" placeholder="请输入鞋码" required>
                            </div>

                            <div class="am-form-group">
                                <label for="form3intentionA">有无担任军训联系人意向</label>
                                <input type="text" class="" id="form3intentionA" name="form3intentionA" placeholder="">
                            </div>

                            <div class="am-form-group">
                                <label for="form3intentionB">有无加入大班委意向</label>
                                <input type="text" class="" id="form3intentionB" name="form3intentionB"
                                       placeholder="如有请填写意向，可多填">
                            </div>

                            <div class="am-form-group">
                                <label for="form3intentionC">有无加入小班委意向</label>
                                <input type="text" class="" id="form3intentionC" name="form3intentionC"
                                       placeholder="如有请填写意向，可多填">
                                <span class="am-form-caret">大班委包括：班长，团支书，心理委员，编辑委员，文艺委员，生活委员(男/女)，公关委员，学习委员，科技委员，宣传委员（详情请咨询导员）</span>
                            </div>
                            <p>
                                <button id="form3Submit" type="submit" class="am-btn am-btn-default">提交</button>
                            </p>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <img class="bg" src="buptYB/i/bg11.jpg" alt="">
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
    Cookies.set("register",1);
</script>
<script src="buptYB/js/nav.js"></script>

<script>

    $.getJSON("backend/regDataQuery.php",function (data) {
        $.each(data, function(key, value){
            var $ctrl = $('[name='+key+']');
            switch($ctrl.attr("type"))
            {
                case "text" :
                case "hidden":
                    $ctrl.val(value);
                    break;
                case "radio" : case "checkbox":
                $ctrl.each(function(){
                    if(value != "") { $(this).attr("checked","on"); }});
                    //if($(this).attr('value') == value) {  $(this).attr("checked",value); } });
                break;
                default:
                    $ctrl.val(value);
            }
        });
    });

    $(function () {
        var $_GET = (function () {
            var url = window.document.location.href.toString();
            var u = url.split("?");
            if (typeof(u[1]) == "string") {
                u = u[1].split("&");
                var get = {};
                for (var i in u) {
                    var j = u[i].split("=");
                    get[j[0]] = j[1];
                }
                return get;
            } else {
                return {};
            }
        })();
        if ($_GET['type'] != null) {
            switch ($_GET['type']) {
                case "1":
                {
                    $("#panel1").addClass("am-active");
                    $("#panelLi1").addClass("am-active");
                    $("#panel2").removeClass("am-active");
                    $("#panelLi2").removeClass("am-active");
                    $("#panel3").removeClass("am-active");
                    $("#panelLi3").removeClass("am-active");
                }
                    break;
                case "2":
                {
                    $("#panel2").addClass("am-active");
                    $("#panelLi2").addClass("am-active");
                    $("#panel1").removeClass("am-active");
                    $("#panelLi1").removeClass("am-active");
                    $("#panel3").removeClass("am-active");
                    $("#panelLi3").removeClass("am-active");
                }
                    break;
                case "3":
                {
                    $("#panel3").addClass("am-active");
                    $("#panelLi3").addClass("am-active");
                    $("#panel1").removeClass("am-active");
                    $("#panelLi1").removeClass("am-active");
                    $("#panel2").removeClass("am-active");
                    $("#panelLi2").removeClass("am-active");
                }
                    break;
                default:
                {

                }
                    break;
            }
        }

        $("#form1").submit(function () {
            Cookies.set('form1', 'true');
        });
        $("#form2").submit(function () {
            Cookies.set('form2', 'true');
        });
        $("#form3").submit(function () {
            Cookies.set('form3', 'true');
        });
    });
</script>
<?php //echo "<script>console.log( 'YB_UID: " . $_SESSION['usrid'] . "' );</script>"; ?>
</body>
</html>