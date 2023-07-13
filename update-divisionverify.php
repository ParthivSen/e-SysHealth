<?php 
    $_id = escapeshellarg($_POST["updateid"]);
    $grp_name = escapeshellarg($_POST["grp_name"]);
    $grp_abbr = escapeshellarg($_POST["grp_abbr"]);
    $grp_code = escapeshellarg($_POST["grp_code"]);
    $div_name = escapeshellarg($_POST["div_name"]);
    $div_abbr = escapeshellarg($_POST["div_abbr"]);
    $others = escapeshellarg($_POST["others"]);
    // echo $_id;
    exec("C:\Users\HP\Desktop\Python\Python311\python.exe python/update-divisionverify.py $_id $grp_name $grp_abbr $grp_code $div_name $div_abbr $others",$output,$result);
    print_r($output);

    header("Location: division.php ");


?>