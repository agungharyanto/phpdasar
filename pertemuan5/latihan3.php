<?php 
//Array Numeric
$mahasiswa=[
	["Agung Haryanto","201581084","Teknik Informatika","agung.haryantoo@gmail.com"],
	["Haryanto Agung","19930322","Teknik Informatika","haryantoo@gmail.com"],
	["Haryanto","12038184","Teknik Informatika","haryantoo@gmail.com"]
];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Daftar Mahasiswa</title>
 </head>
 <body>
 
	<h1>Daftar Mahasiswa</h1>

		<?php foreach ($mahasiswa as $mhs)  : ?>
			<ul>
				<li>Nama : <?= $mhs[0]; ?></li>
				<li>NIM : <?= $mhs[1]; ?></li>
				<li>Jurusan : <?= $mhs[2]; ?></li>
				<li>Email : <?= $mhs[3]; ?></li>
			</ul>
		<?php endforeach; ?>

 </body>
 </html>