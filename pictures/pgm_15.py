num=input("enter the numbers seperated by comma:")
list=num.split(",")
l=[]
for i in list:
    n=int(i)
    if(n%2==0):
        l.append(n)
print("even list:",l)
