from pymongo import MongoClient
import json

client = MongoClient("mongodb://localhost:27017")
db = client.test
collection = db.rank


cursor = collection.find()
list_cur = list(cursor)
json_data = json.dumps(list_cur)

print(json_data)
