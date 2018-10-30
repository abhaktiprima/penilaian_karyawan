<?php
error_reporting(0);

include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];

$login = mysql_query("SELECT * FROM `tbl_karyawan` WHERE nik='$username' and password='$password' ");
$cek = mysql_num_rows($login);
$row = mysql_fetch_array($login);

if ($cek > 0) {
	session_start();
	$_SESSION['username'] = $row['nik'];
	$_SESSION['password'] = $row['password'];
	$_SESSION['level'] 	  = $row['level'];

	if ($row['level'] == "admin") {
		header("location:admin/index.php");
	}elseif($row['level'] == "karyawan"){
		header("location:karyawan/index.php");
	}
}

?>