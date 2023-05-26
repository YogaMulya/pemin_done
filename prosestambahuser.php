<?php
    include'config/koneksi.php';
$username = $_POST ['username'];
$posisi = $_POST ['posisi'];
$query = $mysqli->query("INSERT INTO user(username, posisi) values ('$username','$posisi')");

        if ($query) {
    header("location:user.php");
} else {
    echo "gagal menambah data";
  }

?>
<!-- dsada -->