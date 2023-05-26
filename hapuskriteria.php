<?php
include 'config/koneksi.php';
$id_kriteria= $_GET['id'];
$hapus = $mysqli->query("DELETE FROM kriteria WHERE id_kriteria=$id_kriteria");
if($hapus){
	header("location:data_kriteria.php");
}else{
	echo"gagal menghapus data";
}
?>
<!-- sxsssafad -->