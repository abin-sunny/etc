"""sum of whole numbers up to a limit"""
def sum(n):
    if n==0:
        return 0
    else:
        return n+sum(n-1)
n=int(input("enter the limit:"))
s=sum(n-1)
print(s)
    
