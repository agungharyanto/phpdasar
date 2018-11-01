<?php 

// Pertemuan 2 - PHP Dasar
// Sintaks PHP


// Standar Output
// echo, print
// print_r
// var_dump

echo "Agung Hayanto";
print "Agung Lagi";
print_r("Agung Agung");
var_dump("Agung Lagi Agung Lagi");
echo true;

//penulisan sintaks PHP
// 1. PHP didalam HTML
// 2. HTML didalam PHP

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Halo Selamat Datang <?php echo "AGUNG Hayanto"; //1. PHP didalam HTML?></h1>
</body>
</html>

<?php 
//variable dan tipe data
//variable tidak boleh diawali dengan angka, tapi boleh mengandung angka
 $nama	= "AgungDong";
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 		<h1>Halo Selamat Datang <?php echo $nama; //variable ?></h1>
 </body>
 </html>

 <?php 
 //Operator
 //Aritmatika (+,-,/,*,%)
 //Penggabung String / concatenation / concat 
 echo 1+1;
 echo "ganti baris  <br>";
 //atau
 $x=5;
 $y=10;
 echo $x * $y;

 ?>
 <?php 
//penggabung string / concat

$nama_depan="Agung";
$nama_belakang="Haryanto";
echo $nama_belakang . "" . $nama_depan;
echo "<br>";
  ?>
  <?php 
//Operator Perbandingan
// <,>,<=,>=,==,!=
  var_dump(1 < 5);
echo "<br>";
   ?>
<?php 
//Operator Identitas
// ===, !==
// cek tipe data
var_dump(1==="1");
echo "<br>";
 ?>
<?php 
//Operator Logika
//&&,||,!
$x = 10;
var_dump($x < 20 && $x %2 == 0);
// $x %2 == 0 penjelasannya nilai x habis dibagi 2
 ?>