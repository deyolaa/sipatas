<?php
	error_reporting(0);

	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "sipatas";

$con = mysqli_connect($host, $user, $pass, $db);

    if(!$con){
	die("koneksi gagal");
    } 
 ?>