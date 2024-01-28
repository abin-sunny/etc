f=int(input("enter the future year:"))
result=[i for i in range(2023,f+1) if i%4==0 and (i%400==0 or i%100!=0)]
print("leap years are:",result)
