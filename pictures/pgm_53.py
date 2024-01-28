try:
    f=open("filesample.txt","r+")
    list=f.readlines()
    list.sort(key=len,reverse=True)
    print(list)
    print("longest line is:",list[0])
except :
    print("Error Occurred and Handled")
finally:
    f.close()
