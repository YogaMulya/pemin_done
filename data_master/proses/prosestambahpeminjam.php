<?php
    include'config/koneksi.php';
$username = $_POST ['username'];
$password = $_POST ['password'];
$posisi = $_POST['posisi'] . '-' . $_POST['jurusan'] . '-' . $_POST['no'];
$query = $mysqli->query("INSERT INTO user(nama, password, posisi ) values ('$username','$password', '$posisi')");

        if ($query) {
    header("location:peminjam.php");
} else {
    echo "gagal menambah data";
  }

?>
