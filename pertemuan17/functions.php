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


	// upload gambar
	$gambar = upload();
	if (!$gambar)	{
		return false;
	}



	//query insert data
	$query ="INSERT INTO mahasiswa
				VALUES
				('','$nim','$nama','$email','$jurusan','$gambar') 
			";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
	}

function upload ()	{

	$namaFile	=	$_FILES['gambar']['name'];
	$ukuranFile	=	$_FILES['gambar']['size'];
	$error 		=	$_FILES['gambar']['error'];
	$tmpName	=	$_FILES['gambar']['tmp_name'];

	// cek apakah tidak ada gambar diupload
	if ($error === 4)	{
		echo "<script>
				alert ('Pilih gambar terlebih dahulu!');
			  </script>";
		return false;
	}

	// cek apakah yang diupload adalah benar gambar
	$extensiGambarValid	=	['jpg','jpeg','png'];
	$extensiGambar 	=	explode('.', $namaFile);
	$extensiGambar  =	strtolower(end($extensiGambar));
	//membandingkan ada gak string di sebuah file 
	if ( !in_array($extensiGambar, $extensiGambarValid) )	{
		echo "<script>
				alert ('File gambar salah!');
			  </script>";
		return false;
	}
	
	//1.000.000 sama dengan 1MB
	// cek jika ukurannya terlalu besar (bisa di php.ini dirubah)
	if ($ukuranFile	>	1000000) { 
		echo "<script>
				alert ('Ukuran gambar terlalu besar');
			  </script>";
		return false;
	}

	// kalo semua lolos seleksi proses upload

	//generate nama baru biar file namanya beda beda
	$namaFileBaru	=	uniqid();
	$namaFileBaru	.=	'.';
	$namaFileBaru	.=	$extensiGambar;

	move_uploaded_file($tmpName, 'img/' . $namaFileBaru); 
	return $namaFileBaru;

}



function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
	return mysqli_affected_rows($conn);
	}

function ubah ($data) {
	global $conn;
		//ambil data dari setiap element
	$id=$data["id"];
	$nim=htmlspecialchars($data["nim"]);
	$nama=htmlspecialchars($data["nama"]);
	$email=htmlspecialchars($data["email"]);
	$jurusan=htmlspecialchars($data["jurusan"]);

	$gambarLama=($data["gambarLama"]);

	//cek apakah user pilih gambar baru atau tidak
	if ($_FILES['gambar']['error'] === 4) {
		$gambar=$gambarLama;
	} else {
		$gambar=upload();
	}

	

	//query insert data
	$query ="UPDATE mahasiswa SET 
			nim = '$nim',
			nama = '$nama',
			email = '$email',
			jurusan = '$jurusan',
			gambar = '$gambar'
			WHERE id = $id;
			";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}

function cari ($keyword) {
	//global $conn;
	$query = "SELECT * FROM mahasiswa
				WHERE 
				nim LIKE '%$keyword%' OR
				nama LIKE '%$keyword%' OR
				email LIKE '%$keyword%' OR
				jurusan LIKE '%$keyword%' 
				"; 
	return query ($query);
}

function registrasi ($data)	{
	global $conn;

	$username	= strtolower(stripcslashes($data["username"])); //stipclashes untuk membersihkan slas (/)
	$password	= mysqli_real_escape_string($conn, $data["password"]);
	$password2	= mysqli_real_escape_string($conn, $data["password2"]);

	// cek username sudah ada apa belum
	$result=mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
	if (mysqli_fetch_assoc($result) ) {
		echo 	"<script>
					alert('username sudah terdaftar!')
				</script>";
		return false;
	}

	// cek konfirmasi password sama enggak
	if ($password !== $password2) {
	  	echo "<script>
	  			alert('konfirmasi password tidak sesuai!');
	  		 </script>";
	  	return false;
	  }  

	  //enkripsi password
	  $password = password_hash($password, PASSWORD_DEFAULT);

	  // tambahkan userbaru ke database
	  mysqli_query($conn, "INSERT INTO user VALUES ('','$username','$password')");

	  return mysqli_affected_rows($conn);

}


?>