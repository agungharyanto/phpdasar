<?php 

date_default_timezone_set('Asia/Jakarta');

function salam()	{
	$waktu=date("H:i:s");
		if ($waktu >= "04:00:00" && $waktu < "12:00:00") {
	 	echo "Selamat Pagi";
		} else
	 	if ($waktu >= "12:00:00" && $waktu < "16:00:00"){
	 	echo "Selamat Siang";
		} else 
		 if ($waktu >= "16:00:00" && $waktu < "20:00:00") {
	        echo "Selamat Sore";
		} else
	    if ($waktu >= "20:00:00" && $waktu < "04:00:00" ) {
	        echo "Selamat Malam";
	 	}
}

?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan Function</title>
 </head>
 <body>
 	<h1><?php echo salam(); echo " Agung" ?></h1>
 </body>
 </html>