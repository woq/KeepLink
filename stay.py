# -*- coding: UTF-8 -*-
import json, requests

with open('data.json') as f:
    data = json.load(f)

print(len(data))
delList = {}
for key, value in data.items():
    r = requests.get(value)
    if r.status_code == 500:
        delList.update({key: value})

print(delList)
for key in delList:
    data.pop(key)


print(len(data))
with open('data.json', 'w') as f:
    json.dump(data, f)
