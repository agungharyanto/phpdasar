<?php 
//Array Associativ
// definisinya sama seperti array numerik
// keynya dalah string yang kita buat sendiri

$mahasiswa = [
	["gambar" => "spider.jpg",
	"nama" => "Agung Haryanto",
	"nim" => "201581084",
	"email" => "agung.haryantoo@gmail.com",
	"jurusan" => "Teknik Informatika"
	],
	["gambar" => "batman.jpg",
	"nama" => "Haryanto",
	"nim" => "20418841",
	"email" => "haryantoo@gmail.com",
	"jurusan" => "Informatika"
	],
	["gambar" => "hulk.jpg",
	"nama" => "Agung",
	"nim" => "2016880881",
	"email" => "agung.@gmail.com",
	"jurusan" => "Teknik"
	]
]

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Daftar Mahasiswa</title>
 </head>
 <body>
 	
 	<h1>Daftar Mahasiswa</h1>
 	<?php foreach ( $mahasiswa as $mhs ) : ?>
 		<ul>
 			<li>
 				<img src="img/<?= $mhs["gambar"] ?>">
 			</li>
 			<li>Nama : <?= $mhs["nama"]; ?></li>
 			<li>NIM : <?= $mhs["nim"]; ?></li>
 			<li>Jurusan : <?= $mhs["jurusan"]; ?></li>
 			<li>Email : <?= $mhs["email"]; ?></li>
 		</ul>
 	<?php endforeach; ?>

 </body>
 </html>