//var mClient;
//var mTopic="item-kuc-arc-f/device-1/rgb_led_1";
var mMcid=1;

onload = function() {
//	var clientId = "clientid-0121A2";
	//
	document.querySelector('#id_chk_FFA500').onclick = function() {
//		alert('Orange');
		if($('#id_chk_FFA500').is(':checked')){
			save_rgb(mMcid, 'FFA500', 1);
		}else{
			save_rgb(mMcid, 'FFA500', 0);
		}
	}	
	document.querySelector('#id_chk_d2691e').onclick = function() {
		if($('#id_chk_d2691e').is(':checked')){
			save_rgb(mMcid, 'd2691e', 1);
		}else{
			save_rgb(mMcid, 'd2691e', 0);
		}
	};
	document.querySelector('#id_chk_800000').onclick = function() {
		if($('#id_chk_800000').is(':checked')){
			save_rgb(mMcid, '800000', 1);
		}else{
			save_rgb(mMcid, '800000', 0);
		}
	};
	document.querySelector('#id_chk_800080').onclick = function() {
		if($('#id_chk_800080').is(':checked')){
			save_rgb(mMcid, '800080', 1);
		}else{
			save_rgb(mMcid, '800080', 0);
		}
	};
	document.querySelector('#id_chk_008000').onclick = function() {
		if($('#id_chk_008000').is(':checked')){
			save_rgb(mMcid, '008000', 1);
		}else{
			save_rgb(mMcid, '008000', 0);
		}
	};
	document.querySelector('#id_chk_ffff00').onclick = function() {
		if($('#id_chk_ffff00').is(':checked')){
			save_rgb(mMcid, 'ffff00', 1);
		}else{
			save_rgb(mMcid, 'ffff00', 0);
		}
	};
	document.querySelector('#id_chk_0000ff').onclick = function() {
		if($('#id_chk_0000ff').is(':checked')){
			save_rgb(mMcid, '0000ff', 1);
		}else{
			save_rgb(mMcid, '0000ff', 0);
		}
	};
	document.querySelector('#id_chk_00ffff').onclick = function() {
		if($('#id_chk_00ffff').is(':checked')){
			save_rgb(mMcid, '00ffff', 1);
		}else{
			save_rgb(mMcid, '00ffff', 0);
		}
	};
	document.querySelector('#id_chk_f1f1f1').onclick = function() {
		if($('#id_chk_f1f1f1').is(':checked')){
			save_rgb(mMcid, 'f1f1f1', 1);
		}else{
			save_rgb(mMcid, 'f1f1f1', 0);
		}
	};
	// init
	init_rgb(mMcid );
}
//
function save_rgb(mcid, sRGB, vflg){
	var sUrl= '/tst/testRGB/php/post_rgb.php?mcid=' +mcid;
	    sUrl+='&rgb='+ sRGB;
	    sUrl+='&vflg='+ vflg;
	    
//alert(sUrl);
		$.get(sUrl , function(data, status, xhr) {
		    if (status == "success") {
//		        $("#result").html(data);
		        console.log(data);
		    }
		});
		
};	
//
//function init_rgb(mcid, sRGB, vflg){
function init_rgb(mcid ){
	var sUrl= '/tst/testRGB/php/post_init.php?mcid='+mcid;
	    
//alert(sUrl);
		$.get(sUrl , function(data, status, xhr) {
		    if (status == "success") {
//		        $("#result").html(data);
		        console.log(data);
		    }
		});
		
};
