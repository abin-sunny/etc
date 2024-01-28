"""to remove all strings with length 5"""
st=input("enter a sequence of string")
newlist=print(list(filter(lambda x:len(x)>=5,st.split())))

