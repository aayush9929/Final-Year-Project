import csv
filename = 'C:/Users/user/Desktop/Final Project Data/Model Training Data/DiseaseDuration.csv'
with open(filename,newline="") as file:
    readData = [row for row in csv.DictReader(file)]
    for c in readData:
        if c['Duration of disease'][-1] == 'y':
            print(float(c['Duration of disease'][:len(c['Duration of disease'])-1])*52)
	elif c['Duration of disease'][-1] == 'w':
            print(float(c['Duration of disease'][:len(c['Duration of disease'])-1])*1)
	elif c['Duration of disease'][-1] == 'm':
	    print(float(c['Duration of disease'][:len(c['Duration of disease'])-1])*4)
	elif c['Duration of disease'][-1] == 'd':
	    print(float(c['Duration of disease'][:len(c['Duration of disease'])-1])//7)
