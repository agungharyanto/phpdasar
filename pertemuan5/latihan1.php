<?php 
//Array
//variable yang dapat memiliki banyak nilai
//element pada array boleh memiliki tipe data berbeda
//pasangan antara key dan value
//key-nya adalah index, yang dimulai dari 0


//membuat array
//cara lama
$hari = array ("Senin","Selasa","Rabu"); //penulisan array cara lama

//cara baru
$bulan = ["Januari","Februari","Maret"];
$arr1=[123,"tulisan",false];

//menampilkan array
//var_dump() / print_r()

var_dump($hari); 
echo "<br>";
print_r($bulan);

//menampilkan 1 element Array
echo "<br>";
echo $arr1[0]; //0 adalah index dari si array, jadi dia cuma menampilkan isi dari index ke 0
echo "<br>";

// menambahkan element 1 pada array yang sudah ada
var_dump($hari);
$hari[]="Kamis";
echo "<br>";
var_dump($hari);

 ?>