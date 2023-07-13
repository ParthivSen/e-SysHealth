from pymongo import MongoClient
import sys
import json
import webbrowser

client = MongoClient("mongodb://localhost:27017")

db = client.test
collection = db.user

id = sys.argv[1]
password = sys.argv[2]

query = {"_id" : id, "password" : password}

cursor = collection.find(query)
list_cur = list(cursor)
json_data = json.dumps(list_cur)
if(len(json_data) == 2):
    print(f"No User with UserID {id} exist")
else:
    print(json_data)