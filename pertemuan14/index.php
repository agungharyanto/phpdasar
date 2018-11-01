<?php 

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
	<link rel="stylesheet" href="../../weeklyreport/css/st.css" type="text/css" />
</head>
<body>

<header>
		<h1 class="judul">Daftar Mahasiswa</h1>
	</header>

<a href="tambah.php">Tambah Data Mahasiswa</a>
<br><br>
<form action="" method="post">
	
	<input type="text" name="keyword" size="40" autofocus placeholder="masukan keyword pencarian" autocomplete="off">
	<button type="submit" name="cari">Cari !</button>

</form>
<br><br>
<table border="1" cellpadding="10" cellspacing="0">
	<tr class="table-head">
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
	<tr class="table-body">
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
</body>
</html>