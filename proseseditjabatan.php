<?php
include "config/koneksi.php";
$id_jabat = $_POST ['id_jabat'];
$jabatan = $_POST ['jabatan'];
// $posisi = $_POST [ 'posisi'];

$ganti = "update jabatan set jabatan='$jabatan' where id_jabat='$id_jabat'";
$update = $mysqli->query($ganti);

if($update) {
	header("location:jabatan_fungsional.php");
}else{
	echo $ganti;
	echo "gagal mengubah data";
}
?>
<!-- dxasdd -->