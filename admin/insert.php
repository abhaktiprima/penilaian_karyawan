<?php 

include '../koneksi.php';

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$jab = $_POST['jabatan'];
$alamat = $_POST['alamat'];


$sql = mysql_query("INSERT INTO `tbl_pegawai` (`nik`, `nama`, `jabatan`, `alamat`) VALUES ('$nik', '$nama', '$jab', '$alamat')");
if ($sql) {
	echo "<script>alert('Data Berhasil ditambahkan!'); location.href='form-insert.php';</script>";
}


 ?>