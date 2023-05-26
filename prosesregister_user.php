<!-- 

<?php
    include'config/koneksi.php';
$username = $_POST ['username'];
$password = $_POST ['password'];
$posisi = $_POST ['posisi'];
$query = $mysqli->query("INSERT INTO user(username, password, posisi ) values ('$username','$password','$posisi')");

        if ($query) {
    header("location:user/login_user.php");
} else {
    echo "gagal menambah data";
  }

?>


