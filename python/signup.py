from pymongo import MongoClient
import sys

client = MongoClient("mongodb://localhost:27017")

db = client.test
collection = db.user

id = sys.argv[1]
name = sys.argv[2]
category = sys.argv[3]
password = sys.argv[4]

doc = {
    "_id" : id,
    "name" : name,
    "category" : category,
    "password" : password
}

insertID = collection.insert_one(doc).inserted_id

print(insertID)