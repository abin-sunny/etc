try:
    x=int(input('enter the number'))
    assert x>0,'too low value'

except AssertionError as ae:
    print(ae)
