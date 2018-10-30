<?php 

include '../koneksi.php';

// $masuk = $_POST['masuk'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$jab = $_POST['jabatan'];
// $alamat = $_POST['alamat'];

$cek = mysql_query("SELECT * FROM tbl_absensi");
while ($c = mysql_fetch_array($cek)) {
	$n = $c['nik'];

if ($nik == $n) {
	$sql = mysql_query("UPDATE `tbl_absensi` SET `jam_pulang`=NOW() where nik = $nik");
if ($sql) {
	echo "<script>alert('Data Berhasil ditambahkan!'); location.href='absen_pulang.php';</script>";
}else{
	mysql_error();
}
}
echo "<script>alert('Data Tidak Berhasil ditambahkan!'); location.href='absen_pulang.php';</script>";
}

 ?>