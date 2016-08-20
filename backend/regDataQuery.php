<?php
/**
 * Created by PhpStorm.
 * User: shzha
 * Date: 2016/8/2
 * Time: 5:42
 */
error_reporting(0);
$ref = $_SERVER['HTTP_REFERER'];
if (strpos($ref, 'yiban.bupt.edu.cn') === FALSE) {
    header('Location:../index.php');
    exit;
}
include ('header_api_session.php');
include ('iapp.php');
include ('db_config.php');

$YBUID = $_SESSION['usrid'];

//Build database connection
$DBH = new PDO("mysql:host=$db_host;dbname=$db_database;", $db_username, $db_password,
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

try{
    $stmt = $DBH->prepare('SELECT * FROM welcome_stuinfo WHERE YBUID = ?');
    $stmt->execute([$YBUID]);
    //var_dump($stmt);
    //echo $YBUID;
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    print 'Database Error. Please contact supporter!';
    die();
}

echo json_encode($data);
