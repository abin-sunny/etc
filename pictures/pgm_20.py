n=int(input("enter the no of numbers:"))
l=[]
for i in range(n):
    num=int(input("enter the number:"))
    l.append(num)
l.sort()
print("second smallest number is:",l[1])
