list=input("enter the elements seperated with comma")
list=list.split(",")
list1=[]
for item in list:
    if(item not in list1):
        list1.append(item)
print("given elements are:")
for i in list:
    print(i)
print("duplicates removed:")
for i in list1:
    print(i)

        
    
    
    
