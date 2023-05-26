<?php
include "config/koneksi.php";
$id_pegawai = $_POST ['id_pegawai'];
$nama = $_POST ['nama'];
$penempatan = $_POST [ 'penempatan'];

$ganti = "update pegawai set penempatan='$penempatan', nama='$nama' where id_pegawai='$id_pegawai'";
$update = $mysqli->query($ganti);

if($update) {
	header("location:pegawai.php");
}else{
	echo $ganti;
	echo "gagal mengubah data";
}
?>
<!-- sadsd -->