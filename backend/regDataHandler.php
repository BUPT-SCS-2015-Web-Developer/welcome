<?php
/**
 * Created by PhpStorm.
 * User: Henryzhao
 * Date: 2016/7/29
 * Time: 19:54
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

//Build database connection
try{
    $DBH = new PDO("mysql:host=$db_host;dbname=$db_database;", $db_username, $db_password,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

function getipaddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

function isexist(PDO $DBH, $YBUID)
{
    try{
        $stmt = $DBH->prepare('SELECT * FROM welcome_stuinfo WHERE YBUID = ?');
        $stmt->execute([$YBUID]);
        $user = $stmt->fetch();
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
    return $user;
}

if(!(isset($_POST['form1Name']) or isset($_POST['form2-1Name']) or isset($_POST['form3Size']) or isset($_POST['form4Group'])))
{
    header('Location:../index.php');
    die("请返回上一页面重新提交！");
}

switch ($_GET['formid'])
{
    case 1:
        $data = [
            'BUPTID'	=>	$_POST['BUPTID'],
            'form1Name'	=>	$_POST['form1Name'],
            'form1Nation'	=>	$_POST['form1Nation'],
            'form1Sex'	=>	$_POST['form1Sex'],
            'form1ID'	=>	$_POST['form1ID'],
            'form1NativePlace'	=>	$_POST['form1NativePlace'],
            'form1PoliticalStatus'	=>	$_POST['form1PoliticalStatus'],
            'form1School'	=>	$_POST['form1School'],
            'form1Major'	=>	$_POST['form1Major'],
            'form1Class'	=>	$_POST['form1Class'],
            'form1Household'	=>	$_POST['form1Household'],
            'form1Residing'	=>	$_POST['form1Residing'],
            'form1Postcode'	=>	$_POST['form1Postcode'],
            'form1Address'	=>	$_POST['form1Address'],
            'form1PhoneNumber'	=>	$_POST['form1PhoneNumber'],
            'form1QQ'	=>	$_POST['form1QQ'],
            'form1Hobby'	=>	$_POST['form1Hobby'],
            'form1Poverty' => (isset($_POST['form1Poverty']) ? 'yes' : 'no'),
            'form1Income'	=>	$_POST['form1Income'],
            'form1Blood'	=>	$_POST['form1Blood'],
            'form1Allergy'	=>	$_POST['form1Allergy'],
            'form1Allergen'	=>	$_POST['form1Allergen'],
            'form1MedicalHistory'	=>	$_POST['form1MedicalHistory'],
            'form1Special'	=>	$_POST['form1Special'],
            'SumbitTimeofForm1'	=>	date("Y-m-d H:i:s"),
        ];
        $_SESSION['form1ID'] = $data['form1ID'];
        break;
    case 2:
        $data = [
            'form2-1Name'	=>	$_POST['form2-1Name'],
            'form2-1Relationship'	=>	$_POST['form2-1Relationship'],
            'form2-1PoliticalStatus'	=>	isset($_POST['form2-1PoliticalStatus']) ? $_POST['form2-1PoliticalStatus'] : "",
            'form2-1ID'	=>	$_POST['form2-1ID'],
            'form2-1Workplace'	=>	$_POST['form2-1Workplace'],
            'form2-1MobileNumber'	=>	$_POST['form2-1MobileNumber'],
            'form2-1Landline'	=>	$_POST['form2-1Landline'],
            'form2-1Postcode'	=>	$_POST['form2-1Postcode'],
            'form2-1Address'	=>	$_POST['form2-1Address'],
            'form2-2Name'	=>	$_POST['form2-2Name'],
            'form2-2Relationship'	=>	$_POST['form2-2Relationship'],
            'form2-2PoliticalStatus'	=>	isset($_POST['form2-2PoliticalStatus']) ? $_POST['form2-2PoliticalStatus'] : "",
            'form2-2ID'	=>	$_POST['form2-2ID'],
            'form2-2Workplace'	=>	$_POST['form2-2Workplace'],
            'form2-2MobileNumber'	=>	$_POST['form2-2MobileNumber'],
            'form2-2Landline'	=>	$_POST['form2-2Landline'],
            'form2-2Postcode'	=>	$_POST['form2-2Postcode'],
            'form2-2Address'	=>	$_POST['form2-2Address'],
            'form2-3Name'	=>	$_POST['form2-3Name'],
            'form2-3Relationship'	=>	$_POST['form2-3Relationship'],
            'form2-3PoliticalStatus'	=>	isset($_POST['form2-3PoliticalStatus']) ? $_POST['form2-3PoliticalStatus'] : "",
            'form2-3ID'	=>	$_POST['form2-3ID'],
            'form2-3Workplace'	=>	$_POST['form2-3Workplace'],
            'form2-3MobileNumber'	=>	$_POST['form2-3MobileNumber'],
            'form2-3Landline'	=>	$_POST['form2-3Landline'],
            'form2-3Postcode'	=>	$_POST['form2-3Postcode'],
            'form2-3Address'	=>	$_POST['form2-3Address'],
            'SumbitTimeofForm2'	=>	date("Y-m-d H:i:s"),
        ];
        break;
    case 3:
        $data = [
            'form3Size'	=>	$_POST['form3Size'],
            //'form3Size_T'	=>	$_POST['form3Size_T'],
            'form3Shoe'	=>	$_POST['form3Shoe'],
            'form3intentionA'	=>	$_POST['form3intentionA'],
            'form3intentionB'	=>	$_POST['form3intentionB'],
            'form3intentionC'	=>	$_POST['form3intentionC'],
            'SumbitTimeofForm3'	=>	date("Y-m-d H:i:s"),
        ];
        break;
    case 4:
        $data = [
            'form4Group'	=>	$_POST['form4Group'],
            'form4Tech_Office'	=>	$_POST['form4Tech_Office'],
            'form4Tech_AE'	=>	$_POST['form4Tech_AE'],
            'form4Tech_PR'	=>	$_POST['form4Tech_PR'],
            'form4Tech_PS'	=>	$_POST['form4Tech_PS'],
            'form4Tech_News'	=>	$_POST['form4Tech_News'],
            'form4Tech_PnV'	=>	$_POST['form4Tech_PnV'],
            'form4Tech_PnV_Device'	=>	$_POST['form4Tech_PnV_Device'],
            'form4Tech_Others'	=>	$_POST['form4Tech_Others'],
            'form4Exp'	=>	$_POST['form4Exp'],
            'form4Intro'	=>	$_POST['form4Intro'],
            'SumbitTimeofForm4'	=>	date("Y-m-d H:i:s"),
        ];
        break;
    default:
        header('Location: /index.php');
        exit;
}
$data['YBUID'] = $_SESSION['usrid'];
$data['LastSumbitIP'] = getipaddr();

$fields = array_keys($data); // We trust field names
$values=array_values($data);
$fieldlist=implode(',',$fields);
$qs=str_repeat("?,",count($fields)-1);

try {
    if(!isexist($DBH, $data['YBUID'])) {
        $sql = "INSERT INTO welcome_stuinfo($fieldlist) values(${qs}?)";
    } else {
        $sql = "UPDATE welcome_stuinfo SET";
        foreach ($fields as $f) {
            $sql .= ' `'.$f.'` = ?,'; // the :$name part is the placeholder, e.g. :zip
        }
        $sql = substr($sql, 0, -1)." WHERE YBUID = ".$data['YBUID']; // remove last , and add sth
    }
    //echo $sql;
    $q = $DBH->prepare($sql);
    $q->execute($values);
    //var_dump($q);
} catch (PDOException $e) {
    //print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
//*/
//header('Location: /register.php?type='.($_GET['formid'] < 3) ? ($_GET['formid'] + 1) : '3');
echo "<script language='javascript'>document.location = '../register.php?type=".(($_GET['formid'] < 3) ? ($_GET['formid'] + 1) : '3')."';</script>";