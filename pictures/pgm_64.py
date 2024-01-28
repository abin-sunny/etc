class Publisher:
    def __init__(self,n='nil'):
        self.name=n
    def display(self):
        print('Name : ',self.name)
class Book(Publisher):
    def __init__(self,n='nil',t='nil',a='nil'):
        super().__init__(n)
        self.title=t
        self.author=a
    def display(self):
        super().display()
        print('title : ',self.title)
        print('author : ',self.author)
class Python(Book):
    def __init__(self,n='nil',t='nil',a='nil',p=0,nop=0):
        super().__init__(n,t,a)
        self.price=p
        self.nop=nop
    def display(self):
        super().display()
        print('price : ',self.price)
        print('no of pages : ',self.nop)
p1=Python('publisher1','title1','author1',150,500)
p2=Python('publisher2','title2','author2',250,600)
print('BOOK 1')
p1.display()
print('BOOK 2')
p2.display()

"""BOOK 1
Name :  publisher1
title :  title1
author :  author1
price :  150
no of pages :  500
BOOK 2
Name :  publisher2
title :  title2
author :  author2
price :  250
no of pages :  600"""
