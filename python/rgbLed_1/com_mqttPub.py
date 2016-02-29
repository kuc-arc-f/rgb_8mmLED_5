# -*- coding: utf-8 -*- 
import paho.mqtt.publish as publish
import com_appConst
#import com_weather
import time
#mport com_sendString

mMaxOne =10

#com_mqttPub
class mqttPubClass:

    def __init__(self):
    	num=0
#print ""
    def send_pubRGB(self, sPay ,sTopic):
		iWait=0
		clsConst  = com_appConst.appConstClass()
		publish.single(topic=sTopic, payload=sPay, hostname=clsConst.mMQTT_HostName , port=clsConst.mMQTT_Port )
		time.sleep(iWait)
		return
		
