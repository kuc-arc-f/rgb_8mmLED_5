# -*- coding: utf-8 -*- 
#------------------------------------
# @calling : 
# @purpose : 
# @date : 2016-02-28
# @Author : Kouji Nakashima / kuc-arc-f.com
#------------------------------------
import paho.mqtt.publish as publish
import datetime
import time
import sys
import traceback
import com_appConst
import com_mqttPub

mTopic="item-kuc-arc-f/device-1/rgb_led_2"

mTimeMax=3
mCount=0;

pattern = {
        0:"ffa500"  #Orange
       ,1:"d2691e"  #chocolate
       ,2:"800000"  #red 
       ,3:"800080"  # purple
       ,4:"008000"  #green
       ,5:"ffff00"  #Yellow
       ,6:"000080"  #navy
       ,7:"00ffff"  #aqua
       ,8:"404040"  #ｗhite
}
        
if __name__ == "__main__":
	clsPub=com_mqttPub.mqttPubClass()
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
				sRGB = pattern[mCount]
				mCount = mCount+1
				print sRGB
				if (mCount > 8):
					mCount=0
				clsPub.send_pubRGB(sRGB ,mTopic)
			except:
				print "--------------------------------------------"
				print traceback.format_exc(sys.exc_info()[2])
				print "--------------------------------------------"
