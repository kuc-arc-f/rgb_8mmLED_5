<?php
//define
$mColorMap[0] = "FFA500";
$mColorMap[1] = "d2691e";
$mColorMap[2] = "800000";

$mColorMap[3] = "800080";
$mColorMap[4] = "008000";
$mColorMap[5] = "ffff00";

$mColorMap[6] = "0000ff";
$mColorMap[7] = "00ffff";
$mColorMap[8] = "f1f1f1";

//------------------------------------
// @calling
// @purpose : 
// @date
// @argment
// @return
//------------------------------------
include_once("../libs/AppCom.php");
require_once("ComFunc.php");

	$clsConst = new AppConst();
	$db     =new ComMysql();
	
	$ret_base= "000000000000000000000000";
	$sHEAD ="res=";	
	if(isset($_GET["mcid"])){
			if(com_deleteAll($db, $_GET["mcid"])==FALSE){
			   echo $sHEAD . NG_CODE . ER_STAT_101 .$ret_base;
			   exit;
			}
			for ($i = 0; $i< count($mColorMap); $i++) {
				if(com_insertColor($db, $_GET["mcid"], $mColorMap[$i] )==FALSE){
				   echo $sHEAD . NG_CODE . ER_STAT_101 .$ret_base;
				   exit;
				}
			}
			echo $sHEAD . "1";
	}else{
	  echo $sHEAD . $ret_base;
	}

?>