
from pymongo import MongoClient
import sys


# __CONNECTION__
client = MongoClient("mongodb://localhost:27017")
print("Connection Established Successfully")

db = client.test
collection = db.details

# __VARIABLE__
_id = sys.argv[1]
serial_no = sys.argv[2]
purchase_id = sys.argv[3]
category = sys.argv[4]
day, month, year = sys.argv[5], sys.argv[6], sys.argv[7]
make = sys.argv[8]
model = sys.argv[9]
hostname = sys.argv[10]
working = sys.argv[11]

os_name = sys.argv[12]
os_install_date = sys.argv[13]
os_update_date = sys.argv[14]
hdd = sys.argv[15]
ram = sys.argv[16]
ip = sys.argv[17]
mac = sys.argv[18]

win_licensce = sys.argv[19]
win_edition = sys.argv[20]
os_bit = sys.argv[21]

linux_edition = sys.argv[22]

av_name = sys.argv[23]
av_licensce = sys.argv[24]
av_install_date = sys.argv[25]
av_update_date = sys.argv[26]
active = sys.argv[27]
firewall = sys.argv[28]
firewall_av = sys.argv[29]

name = sys.argv[30]
rank = sys.argv[31]
mobile = sys.argv[32]
extension = sys.argv[33]
landline = sys.argv[34]
intranet = sys.argv[35]
internet = sys.argv[36]
division = sys.argv[37]
parent = sys.argv[38]
building = sys.argv[39]
floor = sys.argv[40]
roomno = sys.argv[41]

clean_desk = sys.argv[42]
auto_play = sys.argv[43]
folder_sharing = sys.argv[44]
default_sharing = sys.argv[45]
admin_lock = sys.argv[46]
usb_boot = sys.argv[47]
bios = sys.argv[48]
system = sys.argv[49]
screensaver = sys.argv[50]
rdp = sys.argv[51]
complex_pass = sys.argv[52]
usb_block = sys.argv[53]
cd_dvd = sys.argv[54]
password_policy = sys.argv[55]
score = sys.argv[56]

# _id = "10"
# serial_no = "test"
# purchase_id = "test"
# category = "test"
# day, month, year = "test", "test", "test"
# make = "test"
# model = "test"
# hostname = "test"
# working = "test"

# os_name = "test"
# os_install_date = "test"
# os_update_date = "test"
# hdd = "test"
# ram = "test"
# ip = "test"
# mac = "test"

# win_licensce = "test"
# win_edition = "test"
# os_bit = "test"

# linux_edition = "test"

# av_name = "test"
# av_licensce = "test"
# av_install_date = "test"
# av_update_date = "test"
# active = "test"
# firewall = "test"
# firewall_av = "test"

# name = "test"
# rank = "test"
# mobile = "test"
# extension = "test"
# landline = "test"
# intranet = "test"
# internet = "test"
# division = "test"
# parent = "test"
# building = "test"
# floor = "test"
# roomno = "test"

# clean_desk = "test"
# auto_play = "test"
# folder_sharing = "test"
# default_sharing = "test"
# admin_lock = "test"
# usb_boot = "test"
# bios = "test"
# system = "test"
# screensaver = "test"
# rdp = "test"
# complex_pass = "test"
# usb_block = "test"
# cd_dvd = "test"
# password_policy = "test"
# score = "75"

system_details = {
    "os_details": {
        "OS_name": os_name,
        "OS_install_date": os_install_date,
        "OS_last_update": os_update_date,
        "others": {}
    },
    "HDD_capacity": hdd,
    "RAM_capacity": ram,
    "IP_addr": ip,
    "MAC_addr": mac
}

windows = {
    "licensce": win_licensce,
    "edition": win_edition,
    "OS_Bit": os_bit
}
linux = {
    "lin_edition": linux_edition,
}

if os_name == "W":
    system_details["os_details"]["others"] = windows
elif os_name == "L":
    system_details["os_details"]["others"] = linux


# ___MAIN__DOCUMENT___
doc = {
    "_id": _id,
    "basic_details": {
        "serial_no": serial_no,
        "purchase_id": purchase_id,
        "purchase_date": {
            "day": day,
            "month": month,
            "year": year
        },
        "category": category,
        "make": make,
        "model": model,
        "hostname": hostname,
        "working_OK": working
    },
    "system_details": {},
    "av_details": {
        "name": av_name,
        "licensce": av_licensce,
        "install_date": av_install_date,
        "last_update": av_update_date,
        "active": active,
        "firewall_active": firewall,
        "firewall_av_controlled": firewall_av
    },
    "user_details": {
        "name": name,
        "rank": rank,
        "contact": {
            "mobile": mobile,
            "extension": extension,
            "landline": landline,
            "intranet_mailID": intranet,
            "internet_mailID": internet
        },
        "division": division,
        "parent_group": parent,
        "location": {
            "building": building,
            "floor": floor,
            "room_no.": roomno
        }
    },
    "checkpoints": {
        "clean_desktop": clean_desk,
        "auto_play": auto_play,
        "folder_sharing": folder_sharing,
        "default_sharing": default_sharing,
        "admin_lock": admin_lock,
        "USB_boot_disable": usb_boot,
        "3_large_password": {
            "BIOS": bios,
            "System": system,
            "Screensaver": screensaver
        },
        "RDP": rdp,
        "Complex_password": complex_pass,
        "USB_blocked": usb_block,
        "CD_DVD_blocked": cd_dvd,
        "password_policy": password_policy,
    },
    "score": score
}

if working == "true":
    doc["system_details"] = system_details


# ___INSERTION___
insert_id = collection.insert_one(doc).inserted_id
print(insert_id)


# ___RETREIVE___
