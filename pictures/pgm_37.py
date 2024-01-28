"""to print even numbers from a given list until you reach 237 or end of list"""
def even(l):
    for n in l:
        if n==237:break
        elif(n%2==0):print(n)
list=map(int,input("enter s sequence of numbers").split());
even(list)
