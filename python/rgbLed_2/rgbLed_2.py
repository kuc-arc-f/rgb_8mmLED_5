# -*- coding: utf-8 -*- 

import paho.mqtt.publish as publish
import datetime
import time
import sys
import traceback
import com_appConst
import com_color
import com_mqttPub

mTopic="item-kuc-arc-f/device-1/rgb_led_2"

mTimeMax=5
mMcid=1
mCtColor=0

if __name__ == "__main__":
	clsPub=com_mqttPub.mqttPubClass()
	clsColor = com_color.colorClass()
	from datetime import datetime
	tmBef = datetime.now()
	while True:
		tmNow = datetime.now()
		tmSpan = tmNow - tmBef
		iSpan = tmSpan.total_seconds()
		time.sleep(1.0)
		sTime = datetime.now().strftime("%Y-%m-%d %H:%M:%S")
		sTemp=""
		print("time=" +sTime)
		if iSpan > mTimeMax:
			tmBef = datetime.now()
			try:
				items = clsColor.get_colorData( mMcid )
				iNumMax= len(items)
				print ( "mCtColor=" )
				print ( mCtColor )
				if (mCtColor >= iNumMax):
					mCtColor=0
				item = items[mCtColor]
				print ( len(items) )
				mCtColor= mCtColor+1
				sRGB=item["s_rgb"]
				print (sRGB)
				sHHMM = datetime.now().strftime("%H:%M")
				clsPub.send_pubRGB(sRGB ,mTopic)
			except:
				print "--------------------------------------------"
				print traceback.format_exc(sys.exc_info()[2])
				print "--------------------------------------------"
	


