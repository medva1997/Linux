
def check(name):
	import os
	f=os.popen('ps ax| grep '+name)
	rd=f.read().split("\n")
	if(len(rd)>=4):print(name+'\t\t OK')
	else: print(name+'\t\t FAIL')
	f.close()
print("service \t status")
check("nginx")
check('apache')
check('postfix')
check('dovecot')
check('named')
