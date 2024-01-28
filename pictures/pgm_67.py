# Working with CSV dict files
import csv
# field names
fields=['Name','Department','Birthday']
# data rows of csv dict file
rows = [ {'Name':'Dona', 'Department':'Accounting', 'Birthday':'January'},{'Name':'Sona','Department':'Finance','Birthday': 'July'}]
with open('file.csv', 'w') as f:
    writer = csv.DictWriter(f,fieldnames=fields)
    writer.writeheader()
    writer.writerows(rows)
    f.close()

