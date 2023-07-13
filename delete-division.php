<?php
$_id = escapeshellarg($_POST["updateid"]);
// echo $_id;
exec("C:\Users\HP\Desktop\Python\Python311\python.exe python/delete-division.py $_id",$output,$result);

header("Location: division.php");
?>