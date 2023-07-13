<?php

exec("C:\Users\HP\Desktop\Python\Python311\python.exe python\option.py", $output, $return);
$json_a = json_decode($output[0], true);
$keys = array_keys($json_a);

$rank = array();
foreach ($keys as $cat) {
    foreach ($json_a[$cat] as $rnk) {
        $rank[$cat][] = $rnk;
    }
}

exec("C:\Users\HP\Desktop\Python\Python311\python.exe python\building_option.py", $output2, $result2);
$building = json_decode($output2[0], true);

exec("C:\Users\HP\Desktop\Python\Python311\python.exe python\division_option.py", $output3, $result3);
$parent = json_decode($output3[0], true);
$parent_keys = array_keys($parent);
$div = array();
foreach ($parent_keys as $cat) {
    foreach ($parent[$cat] as $rnk) {
        $div[$cat][] = $rnk;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Webstrot Admin : Basic Form </title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/unix.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>


    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <li class="label">Main</li>
                    <li class="active"><a class="sidebar-sub-toggle"><i class="ti-home"></i> Dashboard <span class="badge badge-primary">6</span> <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="index.html">Dashboard 1</a></li>
                            <li><a href="index-v1.html">Dashboard 2</a></li>
                            <li><a href="index-school.html">Dashboard 3</a></li>
                            <li><a href="index-ecommerce.html">Dashboard 5</a></li>
                            <li><a href="index-ecommerce-v2.html">Dashboard 6</a></li>
                        </ul>
                    </li>

                    <li class="label">Master</li>
                    <li><a href="building.php"><i class="ti-calendar"></i> Buiding </a></li>
                    <li><a href="rank.php"><i class="ti-email"></i> Rank</a></li>
                    <li><a href="division.php"><i class="ti-user"></i> Division/Group</a></li>
                    <li class="label">Form</li>
                    <li><a href="form.php"><i class="ti-view-list-alt"></i> Basic Form </a></li>
                    <li><a href="query.php"><i class="ti-file"></i>View</a></li>
                    <li><a href="logout.php"><i class="ti-close"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->

    <div class="header">
        <div class="pull-left">
            <div class="logo"><a href="index.html"><!-- <img src="assets/images/logo.png" alt="" /> --><span>Central SysDB Portal</span></a></div>
            <div class="hamburger sidebar-toggle">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>
    </div>




    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Form-Basic</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div id="main-content">
                    <!-- /# row -->
                    <div class="row row-no-gutters">
                        <div class="col-sm-12 col-sm-offset-0 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
                            <div class="card alert">
                                <div class="card-body">
                                    <div class="basic-elements">
                                        <form action="welcome.php" method="post">
                                            <h2>Basic Details</h2>
                                            <div class="row">
                                                <div class="col-lg-10">
                                                    <div class="form-group">
                                                        <label>Unique ID</label>
                                                        <input type="text" class="form-control" name="unique_id" id="_id" required placeholder="Unique ID">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Serial No.</label>
                                                        <input type="text" class="form-control" name="serialno" id="serial_no" placeholder="Serial No.">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Purchase ID</label>
                                                        <input type="text" class="form-control" name="pid" id="pid" placeholder="Purchase ID">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Category</label>
                                                        <select class="form-control" name="category" id="s1">
                                                            <option value="#">--Select Category--</option>
                                                            <?php foreach ($keys as $cat) { ?>
                                                                <option value="<?php echo $cat; ?>"> <?php echo $cat; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <label>Purchase Date</label>
                                                    <div class="form-group">
                                                        <div class="col-lg-4">
                                                            <input type="text" class="form-control" name="purchasedate" placeholder="DD">
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <input type="text" class="form-control" name="purchasemonth" placeholder="MM">
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <input type="text" class="form-control" name="purchaseyear" placeholder="YYYY">
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Make</label>
                                                        <select class="form-control" name="make">
                                                            <option value="#">--Select Make--</option>
                                                            <option value="HCL">HCL</option>
                                                            <option value="HP">HP</option>
                                                        </select>
                                                    </div>
                                                    <!-- <div class="form-group">
                                                        <label>Text area</label>
                                                        <textarea class="form-control" rows="3" placeholder="Text input"></textarea>
                                                    </div> -->
                                                    <div class="form-group">
                                                        <label>Model</label>
                                                        <input type="text" class="form-control" name="model" placeholder="Model">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Hostname</label>
                                                        <input type="text" class="form-control" name="hostname" placeholder="Hostname">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Working?</label>
                                                        <input type="radio" name="working[]" value="true" onclick="radiobtn1(5);" id="yes" required> Yes
                                                        <input type="radio" name="working[]" value="false" onclick="radiobtn2(0);" id="no"> No &emsp;
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="section--1">
                                                <div class="row">
                                                    <h2>System Details</h2>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>OS</label>
                                                            <input type="radio" name="os[]" value="W" id="win" onclick="windowsbtn(5);" required> Windows
                                                            <input type="radio" name="os[]" value="L" id="lin" onclick="linuxbtn(5);"> Linux &emsp;
                                                            <input type="text" name="text" id="os_text" style="width: 30px;" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>OS Install Date</label>
                                                            <input type="date" class="form-control" name="os_install" placeholder="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>OS Last Update</label>
                                                            <input type="date" class="form-control" name="os_update" placeholder="">
                                                        </div>
                                                        <div class="others">
                                                            <div id="windows">
                                                                <div class="form-group">
                                                                    <label>Licensce?</label>
                                                                    <input type="radio" name="licensce[]" onclick="text1(5);" id="yes_licensce" value="true"> Yes
                                                                    <input type="radio" name="licensce[]" value="false" onclick="text2(0);"> No
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Windows Edition</label>
                                                                    <select class="form-control" name="edition">
                                                                        <option value="#">--Select Windows Edition--</option>
                                                                        <option value="Windows 7">Windows 7</option>
                                                                        <option value="Windows 8">Windows 8</option>
                                                                        <option value="Windows 10">Windows 10</option>
                                                                        <option value="Windows 11">Windows 11</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>OS Bit</label>
                                                                    <select class="form-control" name="os_bit">
                                                                        <option value="">--Select Make--</option>
                                                                        <option value="32_bit">32 Bit</option>
                                                                        <option value="64_bit">64 Bit</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div id="linux">
                                                                <div class="form-group">
                                                                    <label>Linux Edition</label>
                                                                    <input type="text" class="form-control" name="lin_edition" placeholder="Linux Edition">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>HDD Capacity</label>
                                                            <input type="text" class="form-control" name="hdd" placeholder="HDD Capacity">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>RAM Capacity</label>
                                                            <input type="text" class="form-control" name="ram" placeholder="RAM Capacity">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>IP Address</label>
                                                            <input type="text" class="form-control" name="ip_addr" placeholder="IP Address">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>MAC Address</label>
                                                            <input type="text" class="form-control" name="mac_addr" placeholder="MAC Address">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <h2>Antivirus Details</h2>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Antivirus Name</label>
                                                        <input type="text" class="form-control" name="av_name" placeholder="Antivirus Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Licensce?</label>
                                                        <input type="radio" name="av_licencse" onclick="setValue('licensce',5);" value="true" required> Yes
                                                        <input type="radio" name="av_licencse" onclick="setValue('licensce',0);" value="false"> No &emsp;
                                                        <input type="text" name="text" class="licensce" style="width: 30px;" disabled><br>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Antivirus Install Date</label>
                                                        <input type="date" class="form-control" name="av_install" placeholder="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Antivirus Last Update</label>
                                                        <input type="date" class="form-control" name="av_update" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Active?</label>
                                                        <input type="radio" name="active_av" onclick="setValue('active',5);" value="true" required> Yes
                                                        <input type="radio" name="active_av" onclick="setValue('active',0);" value="false"> No &emsp;
                                                        <input type="text" name="text" class="active_av" style="width: 30px;" disabled><br>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Firewall Active?</label>
                                                        <input type="radio" name="firewall_active" onclick="setValue('firewall',5);" value="true" required> Yes
                                                        <input type="radio" name="firewall_active" onclick="setValue('firewall',0);" value="false"> No &emsp;
                                                        <input type="text" name="text" class="firewall" style="width: 30px;" disabled><br>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Firewall Antivirus Controlled?</label>
                                                        <input type="radio" name="firewall_av_control" onclick="setValue('firewall_av',5);" value="true" required> Yes
                                                        <input type="radio" name="firewall_av_control" onclick="setValue('firewall_av',0);" value="false"> No &emsp;
                                                        <input type="text" name="text" class="firewall_av" style="width: 30px;" disabled><br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <h2>User Details</h2>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <input type="text" class="form-control" name="name" placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Rank</label>
                                                        <select class="form-control" name="rank" id="s2">
                                                            <option value="#">--Select Rank--</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Parent Group</label>
                                                        <select class="form-control" name="parent_group" id="s3">
                                                            <option value="#">--Select Parent Group--</option>
                                                            <?php foreach ($parent_keys as $cat) { ?>
                                                                <option value="<?php echo $cat; ?>"> <?php echo $cat; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Division</label>
                                                        <select class="form-control" name="division" id="s4">
                                                            <option value="#">--Select Division--</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <h4>Contact</h4>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Mobile No.</label>
                                                        <input type="text" class="form-control" name="mobile" placeholder="Mobile No.">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Extension</label>
                                                        <input type="text" class="form-control" name="extension" placeholder="Extension">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Landline</label>
                                                        <input type="text" class="form-control" name="landline" placeholder="Landline">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Intranet Mail ID</label>
                                                        <input type="email" class="form-control" name="intranet" placeholder="Intranet Mail ID">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Internet Mail ID</label>
                                                        <input type="email" class="form-control" name="internet" placeholder="Internet Mail ID">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <h4>Location</h4>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Building</label>
                                                        <select class="form-control" name="building" id="">
                                                            <option value="#">--Select Building--</option>
                                                            <?php foreach ($building as $cat) { ?>
                                                                <option value="<?php echo $cat; ?>"> <?php echo $cat; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Floor</label>
                                                        <select class="form-control" name="floor" id="">
                                                            <option value="#">--Select Floor--</option>
                                                            <option value="0">G</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Room No.</label>
                                                        <input type="text" class="form-control" name="room" placeholder="Room No.">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <h2>Checkpoints</h2>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Clean Desktop</label>
                                                        <input type="radio" name="clean_desktop" onclick="setValue('clean',5);" value="true" id="yes" required> Yes
                                                        <input type="radio" name="clean_desktop" onclick="setValue('clean',0);" value="false" id="no"> No &emsp;
                                                        <input type="text" name="test" class="clean" style="width: 30px;" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Default Sharing</label>
                                                        <input type="radio" name="default_sharing" onclick="setValue('def_share',5);" value="true" id="yes" required> Yes
                                                        <input type="radio" name="default_sharing" onclick="setValue('def_share',0);" value="false" id="no">No &emsp;
                                                        <input type="text" name="test" class="def_sharing" style="width: 30px;" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>BIOS</label>
                                                        <input type="radio" name="bios" onclick="setValue('bios',5);" value="true" id="yes" required> Yes
                                                        <input type="radio" name="bios" onclick="setValue('bios',0);" value="false" id="no"> No &emsp;
                                                        <input type="text" name="test" class="bios" style="width: 30px;" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>RDP</label>
                                                        <input type="radio" name="rdp" onclick="setValue('rdp',5);" value="true" id="yes" required> Yes
                                                        <input type="radio" name="rdp" onclick="setValue('rdp',0);" value="false" id="no"> No &emsp;
                                                        <input type="text" name="test" class="rdp" style="width: 30px;" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>CD/DVD Blocked</label>
                                                        <input type="radio" name="cd_dvd" onclick="setValue('cd_dvd',5);" value="true" id="yes" required> Yes
                                                        <input type="radio" name="cd_dvd" onclick="setValue('cd_dvd',0);" value="false" id="no"> No &emsp;
                                                        <input type="text" name="test" class="cd_dvd" style="width: 30px;" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Auto Play</label>
                                                        <input type="radio" name="auto_play" onclick="setValue('play',5);" value="true" id="yes" required> Yes
                                                        <input type="radio" name="auto_play" onclick="setValue('play',0);" value="false" id="no"> No &emsp;
                                                        <input type="text" name="test" class="auto_play" style="width: 30px;" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Admin Lock</label>
                                                        <input type="radio" name="admin_lock" onclick="setValue('admin',5);" value="true" id="yes" required> Yes
                                                        <input type="radio" name="admin_lock" onclick="setValue('admin',0);" value="false" id="no"> No &emsp;
                                                        <input type="text" name="test" class="admin_lock" style="width: 30px;" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>System</label>
                                                        <input type="radio" name="system" onclick="setValue('system',5);" value="true" id="yes" required> Yes
                                                        <input type="radio" name="system" onclick="setValue('system',0);" value="false" id="no"> No &emsp;
                                                        <input type="text" name="test" class="system" style="width: 30px;" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Complex Password</label>
                                                        <input type="radio" name="complex" onclick="setValue('complex',5);" value="true" id="yes" required> Yes
                                                        <input type="radio" name="complex" onclick="setValue('complex',0);" value="false" id="no"> No &emsp;
                                                        <input type="text" name="test" class="complex_pass" style="width: 30px;" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password Policy</label>
                                                        <input type="radio" name="pass_policy" onclick="setValue('pass',5);" value="true" id="yes" required> Yes
                                                        <input type="radio" name="pass_policy" onclick="setValue('pass',0);" value="false" id="no"> No &emsp;
                                                        <input type="text" name="test" class="pass_policy" style="width: 30px;" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Folder Sharing</label>
                                                        <input type="radio" name="folder_sharing" onclick="setValue('fold_share',5);" value="true" id="yes" required> Yes
                                                        <input type="radio" name="folder_sharing" onclick="setValue('fold_share',0);" value="false" id="no"> No &emsp;
                                                        <input type="text" name="test" class="fold_share" style="width: 30px;" disabled> <br>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>USB Boot</label>
                                                        <input type="radio" name="usb_boot" onclick="setValue('usb',5);" value="true" id="yes" required> Yes
                                                        <input type="radio" name="usb_boot" onclick="setValue('usb',0);" value="false" id="no"> No &emsp;
                                                        <input type="text" name="test" class="usb" style="width: 30px;" disabled> <br>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Screensaver</label>
                                                        <input type="radio" name="screensaver" onclick="setValue('ss',5);" value="true" id="yes" required> Yes
                                                        <input type="radio" name="screensaver" onclick="setValue('ss',0);" value="false" id="no"> No &emsp;
                                                        <input type="text" name="test" class="screensaver" style="width: 30px;" disabled> <br>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>USB Blocked</label>
                                                        <input type="radio" name="usb" onclick="setValue('busb',5);" value="true" id="yes" required> Yes
                                                        <input type="radio" name="usb" onclick="setValue('busb',0);" value="false" id="no"> No &emsp;
                                                        <input type="text" name="test" class="txtbUSB" style="width: 30px;" disabled> <br>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="row">
                                                <h4>Document</h4>
                                                <div class="col-lg-10">
                                                    <div class="form-group">
                                                        <label>Upload Document</label>
                                                        <input type="file" class="form-control" name="doc">
                                                    </div>
                                                </div>
                                            </div> -->
                                            <input type="submit" class="btn btn-primary pull-left m-b-10 m-l-5" onclick="getscore();" value="Submit">
                                            <p class="pull-right p-r-95">
                                                <div id="showscore" class="pull-right p-r-35">
        
                                                </div>
                                                <div id="card-body" class="col-lg-2">
                                                </div>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                        <!-- /# column -->
                    </div>
                </div>
            </div>
        </div>
    </div>






    <div id="search">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    <script type="text/javascript">
        var s1 = document.getElementById("s1");
        var s2 = document.getElementById("s2");
        onchange(); //Change options after page load
        s1.onchange = onchange; // change options when s1 is changed

        function onchange() {
            <?php foreach ($keys as $cat) { ?>
                if (s1.value == '<?php echo $cat; ?>') {
                    option_html = "";
                    <?php if (isset($rank[$cat])) { ?> // Make sure rank is exist
                        <?php foreach ($rank[$cat] as $value) { ?>
                            option_html += "<option value=<?php echo array_search($value, $rank[$cat]) + 1; ?>><?php echo $value; ?></option>";
                        <?php } ?>
                    <?php } ?>
                    s2.innerHTML = option_html;
                }
            <?php } ?>
        }

        var s3 = document.getElementById("s3");
        var s4 = document.getElementById("s4");
        onchange2(); //Change options after page load
        s3.onchange = onchange2; // change options when s1 is changed

        function onchange2() {
            <?php foreach ($parent_keys as $temp) { ?>
                if (s3.value == '<?php echo $temp; ?>') {
                    option_html = "";
                    <?php if (isset($div[$temp])) { ?> // Make sure div is exist
                        <?php foreach ($div[$temp] as $value) { ?>
                            option_html += "<option value=<?php echo array_search($value, $div[$temp]) + 1; ?>><?php echo $value; ?></option>";
                        <?php } ?>
                    <?php } ?>
                    s4.innerHTML = option_html;
                }
            <?php } ?>
        }
    </script>
    <!-- jquery vendor -->
    <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="assets/js/lib/menubar/sidebar.js"></script>
    <script src="assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    <script src="assets/js/lib/bootstrap.min.js"></script>
    <!-- bootstrap -->
    <!--ION Range Slider JS-->
    <script src="assets/js/lib/peitychart/jquery.peity.min.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/peitychart/peitychart.init.js"></script>


    <script src="assets/js/scripts.js"></script>
    <!-- scripit init-->
    <script src="script.js"></script>
    <!-- bootstrap -->







</body>

</html>