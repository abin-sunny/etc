try:
    f1=open("numbers.txt","r")
    f2=open("odd.txt","w")
    f3=open("even.txt","w")
    f2.seek(0,0)
    f3.seek(0,0)
    list=f1.readlines()
    for i in list:
        if not int(i[:-1])%2:
            f3.write(i)
        else:
            f2.write(i)
except:
    print("Error Occurred and Handled")
finally:
    print("odd and even are seperated")
    f1.close()
    f2.close()
    f3.close()


    
    
