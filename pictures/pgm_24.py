s1=set(input("enter first collection of numbers seperated by space:").split())
s2=set(input("enter second collection of numbers seperated by space:").split())
print("they are same length:",len(s1)==len(s2))
s1=set(map(int,s1))
s2=set(map(int,s2))
print(s1)
print(s2)
print("they sum to the same value:",sum(s1)==sum(s2))
print("values occur in both:",bool(len(s1&s2)))


