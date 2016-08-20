<?php
/**
 * Created by PhpStorm.
 * User: shzha
 * Date: 2016/8/21
 * Time: 1:55
 */
error_reporting(0);
if(!isset($_GET['ybuid'])){
    header('Location:../index.php');
    exit;
}

include ('db_config.php');

$YBUID = $_GET['ybuid'];

$DBH = new PDO("mysql:host=$db_host;dbname=$db_database;", $db_username, $db_password,
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

try{
    $stmt = $DBH->prepare('SELECT `BUPTID`,`form2-1Name`,`form3Size`,`form1Name` FROM welcome_stuinfo WHERE YBUID = ?');
    $stmt->execute([$YBUID]);
    //var_dump($stmt);
    //echo $YBUID;
    $info = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    print 'Database Error. Please contact supporter!';
    die();
}

$data = array();

if($info['BUPTID'] != '' and $info['form2-1Name'] != '' and $info['form3Size'] != '')
    $data['formcomplete'] = true;
else $data['formcomplete'] = false;

$data['realname'] = $info['form1Name'];
$data['buptid'] = $info['BUPTID'];

$privateKey = "BUPTYiban2333333";
$iv = $_GET['iv'];

//加密
$encrypted = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $privateKey, json_encode($data), MCRYPT_MODE_CBC, $iv);

header('Content-Type: text/plain');
echo base64_encode($encrypted);
