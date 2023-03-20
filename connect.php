<?php 
date_default_timezone_set('Asia/Yangon');
// error_reporting(E_ALL & ~E_NOTICE);
error_reporting(E_ALL ^ E_WARNING); 

$connect = mysqli_connect("localhost","root","","ladylove");

if (!$connect) 
{
    echo "connection fail" . mysqli_connect_error($connect);
}; 

?>