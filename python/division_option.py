import json
from pymongo import MongoClient

client = MongoClient("mongodb://localhost:27017")

db = client.test
collection = db.division

data = {}
category = []
rank = {}
for testy in collection.distinct('grp_name'):
    category.append(testy)

for i in range(len(category)):
    query = {"grp_name": category[i]}
    x = collection.find(query, {"_id": 1,"div": 1})
    for j in x:
        rank[j['_id']] = j['div']['div_abbr']
        data[category[i]] = rank
    rank = {}

# print(data)
json_data = json.dumps(data)
print(json_data)
