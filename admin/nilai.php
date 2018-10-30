<?php 

include '../koneksi.php';

$nik = $_POST['nik'];
$absensi = $_POST['absensi'];
$sikap = $_POST['sikap'];
$teamwork = $_POST['team'];
$tg 	  = $_POST['tg'];
$rata 	  = 0.3*$absensi+0.2*$sikap+0.3*$teamwork+0.2*$tg;

$cek = mysql_query("SELECT * FROM tbl_penilaian");
while ($row = mysql_fetch_array($cek)) {
	$n = $row['nik'];
	if ($nik == $n) {
		$sql = mysql_query("UPDATE tbl_penilaian SET absensi='$absensi',sikap='$sikap',teamwork='$teamwork',tg_jawab='$tg',advance='$rata' WHERE nik='$nik' ");
		echo "<script>alert('Data Berhasil diupdate! $rata '); location.href='penilaian.php';</script>";
	}else{
		$sql = mysql_query("INSERT INTO `tbl_penilaian` (`tgl_update`,`nik`, `absensi`, `sikap`, `teamwork`, `tg_jawab`, `advance`) VALUES (NOW(),'$nik', '$absensi', '$sikap', '$teamwork', '$tg', '$rata') ON DUPLICATE KEY UPDATE nik='$nik' and absensi='$absensi' and sikap='$sikap' and teamwork='$teamwork' and tg_jawab='$tg' and advance='$rata'  ");
	if ($sql) {
	echo "<script>alert('Data Berhasil ditambahkan! $rata'); location.href='penilaian.php';</script>";
	}else{
	mysql_error();
	}
	}
}
	mysql_close();
		




 ?>