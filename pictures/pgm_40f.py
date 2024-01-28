"""reverse a string"""
def rev(str):
    if len(str)==0:
        return ""
    else:
        return str[-1]+rev(str[:-1])
str=input("enter a string:")
s=rev(str)
print(s)
    
