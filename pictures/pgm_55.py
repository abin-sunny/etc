try:
    f1=open("filesample.txt","a")
    line=input("enter the content:")
    while line:
        f1.write(line+"\n")
        line=input("enter the content:")
    if not line:
        print("file updated successfully")
except :
    print("Error Occurred and Handled")
finally:
    f1.close()
 
