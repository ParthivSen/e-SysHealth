<?php 
    $_id = escapeshellarg($_POST["updateid"]);
    $rank_code = escapeshellarg($_POST["rank_code"]);
    $cat = escapeshellarg($_POST["cat"]);
    $rank_name = escapeshellarg($_POST["rank_name"]);
    $rank_abbr = escapeshellarg($_POST["rank_abbr"]);
    $pay_mat = escapeshellarg($_POST["pay_mat"]);
    $pay_lvl = escapeshellarg($_POST["pay_lvl"]);
    $sno = escapeshellarg($_POST["sno"]);
    $others = escapeshellarg($_POST["others"]);
    // echo $_id;
    exec("C:\Users\HP\Desktop\Python\Python311\python.exe python/update-rankverify.py $_id $rank_code $cat $rank_name $rank_abbr $pay_mat $pay_lvl $sno $others",$output,$result);
    print_r($output);

    header("Location: rank.php ");


?>