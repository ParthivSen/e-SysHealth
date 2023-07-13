#C:\Users\HP\AppData\Local\Programs\Python\Python311\python.exe

from pymongo import MongoClient
import sys

#__CONNECTION__
client = MongoClient("mongodb://localhost:27017")
print("Connection Established Successfully")

db = client.test
collection = db.rank

id = sys.argv[1]
rank_code = sys.argv[2]
cat = sys.argv[3]
rank_name = sys.argv[4]
rank_abbr = sys.argv[5]
pay_mat =  sys.argv[6]
pay_lvl =  sys.argv[7]
sno = sys.argv[8]
others =  sys.argv[9]

doc = {
    "_id" : id,
    "rank_code" : rank_code,
    "category" : cat,
    "rank" : {
        "rank_name": rank_name,
        "rank_abbr": rank_abbr
    },
    "pay_matrix" : pay_mat,
    "pay_level" : pay_lvl,
    "category_order" : sno,
    "others": others
}
insert_id = collection.insert_one(doc).inserted_id
print(insert_id)

