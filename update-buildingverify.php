<?php 
    $_id = escapeshellarg($_POST["updateid"]);
    $name = escapeshellarg($_POST["name"]);
    $multi = escapeshellarg($_POST["multi"]);
    // echo $_id;
    exec("C:\Users\HP\Desktop\Python\Python311\python.exe python/update-buildingverify.py $_id $name $multi",$output,$result);
    print_r($output);

    header("Location: building.php ");


?>

