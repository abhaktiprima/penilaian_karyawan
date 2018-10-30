<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "p_karyawan";

$conn = mysql_connect($host,$user,$pass);
if(!$conn)
				die ("Gagal koneksi karena ".mysql_error());
				
	$dbKon = mysql_select_db($dbname, $conn);
	
	if(!$dbKon) 
				die ("Gagal membuka database $dbname karena".mysql_error());
?>