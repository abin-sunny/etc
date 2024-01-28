try:
    f1=open("filesample.txt","r+")
    f2=open("newfile.txt","w")
    f2.seek(0,0)
    file=f1.read()
    print(file)
    if f2.write(file):
        print("file copies successfully")
except :
    print("Error Occurred and Handled")
finally:
    f1.close()
    f2.close()
