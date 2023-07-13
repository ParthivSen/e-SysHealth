from pymongo import MongoClient
import json
import sys

id = sys.argv[1]

client = MongoClient("mongodb://localhost:27017")
db = client.test
collection = db.details

query = {"_id": id}

cursor = collection.find(query)
list_cur = list(cursor)
json_data = json.dumps(list_cur)

print(json_data)
