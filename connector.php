<?php 
    $id = escapeshellarg($_POST["userid"]);
    $name = escapeshellarg($_POST["name"]);
    $cat = escapeshellarg($_POST["usercat"]);
    $password = escapeshellarg($_POST["password"]);

    $output = exec("C:\Users\HP\Desktop\Python\Python311\python.exe signup.py $id $name $cat $password");
    

    echo $output;
    echo "Submitted successfully";
?>