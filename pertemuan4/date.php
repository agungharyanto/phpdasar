<?php 
	//DATE
	date_default_timezone_set('Asia/Jakarta');
	echo date("l, H:i:s, d-M-Y");
	echo "<br>";
	//TIME
	//Unix Time;
	echo time();
	echo "<br>";
	echo date("l, d - M - Y", time()+60*60*24*100);
	//diatas adlah mencari tahu 100 hari kedepan tanggal, bulan, berapa
	echo "<br>";
	//mktime membuat sendiri detik
	//mktime memliki 6 format (0,0,0,0,0,0)
	//jam, menit, detik, bulan, tanggal, tahun
	echo mktime(0,0,0,3,22,1993); //detik yang sudah berlalu dari awal lahir
	echo "<br>";
	echo date("l, d - M - Y", mktime(0,0,0,3,22,1993))


?>