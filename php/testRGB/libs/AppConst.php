<?php
define("OK_CODE" ,  1 );
define("NG_CODE" ,  0 );

define("SYS_DB_HOST", "localhost");
define("SYS_DB_NAME", "mqtt_db");
define("SYS_DB_USER", "test_user");
define("SYS_DB_PASS", "password");

define("ER_STAT_000" , "000" ); //zero
define("ER_STAT_101" , "101" ); //DB-Error
define("ER_STAT_102" , "102" ); //Nothing ,mc-ID
define("ER_STAT_103" , "103" );
define("ER_STAT_104" , "104" ); // Auth-error
	
define("CONT_NAME", "/agrisv2" );
 
define("ROOT_DIR"   , $_SERVER['DOCUMENT_ROOT'] . "/..");
define("BM_ROOT_DIR", $_SERVER['DOCUMENT_ROOT'] . CONT_NAME );


define("BM_ROOT_URL",  CONT_NAME );

define("PUBLIC_DIR"  , ROOT_DIR ."/public");
define("PUBLIC_URL"  , BM_ROOT_URL ."/public");

//Message
define("MSG_001"   , "Copyright 2009-2016 ,Inc. All right reserved. ");
define("MSG_002"   , "Copyright KUC architect fukuoka Inc.");

define("MSG_YT_ERROR_01"   , "。");
?>