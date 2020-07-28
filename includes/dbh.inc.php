<?php
$servername = "md88.wedos.net";
$dBUsername = "w249084_test";
$dBPassword = "hUaL5eta";
$dBName = "d249084_test";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);
if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}
