<?php
//　ＲＧＢ
//------------------------------------
// @calling
// @purpose : 
// @date
// @argment
// @return
//------------------------------------
include_once("../libs/AppCom.php");
require_once("ComFunc.php");


//
function Is_validParam($dat){
	$ret=FALSE;
	if(isset( $dat["rgb"])){
		if(isset( $dat["vflg"])){
			$ret= TRUE;
		}
	}
	return $ret;
}

//main
	$clsConst = new AppConst();
	$db     =new ComMysql();
	
	$ret_base= "000000000000000000000000";
	$sHEAD ="res=";	
var_dump("#main");
	if(isset($_GET["mcid"])){
		if(Is_validParam($_GET)==TRUE){
			if(com_saveRGB($db, $_GET["rgb"], $_GET["vflg"] )==FALSE){
			   echo $sHEAD . NG_CODE . ER_STAT_101 .$ret_base;
			   exit;
			}
			echo $sHEAD . "1";
		}else{
		  echo $sHEAD . $ret_base;
		}
		/*
		if(!(isset($_GET["vflg"])){
			   echo $sHEAD . NG_CODE . ER_STAT_101 .$ret_base;
			   exit;
		}
		*/
	}else{
	  echo $sHEAD . $ret_base;
	}
/*
*/
?>