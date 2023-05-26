<?php
include "config/koneksi.php";
$kode_satuan = $_POST ['id_satuan'];
$nama_satuan = $_POST ['satuan'];


$ganti = "update satuan set satuan='$nama_satuan' where id_satuan='$kode_satuan'";
$update = $mysqli->query($ganti);

if($update) {
	header("location:satuan.php");
}else{
	echo $ganti;
	echo "gagal mengubah data";
}
?>
<!--sss dxassdd -->