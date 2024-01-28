c=0
try:
    f1=open("filesample.txt","r")
    f2=open("newfile.txt","w")
    for i in f1.readlines():
        if not c%2:
            f2.write(i)
        c+=1
except :
    print("Error Occurred and Handled")
finally:
    f1.close()
    f2.close()
