<?php 
//koneksi ke database
$conn = mysqli_connect("localhost","root","","phpdasar"); //pertama localhost adalah nama server, kedua root adalah user, ketiga "" adalah password, ketiga "phpdasar" adalah nama database pada server tsb, URUTAN JANGAN SAMPAI SALAH

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows [] = $row;
	}
	return $rows;
}

//ambil data dari tabel mahasiswa / query data mahasiswa

// $result = mysqli_query($conn, "SELECT * FROM mahasiswa")
//parameter ada 2, $conn adalah variabel untuk memanggil server, SELECT * FROM adalah sintak MySQL dan mahasiswa adalah isi tabelnya


// cek apakah nama tabel benar
// if (!$result){
// 	echo mysqli_error($conn);
//ambil data dari tabel mahasiswa dari object result

function tambah ($data) {
	global $conn;
	//ambil data dari setiap element
	$nim=htmlspecialchars($data["nim"]);
	$nama=htmlspecialchars($data["nama"]);
	$email=htmlspecialchars($data["email"]);
	$jurusan=htmlspecialchars($data["jurusan"]);
	$gambar=htmlspecialchars($data["gambar"]);

	//query insert data
	$query ="INSERT INTO mahasiswa
				VALUES
				('','$nim','$nama','$email','$jurusan','$gambar') 
			";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
	}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
	return mysqli_affected_rows($conn);
	}



?>