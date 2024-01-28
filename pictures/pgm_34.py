p=int(input("enter a percentage of marks:"))
if p>=90:
    g="A+"
elif p>=80:
    g="A"
elif p>=70:
    g="B+"
elif p>=60:
    g="B"
elif p>=50:
    g="C+"
elif p>=40:
    g="C"
elif p>=30:
    g="D+"
else:
    g="fail"
print("result:",g)

