<!-- 

<?php
    include'config/koneksi.php';
$username = $_POST ['username'];
$password = $_POST ['password'];
$query = $mysqli->query("INSERT INTO admin(username, password ) values ('$username','$password')");

        if ($query) {
    header("location:login.php");
} else {
    echo "gagal menambah data";
  }

?>


