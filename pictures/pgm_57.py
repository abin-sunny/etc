try:
    num=int(input("enter an integer:"))
    if num<90 or num>120:
        raise ValueError('Abnormal Condition')
    else:
        print("THE NUMBER IS BETWEEN 90 AND 120")
except ValueError as e:
    print(e)
    
