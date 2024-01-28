try:
    with open('filesample.txt', 'r') as fr:
        lines = fr.readlines()
        with open('filesample.txt', 'w') as fw:
            for line in lines:
                if line.strip('\n') != 'cccccc':
                    fw.write(line)
    print("Deleted")
except:
    print("Oops! something error")
finally:
    fr.close()
    fw.close()
