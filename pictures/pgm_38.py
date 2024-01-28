
"""count the number of strings where string length is 2 or more and the first and last characters are same"""
def counter(s):
    count=0
    for i in s:
        if(len(i)>1 and i[0]==i[-1]):
            count+=1
    print("count=",count)
str=input("enter a sequence of strings:").split()
counter(str)
