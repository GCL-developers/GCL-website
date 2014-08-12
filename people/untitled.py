t=input("")
res=[]
while t:
t=t-1
x=0
a=raw_input("")
for i in a:
if((i=='A')|(i=='D')|(i=='O')|(i=='P')|(i=='Q')|(i=='R')):
x=x+1
if(i=='B'):
x=x+2
res=res+[x]
for i in res:
print i
