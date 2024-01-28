"""to display fullname in reverse order of words"""
def rev(l):
    for word in l[::-1]:
        print(word,end=" ")
name=input("enter your full name:").split()
rev(name)
        
