from pymongo import MongoClient
import sys

client = MongoClient("mongodb://localhost:27017")

db = client.test
collection = db.division

id = sys.argv[1]
grp_name = sys.argv[2]
grp_abbr = sys.argv[3]
grp_code = sys.argv[4]
div_name = sys.argv[5]
div_abbr = sys.argv[6]
other = sys.argv[7]

doc = {
    "_id":id,
    "grp_name":grp_name,
    "grp_abbr":grp_abbr,
    "grp_code":grp_code,
    "div":{
        "div_name":div_name,
        "div_abbr":div_abbr,
    },
    "other":other
}
insert_id = collection.insert_one(doc).inserted_id
print(insert_id)