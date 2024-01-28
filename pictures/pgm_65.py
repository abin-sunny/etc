import csv
fields=['name','department','birthday month']
rows=[['dona','accounting','january'],['sona','finance','july']]
with open('file.csv','w') as f:
    writer=csv.writer(f)
    writer.writerow(fields)
    writer.writerows(rows)
    f.close()
