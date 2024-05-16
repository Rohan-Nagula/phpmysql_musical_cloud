<?php

$dbhost = "localhost";
$dbuser = "rohan";
$dbpass = "Nagula@135416";
$dbname = "musical_cloud";
$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$con)
{

	die("failed to connect!");
}