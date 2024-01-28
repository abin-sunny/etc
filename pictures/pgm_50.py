try:
    f=open("filesample.txt","r+")
    f.seek(0,0)
    print(len(f.readlines()))
except :
    print("Error Occurred and Handled")
finally:
    f.close()
