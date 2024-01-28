def over(l):
    for i in range(0,len(l)):
        if l[i]>100:
            l[i]="OVER"
    print("NEW LIST IS:")
    print(l)      
l=list(map(int,input("enter a sequence of numbers:").split()))
over(l)

