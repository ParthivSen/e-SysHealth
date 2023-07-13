<?php
    $_id = escapeshellarg($_POST["id"]);
    $grp_name = escapeshellarg($_POST["grp_name"]);
    $grp_abbr = escapeshellarg($_POST["grp_abbr"]);
    $grp_order = escapeshellarg($_POST["grp_order"]);
    $div_name = escapeshellarg($_POST["div_name"]);
    $div_abbr = escapeshellarg($_POST["div_abbr"]);
    $other = escapeshellarg($_POST["other"]);

    exec("C:\Users\HP\Desktop\Python\Python311\python.exe python\division.py $_id $grp_name $grp_abbr $grp_order $div_name $div_abbr $other", $output, $result);
    print_r($output);
?>