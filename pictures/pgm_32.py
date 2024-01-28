d={"1":"python","2":"cpp","3":"java"}
print(d)
k=input("enter the key to be searched:")
for i in d.keys():
    if i==k:
        print("key is present")
        break
  
