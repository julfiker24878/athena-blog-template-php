<?php 

$hostname = "localhost";
$db_username = "debian-sys-maint";
$db_password = "8UiycdeOGyDtO2Tv";
$db_name = "athena";

$db_connect = mysqli_connect($hostname, $db_username, $db_password, $db_name) or die("Connection Failed!!!");