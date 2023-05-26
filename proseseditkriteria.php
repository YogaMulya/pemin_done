<?php
include "config/koneksi.php";
$kode_krite = $_POST ['id_kriteria'];
$nama_kriteria = $_POST ['kriteria_tbl'];
$nilai_kriteria =$_POST['nilai'];


$ganti = "update kriteria set kriteria_tbl='$nama_kriteria', nilai='$nilai_kriteria' where id_kriteria='$kode_krite'";
$update = $mysqli->query($ganti);

if($update) {
	header("location:data_kriteria.php");
}else{
	echo $ganti;
	echo "gagal mengubah data";
}
?>
<!--sss dxaaassdd -->