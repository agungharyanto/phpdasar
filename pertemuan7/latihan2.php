<?php 
//cek apakah tidak ada data di $_GET
if (!isset($_GET["nama"]) ||
	!isset($_GET["nim"]) ||
	!isset($_GET["jurusan"]) ||
	!isset($_GET["email"]) ||
	!isset($_GET["gambar"]))
	 {
	//redirect
	header("Location:latihan1.php");
	exit;
}
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Detail Mahasiwa</title>
</head>
<body>

	<ul>
		<li>
			<img src="img/<?= $_GET["gambar"]; ?>">
		</li>
		<li><?= $_GET["nama"]; //"nama" karna di page latihan1.php adalah nama ?></li>
		<li><?= $_GET["nim"];  ?></li> 
		<li><?= $_GET["jurusan"]; ?></li>
		<li><?= $_GET["email"]; ?></li>
	</ul>

<a href="latihan1.php">Kembali Ke Daftar Mahasiswa</a>

</body>
</html>