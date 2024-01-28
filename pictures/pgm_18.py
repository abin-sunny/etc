n=int(input("enter the no of words:"))
l=[]
for i in range(n):
    w=input("enter the word:")
    l.append(w)
num=int(input("enter the number:"))
result=[i for i in l if len(i)>num]
print("words that are longer than",n,"are:",result)
