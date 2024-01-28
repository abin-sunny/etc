import csv
with open('file.csv', mode ='r')as f: 
      
  	# reading the CSV file 
  	file = csv.reader(f) 
    
  	# displaying the contents of the CSV file 
  	for lines in file:
      		if lines: print(lines[0],'\t',lines[1],'\t',lines[2])
