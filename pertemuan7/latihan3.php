<!DOCTYPE html>
<html>
<head>
	<title>POST</title>
</head>
<body>
 
 <?php if ( isset($_POST["submit"])) : //submit adalah, si tombol submit udah pernah di pencet apa belum, kalo belum muncul hanya halo selamat datang tok, kalo isi username dan klik submit, akan keluar selamat datang username?>
	<h1>Halo Selamat Datang, <?= $_POST["nama"]; ?></h1>
<?php endif; ?>

<form method="post"> <?php // action latihan4.php data akan dikirim ke latihan4, tapi kalo action kosong masuk nilai default yaitu masuk dirinya sendiri?>
	Masukan Nama :
	<input type="text" name="nama">
	<br>
	Masukan Password :
	<input type="password" name="password">
	<button type="submit" name="submit">Kirim!</button>

</form>

</body>
</html>