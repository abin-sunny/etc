class BankAccount:
    def __init__(self,no=0,name="nil",t="nil",b=0):
        self.ano=no
        self.aname=name
        self.type=t
        self.balance=b
    def deposit(self):
        b=int(input("enter the amount to be deposited:"))
        self.balance+=b
        print("new balance:",self.balance)
    def withdraw(self):
        b=int(input("enter the amount to be withdrawed:"))
        self.balance-=b
        print("new balance:",self.balance)
    def __str__(self):
        return "Account number:%d \n Name:%s \n Type of Account:%s \n Balance:%d"%(self.ano,self.aname,self.type,self.balance)
a1=BankAccount(1122,"Dona","Savings account",10000)
print(a1)
a1.deposit()
a1.withdraw()


    """Account number:1122 
 Name:Dona 
 Type of Account:Savings account 
 Balance:10000
enter the amount to be deposited:300
new balance: 10300
enter the amount to be withdrawed:100
new balance: 10200
"""
        
