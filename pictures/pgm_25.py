s=input("enter a string:")
if(s.lower().endswith("ing")):
    s+="ly"
else:
    s+="ing"
print("after modification:",s)
