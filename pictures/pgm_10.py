list = input("enter colors seperates with commas:")
list = list.split(',')
result=[list[i] for i in range(len(list)) if i%2!=0]
print(list)
print(result)
      
