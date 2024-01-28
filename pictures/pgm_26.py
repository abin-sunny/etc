s=input("enter a string:").split()
s.sort(key=len,reverse=True)
print("length of longest word is:",len(s[0]))
if len(s[0])==len(s[1]):
    print("BINGO")

