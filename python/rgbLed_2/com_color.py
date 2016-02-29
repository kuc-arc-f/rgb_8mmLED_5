# -*- coding: utf-8 -*- 
import MySQLdb
import com_appConst
#define


#com_color
class colorClass:

    def __init__(self):
        print ""
        
    
    def get_colorData(self, mcid):
    	#sRet=""
    	ret=[]
    	#dic = {"id": 0L, "title" : "" }
    	sSql="SELECT s_rgb  from t_color "
    	sSql=sSql+" where mcid="+ str(mcid)
    	sSql=sSql+" and vflg=1"
    	sSql=sSql+" order by modified DESC limit 100"
#    	sSql=sSql+" order by id ASC limit 100"
    	
    	clsConst = com_appConst.appConstClass()
    	connection = MySQLdb.connect(host=clsConst.mHost, db=clsConst.mDB_NAME, user=clsConst.mUser, passwd=clsConst.mPass, charset="utf8")
    	cursor = connection.cursor()
    	cursor.execute( sSql )
    	result = cursor.fetchall()
    	for row in result:
    		dic = {"id": 0L, "s_rgb" : "" }
    		dic["s_rgb"]          =row[0]
    		ret.append(dic)
    	
    	cursor.close()
    	connection.close()
    	return ret
