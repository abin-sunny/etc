class Rectangle:
    def __init__(self,l=1,b=1,a=0):
        self.length=l
        self.breadth=b
        self.a=a
    def perimeter(self):
        return (2*(self.length+self.breadth))
    def area(self):
        self.a=self.length*self.breadth
        return self.a
    def __str__(self):
        return "length:%d and breadth:%d"%(self.length,self.breadth)
    def __eq__(self,other):
        return self.a==other.a
r1=Rectangle(4,1)
print("first rectangle:")
print(r1)
p1=r1.perimeter()
a1=r1.area()
print("perimeter:",p1)
print("area:",a1)
r2=Rectangle(3,2)
print("second rectangle:")
print(r2)
p2=r2.perimeter()
a2=r2.area()
print("perimeter:",p2)
print("area:",a2)
print("areas are same:",r1==r2)

        
"""first rectangle:
length:4 and breadth:1
perimeter: 10
area: 4
second rectangle:
length:3 and breadth:2
perimeter: 10
area: 6
areas are same: False"""
