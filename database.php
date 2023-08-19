<?php 
$hostName = "localhost";
$dbUser ="root";
$dbpassword = "";
$dbName ="loginregistationphp";
$conn = mysqli_connect($hostName, $dbUser,$dbpassword,$dbName);
if(!$conn) {
    die("Something went worng");
}
?>