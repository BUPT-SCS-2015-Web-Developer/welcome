<?php
//Environment settings
$iapp_id = 'iapp55501'; //Eg. iapp40000
$iapp_bupt_url = 'http://www.buptyiban.org/welcome/index.php'; //Eg. http://yiban.bupt.edu.cn/askforleave/leave.php

//Program
//Set SESSION Cookie's expire time and path before session_start()
session_set_cookie_params(86400,substr(
    getcwd(),
    strpos(getcwd(),'html')+5,
    (strpos(getcwd(),'/',strpos(getcwd(),'html')+5) ? strpos(getcwd(),'/',strpos(getcwd(),'html')+5) - (strpos(getcwd(),'html')+5) : 100)
));
session_start();
//Check the auth
if(!isset($_GET['verify_request']) and !isset($_SESSION['verify_request']))
{
    header("Location:http://f.yiban.cn/".$iapp_id);
    exit;
}
//Storage encrypted string into session
if(isset($_GET["verify_request"]))
{
    $_SESSION['verify_request'] = $_GET['verify_request'];
    $_SESSION['yb_uid'] = $_GET['yb_uid'];
    header("Location:".$iapp_bupt_url); //Jump again to remove uri
    exit;
}
$_REQUEST['verify_request'] = $_SESSION['verify_request'];
$_REQUEST['yb_uid'] = $_SESSION['yb_uid'];