import json
from pymongo import MongoClient

client = MongoClient("mongodb://localhost:27017")

db = client.test
collection = db.building

x = collection.find({}, {"_id": 0, "name": 1})

data = []
for r in x:
    data.append(r['name'])
json_data = json.dumps(data)
print(json_data)
# category = []
# rank = {}
# for testy in collection.distinct('category'):
#     category.append(testy)

# for i in range(len(category)):
#     query = {"category": category[i]}
#     for j in x:
#         rank[j['rank_code']] = j['rank']['rank_abbr']
#         data[category[i]] = rank
#     rank = {}

# # print(data)
