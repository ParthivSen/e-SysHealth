from pymongo import MongoClient
import sys

client = MongoClient("mongodb://localhost:27017")
print("Connection Established Successfully")

db = client.test
collection = db.building

_id = sys.argv[1]
name = sys.argv[2]
multi = sys.argv[3]
myquery = {"_id": _id}
newvalues = {"$set":  {"name": name, "multi": multi}}

collection.update_one(myquery, newvalues)
