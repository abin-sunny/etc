"""sum of elements in list"""
def sum(l):
    if len(l)==0:
        return 0
    else:
        return l[0]+sum(l[1:])
l=list(map(int,input("enter a sequence of numbers:").split()))
s=sum(l)
print("sum of", l ,"is" ,s)

