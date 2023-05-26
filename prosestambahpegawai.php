<?php
    include'config/koneksi.php';
$nama = $_POST ['nama'];
$penempatan = $_POST ['penempatan'];
$query = $mysqli->query("INSERT INTO pegawai(nama, penempatan) values ('$nama','$penempatan')");

        if ($query) {
    header("location:pegawai.php");
} else {
    echo "gagal menambah data";
  }

?>
<!-- dsada -->
