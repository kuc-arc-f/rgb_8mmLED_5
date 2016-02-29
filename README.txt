//------------------------------------
// @calling : Wiz550io+ ATMega328P
// @purpose : 
// @date    : 2016-02-28
// @Author  : Kouji Nakashima / kuc-arc-f.com
//------------------------------------

Ethernet : Wiz550io
MCU : ATMega328P (Int. 8MHz)

[youtube]
https://youtu.be/WrRhCRJs0lI

[blog]
http://knaka0209.blogspot.jp/2016/02/LED8mm-5.html

============ update: 2016-02-29 ========
Color Select UI, add

/python/rgbLed_2 : MQTT -pub
/php : UI( PHP Version 5.4.45 , ajax )

[table-MYSQL]
CREATE TABLE IF NOT EXISTS `t_color` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mcid` int(11) DEFAULT '0',
  `s_rgb` text,
  `wdate` datetime DEFAULT NULL,
  `vflg` int(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=370 ;

=====================================

