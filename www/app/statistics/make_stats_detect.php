<?
include("../../../includes/config.php");
include("../../../includes/mysql.php");

$DbLink = new DB;

//Supress all Warnings/Errors
error_reporting(0);

// First clean out the table so we're sure there's no rubbish there
$DbLink->query("TRUNCATE ".C_STATS_REGIONS_TBL."");

// Then insert all the information we need for the map region parser
$DbLink->query("INSERT INTO ".C_STATS_REGIONS_TBL." (serverIP,serverPort) ( SELECT DISTINCT serverIP, serverHttpPort FROM regions )");

?>
