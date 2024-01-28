"""to increment a list of integers by 10% if num>1000 else by 5%"""
num=input("enter a sequence of numbers:")
n=map(int,num.split())
increment=print(list(map(lambda n:n+n*0.1 if n>1000 else n+n*0.05,n)))


