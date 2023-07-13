import json
from pymongo import MongoClient

client = MongoClient("mongodb://localhost:27017")

db = client.test
collection = db.rank

data = {}
category = []
rank = {}
for testy in collection.distinct('category'):
    category.append(testy)

for i in range(len(category)):
    query = {"category": category[i]}
    x = collection.find(query, {"_id": 0, "rank_code": 1,"rank": 1})
    for j in x:
        rank[j['rank_code']] = j['rank']['rank_abbr']
        data[category[i]] = rank
    rank = {}

# print(data)
json_data = json.dumps(data)
print(json_data)
