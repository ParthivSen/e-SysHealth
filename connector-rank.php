<?php
    $id = escapeshellarg($_POST["id"]);
    $rank_code = escapeshellarg($_POST["rank_code"]);
    $cat = escapeshellarg( $_POST["cat"]);
    $rank_name = escapeshellarg($_POST["rank_name"]);
    $rank_abbr = escapeshellarg($_POST["rank_abbr"]);
    $pay_mat = escapeshellarg( $_POST["pay_mat"]);
    $pay_lvl = escapeshellarg( $_POST["pay_lvl"]);
    $sno = escapeshellarg( $_POST["sno"]);
    $others = escapeshellarg( $_POST["others"]);

    $output = exec("python.exe python\rank.py $id $rank_code $cat $rank_name $rank_abbr $pay_mat $pay_lvl $sno $others");
    

    echo $output;
    echo "Submitted successfully";
