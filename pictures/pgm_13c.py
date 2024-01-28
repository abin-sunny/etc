word="alphabets"
list=list(word)
result=[i for i in list if i.lower()=='a' or i.lower()=='e' or i.lower()=='i' or i.lower()=='o' or i.lower()=='u']
print("given word:",word)
print("vowel list:",result)
