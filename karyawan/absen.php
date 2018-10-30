<?php 

include '../koneksi.php';

// $masuk = $_POST['masuk'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$jab = $_POST['jabatan'];
// $alamat = $_POST['alamat'];


$sql = mysql_query("INSERT INTO `tbl_absensi` (`nik`, `nama`, `jabatan`,`jam_masuk`) VALUES ('$nik', '$nama', '$jab',NOW()) ON DUPLICATE KEY UPDATE nik ='$nik', nama='$nama',jabatan='$jabatan', jam_masuk=NOW() ");
if ($sql) {
	echo "<script>alert('Data Berhasil ditambahkan!'); location.href='index.php';</script>";
}else{
	mysql_error();
}


 ?>