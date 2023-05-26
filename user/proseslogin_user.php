<?php
   session_start();
   require_once("../config/koneksi.php");
   $username = $_POST['username'];
   $password = $_POST['password'];

   $query = $mysqli->query("SELECT * FROM user WHERE username='$username' AND password='$password'");
	if(mysqli_num_rows($query) == 0){
		echo '<div class="alert alert-danger">Maaf Login gagal.</div>';
	}else{
		$row = mysqli_fetch_assoc($query);

		if($row){
			$_SESSION['user'] = $username;
			$_SESSION['id_user'] = $row['id_user'];
			header("Location:index.php");
		}
	}
?>