<?
error_reporting(0);
unset($l); 
session_start();
session_register($l);
if(!isset($l)){ 
header("Location: ../../../index.php"); 
exit; 
}
include ("../../../dbcon.php");
include ("../../../includes/config.php");
if ($cash < 0){$cash=0;}
if ($bet=="" && $bet<>0.2 && $bet<>1 && $bet<>5 && $bet<>10 && $bet<>50){ $bet="0.20";}
$result=mysql_query("select * from jsgamingcenter_users where login='$l'", $casdb);
$row=mysql_fetch_array($result);
// ������
if ($mon==0 or $mon=="")
{
}
$num = array();
$szamok = array();
$num[0] = $num1;
$num[1] = $num2;
$num[2] = $num3;
$num[3] = $num4;
$num[4] = $num5;
$num[5] = $num6;
$num[6] = $num7;
$num[7] = $num8;
if ($mon==1 && $row[3]>=$bet)
{
		$randTomb[$i] = $randNum;
		$foglalt[$randNum] = 1;
	}
	// ���� ���� ���� �� ��� ���
	$resultb=mysql_query("select * from jsgamingcenter_bank where name='default'", $casdb);
}
?>