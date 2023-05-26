<?php
include "config/koneksi.php";
$kode_lokasi = $_POST ['id_lokasi'];
$namalokasi = $_POST ['lokasi'];


$ganti = "update lokasi_aset set lokasi='$namalokasi' where id_lokasi='$kode_lokasi'";
$update = $mysqli->query($ganti);

if($update) {
	header("location:lokasi_aset.php");
}else{
	echo $ganti;
	echo "gagal mengubah data";
}
?>
<!--s dxassdd -->