s=input("enter a string:")
if len(s)==2:
    new=s*2
elif len(s)<2:
    new=""
else:
    new=s[:2]+s[-2:]
print("new string:",new)
    
