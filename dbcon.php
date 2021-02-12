<?php
$server="mysql:host=localhost;dbname=daraz";
$username="root";
$password="";
// for checking wrong table name
//pdo setting for exposing errors

// database sy connect hony k lye
$pdo =new PDO($server,$username,$password); 
//$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>