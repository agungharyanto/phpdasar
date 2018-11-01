<?php 
//$_GET

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
	<title>GET</title>
</head>
<body>

	<h1>Daftar Mahasiswa</h1>
	<ul>
		<?php foreach ( $mahasiswa as $mhs ) : ?>
			<li>
				<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
			</li>

		<?php endforeach; ?>
	</ul>

</body>
</html>