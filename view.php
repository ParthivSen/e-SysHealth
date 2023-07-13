<?php
$_id = escapeshellarg($_POST["query"]);
exec("C:\Users\HP\Desktop\Python\Python311\python.exe python/view.py $_id", $output, $return);
$json_a = json_decode($output[0], true);
$size = sizeof($json_a);
if ($size == 0) {
    header("Location: viewall.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>View</title>
</head>

<body>
    <div class="container" id="invoice">
        <table style="width: 100%; margin-top: 20px;">
            <tr>
                <td><h3><b>ID: <?php echo $_id; ?></b></h3></td>
                <td><h4>Your Score is: <b><?php echo $json_a[0]["score"];?></b></h4></td>
                <td id="pie"></td>
            </tr>
        </table>
        <div class="wrapper">
            <div class="section-1">
                <h1>Basic Details:</h1>
                <table style="width: 100%; margin: 10px;">
                    <tr>
                        <td>Serial No.</td>
                        <td><b><?php echo $json_a[0]["basic_details"]["serial_no"]; ?></b></td>
                        <td>Make</td>
                        <td><b><?php echo $json_a[0]["basic_details"]["make"]; ?></b></td>
                    </tr>
                    <tr>
                        <td>Purchase ID</td>
                        <td><b><?php echo $json_a[0]["basic_details"]["purchase_id"]; ?></b></td>
                        <td>Model</td>
                        <td><b><?php echo $json_a[0]["basic_details"]["model"]; ?></b></td>
                    </tr>
                    <tr>
                        <td>Purchase Date</td>
                        <td> <b><?php echo $json_a[0]["basic_details"]["purchase_date"]["day"]; ?> / <?php echo $json_a[0]["basic_details"]["purchase_date"]["month"]; ?> / <?php echo $json_a[0]["basic_details"]["purchase_date"]["year"]; ?></b></td>
                        <td>Hostname</td>
                        <td><b><?php echo $json_a[0]["basic_details"]["hostname"]; ?></b></td>
                    </tr>
                    <tr>
                        <td>Category</td>
                        <td> <b><?php echo $json_a[0]["basic_details"]["category"]; ?></b></td>
                        <td>Working OK?</td>
                        <td><b><?php echo $json_a[0]["basic_details"]["working_OK"]; ?></b></td>
                    </tr>
                </table>
            </div>
            <?php
            $showDivFlag = false;
            if ($json_a[0]["basic_details"]["working_OK"] == "true") {
                $showDivFlag = true;
            } else {
                $showDivFlag = false;
            }
            ?>
            <div class="section-2" <?php if ($showDivFlag === false) { ?>style="display:none" <?php } ?>>
                <h1>System Details</h1>
                <h3>OS Details</h3>
                <table style="width: 100%; margin: 10px;">
                    <tr>
                        <td>OS Name</td>
                        <td><b><?php echo ($json_a[0]["system_details"]["os_details"]["OS_name"] == "W") ? "Windows" : "Linux"; ?></b></td>
                        <td>OS Last Update</td>
                        <td><b><?php echo $json_a[0]["system_details"]["os_details"]["OS_last_update"]; ?></b></td>
                    </tr>
                    <tr>
                        <td>OS Install Date</td>
                        <td><b><?php echo $json_a[0]["system_details"]["os_details"]["OS_install_date"]; ?></b></td>
                    <?php
                    if ($json_a[0]["system_details"]["os_details"]["OS_name"] == "W") {
                        printf("<td> Licensce </td> <td><b> %s </b></td></tr>", $json_a[0]["system_details"]["os_details"]["others"]["licensce"]);
                        printf("<tr> <td> Edition </td> <td> <b>%s</b> </td>", $json_a[0]["system_details"]["os_details"]["others"]["edition"]);
                        printf("<td> OS Bit </td> <td> <b>%s</b> </td> </tr>", $json_a[0]["system_details"]["os_details"]["others"]["OS_Bit"]);
                    } elseif ($json_a[0]["system_details"]["os_details"]["OS_name"] == "L") {
                        printf("<td>Edition</td> <td><b>%s</b></td></tr>", $json_a[0]["system_details"]["os_details"]["others"]["lin_edition"]);
                    }
                    ?>
                </table>
                <h3>Other Details</h3>
                <table style="width: 100%; margin: 10px;">
                    <tr>
                        <td>HDD Capacity</td>
                        <td><b><?php echo $json_a[0]["system_details"]["HDD_capacity"]; ?></b></td>
                        <td>RAM Capacity</td>
                        <td><b><?php echo $json_a[0]["system_details"]["RAM_capacity"]; ?></b></td>
                    </tr>
                    <tr>
                        <td>IP Address</td>
                        <td><b><?php echo $json_a[0]["system_details"]["IP_addr"]; ?></b></td>
                        <td>MAC Address</td>
                        <td><b><?php echo $json_a[0]["system_details"]["MAC_addr"]; ?></b></td>
                    </tr>
                </table >
            </div>
            <div class="section-3">
                <h1>Antivirus Details</h1>
                <table style="width: 100%; margin: 10px;">
                    <tr>
                        <td>Antivirus Name</td>
                        <td><b><?php echo $json_a[0]["av_details"]["name"] ?></b></td>
                        <td>Active?</td>
                        <td><b><?php echo $json_a[0]["av_details"]["active"] ?></b></td>
                    </tr>
                    <tr>
                        <td>Licensce</td>
                        <td><b><?php echo $json_a[0]["av_details"]["licensce"] ?></b></td>
                        <td>Firewall Active?</td>
                        <td><b><?php echo $json_a[0]["av_details"]["firewall_active"] ?></b></td>
                    </tr>
                    <tr>
                        <td>Antivirus Install Date</td>
                        <td><b><?php echo $json_a[0]["av_details"]["install_date"] ?></b></td>
                        <td>Antivirus Last Update</td>
                        <td><b><?php echo $json_a[0]["av_details"]["last_update"] ?></b></td>
                    </tr>
                    <tr>
                        <td>Antivirus Firewall Controlled?</td>
                        <td><b><?php echo $json_a[0]["av_details"]["firewall_av_controlled"] ?></b></td>
                    </tr>
                </table>
            </div>
            <div class="section-4">
                <h1>User Details</h1>
                <table style="width: 100%; margin: 10px;">
                    <tr>
                        <td>Name</td>
                        <td><b><?php echo $json_a[0]["user_details"]["name"] ?></b></td>
                        <td>Rank</td>
                        <td><b><?php echo $json_a[0]["user_details"]["rank"] ?></b></td>
                    </tr>
                    <tr>
                        <td>Mobile</td>
                        <td><b><?php echo $json_a[0]["user_details"]["contact"]["mobile"] ?></b></td>
                        <td>Extension</td>
                        <td> <b><?php echo $json_a[0]["user_details"]["contact"]["extension"] ?></b></td>
                    </tr>
                    <tr>
                        <td>Landline</td>
                        <td><b><?php echo $json_a[0]["user_details"]["contact"]["landline"] ?></b></td>
                        <td>Intranet Mail ID</td>
                        <td><b><?php echo $json_a[0]["user_details"]["contact"]["intranet_mailID"] ?></b></td>
                    </tr>
                    <tr>
                        <td>Internet Mail ID</td>
                        <td><b><?php echo $json_a[0]["user_details"]["contact"]["internet_mailID"] ?></b></td>
                        <td>Division</td>
                        <td><b><?php echo $json_a[0]["user_details"]["division"] ?></b></td>
                    </tr>
                    <tr>
                        <td>Parent Group</td>
                        <td><b><?php echo $json_a[0]["user_details"]["parent_group"] ?></b></td>
                    </tr>
                </table>
                <h3>Location</h3>
                <table style="width: 100%; margin: 10px;">
                    <tr>
                        <td>Building</td>
                        <td><b><?php echo $json_a[0]["user_details"]["location"]["building"] ?></b></td>
                        <td>Floor</td>
                        <td><b><?php echo $json_a[0]["user_details"]["location"]["floor"] ?></b></td>
                        <td>Room No.</td>
                        <td><b><?php echo $json_a[0]["user_details"]["location"]["room_no."] ?></b></td>
                    </tr>
                </table>
            </div>
            <div class="section-5">
                <h1>Checkpoints</h1>
                <table style="width: 100%; margin: 10px;">
                    <tr>
                        <td>Clean Desktop</td>
                        <td><b><?php echo $json_a[0]["checkpoints"]["clean_desktop"] ?></b></td>
                        <td>Auto Play</td>
                        <td><b><?php echo $json_a[0]["checkpoints"]["auto_play"] ?></b></td>
                    </tr>
                    <tr>
                        <td>Folder Sharing</td>
                        <td><b><?php echo $json_a[0]["checkpoints"]["folder_sharing"] ?></b></td>
                        <td>Default Sharing</td>
                        <td><b><?php echo $json_a[0]["checkpoints"]["default_sharing"] ?></b></td>
                    </tr>
                    <tr>
                        <td>Admin Lock</td>
                        <td><b><?php echo $json_a[0]["checkpoints"]["admin_lock"] ?></b></td>
                        <td>USB Boot Disable</td>
                        <td><b><?php echo $json_a[0]["checkpoints"]["USB_boot_disable"] ?></b></td>
                    </tr>
                    <tr>
                        <td>BIOS</td>
                        <td><b><?php echo $json_a[0]["checkpoints"]["3_large_password"]["BIOS"] ?></b></td>
                        <td>System</td>
                        <td><b><?php echo $json_a[0]["checkpoints"]["3_large_password"]["System"] ?></b></td>
                    </tr>
                    <tr>
                        <td>Screensaver</td>
                        <td><b><?php echo $json_a[0]["checkpoints"]["3_large_password"]["Screensaver"] ?></b></td>
                        <td>RDP</td>
                        <td><b><?php echo $json_a[0]["checkpoints"]["RDP"] ?></b></td>
                    </tr>
                    <tr>
                        <td>Complex Password</td>
                        <td><b><?php echo $json_a[0]["checkpoints"]["Complex_password"] ?></b></td>
                        <td>USB Blocked</td>
                        <td><b><?php echo $json_a[0]["checkpoints"]["USB_blocked"] ?></b></td>
                    </tr>
                    <tr>
                        <td>CD DVD Blocked</td>
                        <td><b><?php echo $json_a[0]["checkpoints"]["CD_DVD_blocked"] ?></b></td>
                        <td>Password Policy</td>
                        <td><b><?php echo $json_a[0]["checkpoints"]["password_policy"] ?></b></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <script src="assets/js/lib/peitychart/jquery.peity.min.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/peitychart/peitychart.init.js"></script>
    <script>
        let p = document.getElementById("pie");
        p.innerHTML =
            "<p class='data-attributes'><span id='pie' name='pie' data-peity='{&quot;fill&quot;: [&quot;#99D683&quot;,&quot;#eeeeee&quot;],&quot;innerRadius&quot;: 18,&quot;radius&quot;: 28 }' style='display: none;'><?php echo $json_a[0]["score"];?>/90</span></p>";
            $(".data-attributes span").peity("donut");
    </script>
</body>

</html>