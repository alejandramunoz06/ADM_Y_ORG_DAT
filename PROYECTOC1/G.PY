import random
f=open('datos.txt', 'w')
for x in range(12):
    m=round(random.uniform(0.0,15.0),1)
    f.write(f"{m}")
    if (x+1) < 12:
        f.write("\n")
f.close();


