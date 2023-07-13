from pymongo import MongoClient
import sys

client = MongoClient("mongodb://localhost:27017")
print("Connection Established Successfully")

db = client.test
collection = db.division

_id = sys.argv[1]
grp_name = sys.argv[2]
grp_abbr = sys.argv[3]
grp_code = sys.argv[4]
div_name = sys.argv[5]
div_abbr = sys.argv[6]
others = sys.argv[7]
myquery = {"_id": _id}
newvalues = {"$set":  {"grp_name": grp_name, "grp_abbr": grp_abbr,
                       "grp_code": grp_code, "div_name": div_name, "div_abbr": div_abbr, "other": others}}

collection.update_one(myquery, newvalues)
