<?php 
//koneksi ke database
$conn = mysqli_connect("localhost","root","","phpdasar"); //pertama localhost adalah nama server, kedua root adalah user, ketiga "" adalah password, ketiga "phpdasar" adalah nama database pada server tsb, URUTAN JANGAN SAMPAI SALAH

//ambil data dari tabel mahasiswa / query data mahasiswa

$result = mysqli_query($conn, "SELECT * FROM mahasiswa")
//parameter ada 2, $conn adalah variabel untuk memanggil server, SELECT * FROM adalah sintak MySQL dan mahasiswa adalah isi tabelnya


// cek apakah nama tabel benar
// if (!$result){
// 	echo mysqli_error($conn);
//ambil data dari tabel mahasiswa dari object result

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

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
	<?php while ($row = mysqli_fetch_assoc($result)) : ?>
		<tr>
			<td><?= $i; ?></td>
			<td>
				<a href="#">Ubah</a>
				<a href="#">Hapus</a>
			</td>
			<td><img src="img/<?= $row ["gambar"] ?>"></td>
			<td><?= $row["nim"] ?></td>
			<td><?= $row["nama"] ?></td>
			<td><?= $row["email"] ?></td>
			<td><?= $row["jurusan"] ?></td>
		</tr>
	<?php $i++; ?>
	<?php endwhile; ?>
</table>
</body>
</html>