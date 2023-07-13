from pymongo import MongoClient
import sys

client = MongoClient("mongodb://localhost:27017")
db = client.test
collection = db.building
print("Connection Success")

_id = sys.argv[1]
name = sys.argv[2]
multi = sys.argv[3]
doc = {
    "_id": _id,
    "name": name,
    "multi": multi
}

insert_id = collection.insert_one(doc).inserted_id
print(insert_id)
