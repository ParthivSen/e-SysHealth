<?php
    $id = escapeshellarg($_POST["id"]);
    $name = escapeshellarg($_POST["name"]);
    $multi= escapeshellarg($_POST["multi"]);

    exec("C:\Users\HP\Desktop\Python\Python311\python.exe python\building.py $id $name $multi", $output, $result);
    print_r($output);
    header("Location: building.php");
?>