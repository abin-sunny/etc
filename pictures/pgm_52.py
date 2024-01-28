try:
    f=open("filesample.txt","r+")
    list=f.readlines()
    new=set([j for i in list for j in i.split()])
    l=sorted(new,key=len,reverse=True)
    print(l)
    print("longest word is:",l[0])
except :
    print("Error Occurred and Handled")
finally:
    f.close()
