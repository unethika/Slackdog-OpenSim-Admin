﻿<style type="text/css">
<!--
.styleTitel {font-size: 16px; font-weight: bold; color: #105BA7; font-family: Arial, Helvetica, sans-serif;}
.styleText {font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #666666;}
.styleTopTitle {font-size: 20px; font-weight: bold;	font-family: Arial, Helvetica, sans-serif;}
.styleOnline {font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #009900;}
.styleOffline {font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #FF0000;}
.styleplace {color: #FFFFFF;font-size: 3px;}
-->
</style>
<? 
include("../../../includes/config.php");
include("../../../includes/mysql.php");

if($_GET[first] && $_GET[last]){
$DbLink = new DB;
$DbLink->query("SELECT PrincipalID FROM ".C_USERS_TBL." where FirstName='$_GET[first]' AND LastName='$_GET[last]'");
list($UUID) = $DbLink->next_record();

$DbLink->query("SELECT locX, locY,regionName FROM ".C_REGIONS_TBL." where regionHandle='$regHandle'");
list($locX,$locY,$regionName) = $DbLink->next_record();

$date=date("D d M Y - g:i A",$created);

}?>
<title><?=SYSNAME?> Resident Information</title>
<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" valign="top"><span class="styleTopTitle">
          <?=SYSNAME?> 
          Resident Information</span></td>
  </tr>
  <tr>
    <td colspan="2" valign="top"><hr></td>
  </tr>
  <tr>
    <td width="55%" valign="top"><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">

      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><span class="styleTitel">Resident: <?=$_GET['first']?> <?=$_GET['last']?></span></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><span class="styleText"><u>Profile Text </u></span></td>
      </tr>
      <tr>
        <td><span class="styleplace">.</span></td>
      </tr>
      <tr>
        <td><span class="styleText"><? if($profileTXT){echo"$profileTXT";}else{echo"This User has no Profile Text";}?></span></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table>
    <br>
    <br></td>
    <td width="45%" valign="top"><br>
      <br>
      <table border="0" align="center" cellpadding="5" cellspacing="0">
        <tr>
          <td bgcolor="#999999"><div align="center">
            <table width="256" height="256" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td bgcolor="#FFFFFF" background="info.jpg">&nbsp;</td>
              </tr>
            </table>
          </div></td>
        </tr>
      </table></td>
  </tr>
</table>
