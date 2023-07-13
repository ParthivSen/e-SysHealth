from pymongo import MongoClient
import sys

client = MongoClient("mongodb://localhost:27017")
print("Connection Established Successfully")

db = client.test
collection = db.building

_id = sys.argv[1]

myQuery = {'_id': _id}
collection.delete_one(myQuery)
