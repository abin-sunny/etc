class Time:
    def __init__(self,h=0,m=0,s=0):
        self.__hours=h
        self.__minutes=m
        self.__seconds=s
    def __add__(self,other):
        t=Time()
        t.__seconds=self.__seconds+other.__seconds
        t.__minutes=self.__minutes+other.__minutes
        t.__hours=self.__hours+other.__hours
        if t.__seconds>=60:
            t.__minutes+=t.__seconds//60
            t.__seconds%=60
        if t.__minutes>=60:
            t.__hours+=t.__minutes//60
            t.__minutes%=60
        return t
    def __str__(self):
        return "%d:%d:%d"%(self.__hours,self.__minutes,self.__seconds)
t1=Time(2,35,35)
t2=Time(3,45,45)
print("time 1:",t1)
print("time 2:",t2)
print("total time:",t1+t2)
"""time 1: 2:35:35
time 2: 3:45:45
total time: 6:21:20"""
        

