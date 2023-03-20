<?php 
date_default_timezone_set('Asia/Yangon');
// error_reporting(E_ALL & ~E_NOTICE);
error_reporting(E_ALL ^ E_WARNING); 

$server = "sql306.epizy.com";
$username = "epiz_33837677";
$password = "zarVto0LTLUUIgH";
$dbname = "epiz_33837677_ladylove";

$connect = mysqli_connect($server,$username,$password,$dbname);

if (!$connect) 
{
    echo "connection fail" . mysqli_connect_error($connect);
}; 

?>