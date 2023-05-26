<!DOCTYPE html>
<html>
        <meta charset="UTF-8">
        <title> User </title>

        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
   <head>

 </head>
<?php 

$user = mysql_query("SELECT * FROM user") or die(mysql_error());
?>
		<div id="contents3">
			<center>
				<div id="items">
					<h1>USER</h1>
				<div class="row">
					<?php
					while ($row_user = mysql_fetch_array($user))
					    {
					  ?>
						<ul>
							<li><a href="">Username : <?php echo $row_user['username']; ?></a></li>
							<li><a href="">posisi : <?php echo $row_user['posisi']; ?></li>
							<!-- <li> <a href="" class="btn btn-danger">Pinjam</a></li> -->
						</ul>
					<?php
						 }
					?>
				</div>
					</ul>
				</div>
				</center>
		</div>
		<<?php require_once "templates/footer.php" ?>