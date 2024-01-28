import csv
with open('file.csv', mode ='r')as f:
    file = csv.DictReader(f)
    # displaying the contents of the CSV file
    for lines in file:
        if lines: print(lines['Name'],'\t',lines['Department'],'\t',lines['Birthday'])
