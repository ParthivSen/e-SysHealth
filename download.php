<?php
$_id = escapeshellarg($_POST["query"]);
exec("C:\Users\HP\Desktop\Python\Python311\python.exe python/view.py $_id", $output, $return);
$json_a = json_decode($output[0], true);
$size = sizeof($json_a);
if ($size == 0) {
    header("Location: viewall.php");
}
$serialno = $json_a[0]["basic_details"]["serial_no"];
$make = $json_a[0]["basic_details"]["make"];
$pid = $json_a[0]["basic_details"]["purchase_id"];
$model = $json_a[0]["basic_details"]["model"];
$pday = $json_a[0]["basic_details"]["purchase_date"]["day"];
$pmonth = $json_a[0]["basic_details"]["purchase_date"]["month"];
$pyear = $json_a[0]["basic_details"]["purchase_date"]["year"];
$hostname = $json_a[0]["basic_details"]["hostname"];
$category = $json_a[0]["basic_details"]["category"];
$working = $json_a[0]["basic_details"]["working_OK"];
$os = ($json_a[0]["system_details"]["os_details"]["OS_name"] == "W") ? "Windows" : "Linux";
$osupdate = $json_a[0]["system_details"]["os_details"]["OS_last_update"];
$osinstall =  $json_a[0]["system_details"]["os_details"]["OS_install_date"];
$hdd = $json_a[0]["system_details"]["HDD_capacity"];
$ram = $json_a[0]["system_details"]["RAM_capacity"];
$ip = $json_a[0]["system_details"]["IP_addr"];
$mac = $json_a[0]["system_details"]["MAC_addr"];
$avname = $json_a[0]["av_details"]["name"];
$avactive = $json_a[0]["av_details"]["active"];
$avlic = $json_a[0]["av_details"]["licensce"];
$firewall = $json_a[0]["av_details"]["firewall_active"];
$avinstall = $json_a[0]["av_details"]["install_date"];
$avupdate = $json_a[0]["av_details"]["last_update"];
$avfire = $json_a[0]["av_details"]["firewall_av_controlled"];
$name = $json_a[0]["user_details"]["name"];
$rank = $json_a[0]["user_details"]["rank"];
$mobile = $json_a[0]["user_details"]["contact"]["mobile"];
$extension = $json_a[0]["user_details"]["contact"]["extension"];
$landline = $json_a[0]["user_details"]["contact"]["landline"];
$intrant = $json_a[0]["user_details"]["contact"]["intranet_mailID"];
$internet = $json_a[0]["user_details"]["contact"]["internet_mailID"];
$div = $json_a[0]["user_details"]["division"];
$parentgrp = $json_a[0]["user_details"]["parent_group"];
$building = $json_a[0]["user_details"]["location"]["building"];
$floor = $json_a[0]["user_details"]["location"]["floor"];
$room = $json_a[0]["user_details"]["location"]["room_no."];
$clean_desktop = $json_a[0]["checkpoints"]["clean_desktop"];
$auto_play = $json_a[0]["checkpoints"]["auto_play"];
$folder_sharing = $json_a[0]["checkpoints"]["folder_sharing"];
$default_sharing = $json_a[0]["checkpoints"]["default_sharing"];
$admin_lock = $json_a[0]["checkpoints"]["admin_lock"];
$usb_boot = $json_a[0]["checkpoints"]["USB_boot_disable"];
$bios = $json_a[0]["checkpoints"]["3_large_password"]["BIOS"];
$system = $json_a[0]["checkpoints"]["3_large_password"]["System"];
$ss = $json_a[0]["checkpoints"]["3_large_password"]["Screensaver"];
$rdp = $json_a[0]["checkpoints"]["RDP"];
$complex = $json_a[0]["checkpoints"]["Complex_password"];
$usb = $json_a[0]["checkpoints"]["USB_blocked"];
$cdvd = $json_a[0]["checkpoints"]["CD_DVD_blocked"];
$passpolicy = $json_a[0]["checkpoints"]["password_policy"];


require('fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial',"",14);
$pdf->Cell(20,15,"ID: $_id",0,1,"L");

$pdf->Cell(30,10,"Basic Details",0,1,"L");


$pdf->Cell(120,10,"Serial No.:      $serialno");
$pdf->Cell(120,10,"Make:    $make");
$pdf->Ln();

$pdf->Cell(120,10,"Purchase ID:     $pid");
$pdf->Cell(120,10,"Model:     $model");
$pdf->Ln();

$pdf->Cell(120,10,"Purchase Date:   $pday-$pmonth-$pyear");
$pdf->Cell(120,10,"Hostname:     $hostname");
$pdf->Ln();

$pdf->Cell(120,10,"Category:     $category");
$pdf->Cell(120,10,"Working OK?     $working");
$pdf->Ln();
$pdf->Ln();

if ($working == "true") {
    
    $pdf->Cell(30,10,"System Details",0,1,"L");
    $pdf->Cell(120,10,"OS Name: $os");
    $pdf->Cell(120,10,"Last OS Update: $osupdate");
    $pdf->Ln();

    $pdf->Cell(120,10,"OS Install Date: $osinstall");
    $pdf->Ln();

    
    $pdf->Cell(30,10,$os,0,1,"L");
    

    if($os == "Windows"){
        $winlic = $json_a[0]["system_details"]["os_details"]["others"]["licensce"];
        $winedition = $json_a[0]["system_details"]["os_details"]["others"]["edition"];
        $winbit = $json_a[0]["system_details"]["os_details"]["others"]["OS_Bit"];
        
        $pdf->Cell(120,10,"Windows Licensce: $winlic");
        $pdf->Cell(120,10,"Windows Edition: $winedition");
        $pdf->Ln();

        $pdf->Cell(120,10,"OS Bit: $winbit");

        $pdf->Ln();
    }else{
        $linedition = $json_a[0]["system_details"]["os_details"]["others"]["lin_edition"];
        $pdf->Cell(120,10,"Linux Edition: $linedition");
    }
} 

$pdf->Cell(30,10,"Other System Details",0,1,"L");


$pdf->Cell(120,10,"HDD Capacity: $hdd");
$pdf->Cell(120,10,"RAM Capacity: $ram");
$pdf->Ln();

$pdf->Cell(120,10,"IP Address: $ip");
$pdf->Cell(120,10,"MAC Address: $mac");
$pdf->Ln();
$pdf->Ln();


$pdf->Cell(30,10,"Antivirus Details",0,1,"L");


$pdf->Cell(120,10,"Antivirus Name: $avname");
$pdf->Cell(120,10,"Active? $avactive");
$pdf->Ln();

$pdf->Cell(120,10,"Antivirus Licensce: $avlic");
$pdf->Cell(120,10,"Firewall Active? $firewall");
$pdf->Ln();

$pdf->Cell(120,10,"Antivirus Install Date: $avinstall");
$pdf->Cell(120,10,"Antivirus Last Update: $avupdate");
$pdf->Ln();

$pdf->Cell(120,10,"Antivirus Firewall Controlled? $avfire");
$pdf->Ln();
$pdf->Ln();


$pdf->Cell(30,10,"User Details",0,1,"L");


$pdf->Cell(120,10,"Name: $name");
$pdf->Cell(120,10,"Rank: $rank");
$pdf->Ln();

$pdf->Cell(120,10,"Mobile: $mobile");
$pdf->Cell(120,10,"Extension: $extension");
$pdf->AddPage();
$pdf->Ln();

$pdf->Cell(120,10,"Landline: $landline");
$pdf->Cell(120,10,"Intranet Mail ID: $intrant");
$pdf->Ln();

$pdf->Cell(120,10,"Internet Mail ID: $internet");
$pdf->Ln();

$pdf->Cell(120,10,"Divison: $div");
$pdf->Cell(120,10,"Parent Group: $parentgrp");
$pdf->Ln();


$pdf->Cell(30,10,"Location",0,1,"L");


$pdf->Cell(60,10,"Building: $building");
$pdf->Cell(60,10,"Floor: $floor");
$pdf->Cell(60,10,"Room No.: $room");
$pdf->Ln();
$pdf->Ln();


$pdf->Cell(30,10,"Checkpoints",0,1,"L");


$pdf->Cell(60,12,"Clean Desktop: $clean_desktop");
$pdf->Cell(60,12,"Auto Play: $auto_play");
$pdf->Cell(60,12,"Folder Sharing: $folder_sharing");
$pdf->Ln();

$pdf->Cell(60,12,"Default Sharing: $default_sharing");
$pdf->Cell(60,12,"Admin Lock: $admin_lock");
$pdf->Cell(60,12,"USB Boot Disable: $usb_boot");
$pdf->Ln();

$pdf->Cell(60,12,"BIOS: $bios");
$pdf->Cell(60,12,"System: $system");
$pdf->Cell(60,12,"Screensaver: $ss");
$pdf->Ln();

$pdf->Cell(60,12,"RDP: $rdp");
$pdf->Cell(60,12,"Complex Password: $complex");
$pdf->Cell(60,12,"USB Blocked: $usb");
$pdf->Ln();

$pdf->Cell(60,12,"CD DVD Blocked: $cdvd");
$pdf->Cell(60,12,"Password Policy: $passpolicy");
$pdf->Ln();


$pdf -> Output();
?>
