<?php

$con;
$servername = "feenix-mariadb.swin.edu.au";
$usename = "s104170800";
$password = "240204";
$dbname = "s104170800_db";

$con = mysqli_connect($servername, $usename, $password);
mysqli_select_db($con, $dbname);
mysqli_query($con, "SET NAMES 'utf8'");
?>