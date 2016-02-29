<?php
//------------------------------------
// @calling
// @purpose : Zero Str, max=10 char
// @date
// @argment
// @return
//------------------------------------
function CM001_getZeroStr( $src, $num ){
	if($num > 10){
		return "";
	}
	
	
	$buff="0000000000";

	$buff = $buff . $src;
	$i_len = strlen($buff);
	$ret = substr($buff, $i_len - $num, $num);
	
	return $ret;
}

//------------------------------------
// @calling
// @purpose
// @date
// @argment
// @return
//------------------------------------
function com_load_csv( $fnm ){
	$csv  = array();
	$file = $fnm;
	$fp   = fopen($file, "r");
	 
	while (($data = fgetcsv($fp, 0, ",")) !== FALSE) {
	  $csv[] = $data;
	}
	fclose($fp);
	 
	return $csv;
}

//------------------------------------
// @calling
// @purpose
// @date
// @argment
// @return
//------------------------------------
function com_getRestKey( ){
	$sRet="";
	
	$sRan ="r";
	$nRan =mt_rand(100, 999);
	$sRet = $sRan . $nRan;

	return $sRet;
}


//------------------------------------
// @calling
// @purpose
// @date
// @argment
// @return
//------------------------------------
function com_insertColor($db , $mcid , $sRGB){
	$ret=FALSE;
	
	$sql= "INSERT INTO t_color(";
	$sql= $sql . "mcid";
	$sql= $sql . ",s_rgb";
	$sql= $sql . ",vflg";
	$sql= $sql . ",created";
	$sql= $sql . ")values(";
	$sql= $sql . $mcid;
	$sql= $sql . ",'" . $sRGB . "'";
	$sql= $sql . ",1";
	$sql= $sql . ",now()";
	$sql= $sql . ");";
	$result = $db->Exec_NonQuery( $sql );
	if ($result == false) {
		return $ret;
	}
	
	$ret=TRUE;
	return $ret;
}

//------------------------------------
// @calling
// @purpose
// @date
// @argment
// @return
//------------------------------------
function com_deleteAll($db , $mcid ){
	$ret=FALSE;
	
	$sql= "DELETE from t_color";
	$sql= $sql . " where mcid=" . $mcid;
	$result = $db->Exec_NonQuery( $sql );
	if ($result == false) {
		return $ret;
	}
	
	$ret=TRUE;
	return $ret;
}


//------------------------------------
// @calling
// @purpose
// @date
// @argment
// @return
//------------------------------------
function com_saveRGB($db, $sRGB,$vflg){
	$ret=FALSE;
	
	$sql= "UPDATE t_color";
	$sql= $sql . " set vflg=" . $vflg;
	$sql= $sql . " ,wdate=NULL";
	$sql= $sql . " ,modified=now()";
	$sql= $sql . " where s_rgb='" . $sRGB . "'";
//var_dump($sql);
	$result = $db->Exec_NonQuery( $sql );
	if ($result == false) {
		return $ret;
	}
	
	$ret=TRUE;
	return $ret;
}



//------------------------------------
// @calling
// @purpose
// @date
// @argment
// @return
//------------------------------------
function _get_element( $pElement, $pSource ) {
   $_data = null;
   $pElement = strtolower( $pElement );
   $_start = strpos( strtolower( $pSource ), chr(60) . $pElement, 0 );
   $_start = strpos( $pSource, chr(62), $_start ) + 1;
   $_stop = strpos( strtolower( $pSource ), "</" . $pElement .    chr(62), $_start );
   if( $_start > strlen( $pElement ) && $_stop > $_start ) {
      $_data = trim( substr( $pSource, $_start, $_stop - $_start ) );
   }
   return( $_data );
}

//------------------------------------
// @calling : 時間(int)の差分時間を求める。
// @purpose :
// @date
// @argment : 
// @return  : 差分時間(分)
//------------------------------------
function CM001_getDiff_mm($start_hh, $start_mm ,$end_hh, $end_mm){

	$st_dt   = mktime($start_hh    , $start_mm    , 0, 1, 1, 2000 );
	$end_dt  = mktime($end_hh      , $end_mm      , 0, 1, 1, 2000 );
	$diff_mm = $end_dt - $st_dt;
    $diff_mm = $diff_mm / 60;

return $diff_mm;
}

//------------------------------------
// @calling
// @purpose
// @date
// @argment
// @return : bool
//------------------------------------
function Com_checkAgent(){
	$clsConst = new AppConst();
	
	$s_buf = $_SERVER["HTTP_USER_AGENT"];

	$i_pos = strpos($s_buf , "MSIE");
	if( $i_pos != false){
	  $_SESSION["CM001"]["HTTP_USER_AGENT"]= $clsConst->VAL014_WEB_IE ;
	  return true;
	}
//var_dump($i_pos);
// exit;

	$i_pos_ch = strpos($s_buf , "Chrome");
	if (($i_pos == false) && ($i_pos_ch == false)) {
		return false;
	}
	
	return true;
}

//------------------------------------
// @calling
// @purpose
// @date
// @argment
// @return
//------------------------------------
function Com_logWrite($msg){
	$s_time = date("Y/m/d H:i:s");
	
	if(LOG_FLG==true){
		error_log($s_time  . " ". $msg . "\r\n" ,3, LOG_FNAME);
	//	error_log($s_time  . " ". $msg . "\n" ,3, LOG_FNAME);
	}
}


?>