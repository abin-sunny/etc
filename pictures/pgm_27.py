s1=set(input("enter the colors:").split())
s2=set(input("enter the colors:").split())
print("colors contained in first set but not contained in second set are",{i for i in s1-s2})
