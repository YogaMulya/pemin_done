<?php
    include'config/koneksi.php';
$jabatan = $_POST ['jabatan'];
// $posisi = $_POST ['posisi'];
$query = $mysqli->query("INSERT INTO jabatan(jabatan) values ('$jabatan')");

        if ($query) {
    header("location:jabatan_fungsional.php");
} else {
    echo "gagal menambah data";
  }

?>
<!-- dsacda -->