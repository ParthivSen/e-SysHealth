<?php
$_id = escapeshellarg($_POST["unique_id"]);
$serialno = escapeshellarg($_POST["serialno"]);
$pid = escapeshellarg($_POST["pid"]);
$category = escapeshellarg($_POST["category"]);
$purchasedate = escapeshellarg($_POST["purchasedate"]);
$purchasemonth = escapeshellarg($_POST["purchasemonth"]);
$purchaseyear = escapeshellarg($_POST["purchaseyear"]);
$make = escapeshellarg($_POST["make"]);
$model = escapeshellarg($_POST["model"]);
$hostname = escapeshellarg($_POST["hostname"]);
$working = escapeshellarg(implode("", $_POST["working"]));

$os = ($working) ? (escapeshellarg(implode("", $_POST["os"]))) : ("");
// echo $os;
// $lic="";
// echo strcmp($os,"W");
// if(strcmp($os,"W")==0)
// {
//     echo $os."hiiii";
//     $lic=escapeshellarg(implode("", $_POST["licensce"]));

// }
// echo "Licensce:".$lic;
// $lic= $os=="W" ?(escapeshellarg(implode("", $_POST["licensce"]))):"";


//echo ($working) ? (strcmp($os,"W") ? escapeshellarg(implode("", $_POST["licensce"])) : "")  : ("");

$os_install = ($working) ? (escapeshellarg($_POST["os_install"])) : ("");
$os_update = ($working) ? (escapeshellarg($_POST["os_update"])) : ("");
$hdd = ($working) ? (escapeshellarg($_POST["hdd"])) : ("");
$ram = ($working) ? (escapeshellarg($_POST["ram"])) : ("");
$ip_addr = ($working) ? (escapeshellarg($_POST["ip_addr"])) : ("");
$mac_addr = ($working) ? (escapeshellarg($_POST["mac_addr"])) : ("");
$licensce = ($working) ? escapeshellarg(implode("", $_POST["licensce"]))  : "";
$edition = ($working) ? (escapeshellarg($_POST["edition"])) : ("");
$os_bit = ($working) ? (escapeshellarg($_POST["os_bit"])) : ("");
$lin_edition = ($working) ? (escapeshellarg($_POST["lin_edition"])) : ("");

$av_name = escapeshellarg($_POST["av_name"]);
$av_licencse = escapeshellarg($_POST["av_licencse"]);
$av_install = escapeshellarg($_POST["av_install"]);
$av_update = escapeshellarg($_POST["av_update"]);
$active = escapeshellarg($_POST["active_av"]);
$firewall_active = escapeshellarg($_POST["firewall_active"]);
$firewall_av_control = escapeshellarg($_POST["firewall_av_control"]);

$name = escapeshellarg($_POST["name"]);
$rank = escapeshellarg($_POST["rank"]);
$mobile = escapeshellarg($_POST["mobile"]);
$extension = escapeshellarg($_POST["extension"]);
$landline = escapeshellarg($_POST["landline"]);
$intranet = escapeshellarg($_POST["intranet"]);
$internet = escapeshellarg($_POST["internet"]);
$division = escapeshellarg($_POST["division"]);
$parent_group = escapeshellarg($_POST["parent_group"]);
$building = escapeshellarg($_POST["building"]);
$floor = escapeshellarg($_POST["floor"]);
$room = escapeshellarg($_POST["room"]);

$clean_desktop = escapeshellarg($_POST["clean_desktop"]);
$auto_play = escapeshellarg($_POST["auto_play"]);
$folder_sharing = escapeshellarg($_POST["folder_sharing"]);
$default_sharing = escapeshellarg($_POST["default_sharing"]);
$admin_lock = escapeshellarg($_POST["admin_lock"]);
$usb_boot = escapeshellarg($_POST["usb_boot"]);
$bios = escapeshellarg($_POST["bios"]);
$system = escapeshellarg($_POST["system"]);
$screensaver = escapeshellarg($_POST["screensaver"]);
$rdp = escapeshellarg($_POST["rdp"]);
$complex = escapeshellarg($_POST["complex"]);
$usb = escapeshellarg($_POST["usb"]);
$cd_dvd = escapeshellarg($_POST["cd_dvd"]);
$pass_policy = escapeshellarg($_POST["pass_policy"]);
$score = escapeshellarg($_POST["score"]);

exec("C:\Users\HP\Desktop\Python\Python311\python.exe python\main.py $_id $serialno $pid $category $purchasedate $purchasemonth $purchaseyear $make $model $hostname $working $os $os_install $os_update $hdd $ram $ip_addr $mac_addr $licensce $edition $os_bit $lin_edition $av_name $av_licencse $av_install $av_update $active $firewall_active $firewall_av_control $name $rank $mobile $extension $landline $intranet $internet $division $parent_group $building $floor $room $clean_desktop $auto_play $folder_sharing $default_sharing $admin_lock $usb_boot $bios $system $screensaver $rdp $complex $usb $cd_dvd $pass_policy $score", $output, $return);
print_r($output);
if ($return == 1) {
    echo "<h1> Submitted Successfully </h1>";
} else {
    echo "<h1> Something went Wrong! </h1>";
}