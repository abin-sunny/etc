def count(line):
    c=0
    for i in line:
        if i.lower()=='a'or i.lower()=='e'or i.lower()=='i'or i.lower()=='o'or i.lower()=='u':
            c+=1
    print("count of vowels=",c)
line=input("enter a sentence:")
count(line)
