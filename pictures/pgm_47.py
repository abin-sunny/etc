def newstr(str):
    if str[0]!='l' and str[1]!='s':
        str='ls'+str
    print("modified string:",str)
str=input("enter the string:")
newstr(str)
