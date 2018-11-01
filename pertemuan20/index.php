<?php
session_start();

if (!isset($_SESSION["login"]) )	{
	header("Location:login.php");
	exit;
} 

require'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

//tombol cari di klik,
if (isset($_POST["cari"]) ) {
	$mahasiswa = cari($_POST["keyword"]);
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<style>
		.loader {
			width:100px;
			position: absolute;
			left: 50%;
			top: 50%;
			z-index: -1;
			display: none;
		}
	</style>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/script.js"></script>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<a href="logout.php">Keluar</a>
<br>
<br>

<a href="tambah.php">Tambah Data Mahasiswa</a>
<br><br>
<form action="" method="post">
	
	<input type="text" name="keyword" size="40" autofocus placeholder="masukan keyword pencarian" autocomplete="off" id="keyword">
	<button type="submit" name="cari" id="tombol-cari">Cari !</button>

	<img src="img/loader.gif" class="loader">

</form>
<br><br>
<div id="container">
<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Gambar</th>
		<th>NIM</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Jurusan</th>
	</tr>

	<?php $i =1; ?>
	<?php foreach ($mahasiswa as $row) : ?>
		<tr>
			<td><?= $i; ?></td>
			<td>
				<a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a>
				<a href="hapus.php?id=<?= $row["id"] ?>" onclick="return confirm('YAKIN?');">Hapus</a>
			</td>
			<td><img src="img/<?= $row ["gambar"] ?>"></td>
			<td><?= $row["nim"] ?></td>
			<td><?= $row["nama"] ?></td>
			<td><?= $row["email"] ?></td>
			<td><?= $row["jurusan"] ?></td>
		</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
</table>
</div>


</body>
</html>