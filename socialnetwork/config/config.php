<?php 
ob_start();
session_start();

$timezome = date_default_timezone_set("Europe/Minsk");

$con = mysqli_connect("localhost", "", "", "SOCIALNETWORK999");

if(mysqli_connect_errno()) {

echo "Failed to connect" . mysqli_connect_errno();

} 
?>
