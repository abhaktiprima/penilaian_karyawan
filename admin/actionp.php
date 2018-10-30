<?php 

include '../koneksi.php';

if (isset($_POST['go'])) {
	

$nik = $_POST['nik'];
$absensi = $_POST['absensi'];
$sikap = $_POST['sikap'];
$teamwork = $_POST['team'];
$tg 	  = $_POST['tg'];
$rata 	  = 0.3*$nik+0.2*$sikap+0.3*$teamwork+0.2*$tg;

$cek = mysql_query("SELECT * FROM tbl_penilaian");
while ($c = mysql_fetch_array($cek)) {
	$n = $c['nik'];
	if ($nik == $n) {
		$sql = mysql_query("UPDATE tbl_penilaian SET absensi='$absensi',sikap='$sikap',teamwork='$teamwork',tg_jawab='$tg',$advance='$rata' WHERE nik='$nik' ");
}else{

		$sql = mysql_query("INSERT INTO `tbl_penilaian` (`nik`, `absensi`, `sikap`, `teamwork`, `tg_jawab`, `advance`) VALUES ('$nik', '$absensi', '$sikap', '$teamwork', '$tg', '$rata')");
		echo "INSERT INTO `tbl_penilaian` (`nik`, `absensi`, `sikap`, `teamwork`, `tg_jawab`, `advance`) VALUES ('$nik', '$absensi', '$sikap', '$teamwork', '$tg', '$rata')";
	if ($sql) {
	echo "<script>alert('Data Berhasil ditambahkan!'); location.href='penilaian.php';</script>";
	}else{
	mysql_error();
	}
}
}

}

 ?>