def search(list,item):
    c=0
    for i in list:
        if i == item:
            c+=1
    print("count=",c)
list=[1,1,2,3,3,4,4,4,5]
print(list)
item=int(input("enter the item to be searched:"))
search(list,item)
