import sqlite3, requests, time, random

con = sqlite3.connect('db.sqlite3')
cursor = con.cursor()
cursor.execute('select * from sango_links')
values = cursor.fetchall()
print("ready to check , now is "+str(len(values)))
delSum = 0
for value in values:
    r = requests.get(value[1], allow_redirects=False)
    if r.status_code == 500:
        cursor.execute('delete from sango_links where id=%d' % value[0])
        delSum += 1
    time.sleep(random.randint(10, 30))
print("delSum is %d , Left %d" % (delSum, len(values)-delSum))
cursor.close()
con.commit()
con.close()
