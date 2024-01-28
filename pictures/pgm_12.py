n=int(input("enter the no of names:"))
list=[]
for i in range(n):
    name=input("enter the name:")
    list.append(name)
letter='a'
new=[i for i in list if i[0].lower()=='a']
print("count=",len(new))
