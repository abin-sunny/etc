class Rectangle:
    def __init__(self,l=1,w=1,a=0):
        self.__length=l
        self.__width=w
        self.a=a
    def area(self):
        self.a=self.__length*self.__width
        return self.a
    def __str__(self):
        return "length:%d and breadth:%d"%(self.__length,self.__width)
    def __lt__(self,other):
        return self.a<other.a
r1=Rectangle(4,1)
print("first rectangle:")
print(r1)
a1=r1.area()
print("area:",a1)
r2=Rectangle(3,2)
print("second rectangle:")
print(r2)
a2=r2.area()
print("area:",a2)
print("areas of first rectangle is less than the second rectangle:",r1<r2)

        
"""first rectangle:
length:4 and breadth:1
area: 4
second rectangle:
length:3 and breadth:2
area: 6
areas of first rectangle is less than the second rectangle: True

"""
