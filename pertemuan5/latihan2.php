<?php 
//Pengulangan pada Array
//for, foreach
$angka=[3,2,5,6,8,9,10];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>latihan 2</title>
 	<style type="text/css">
 		.kotak	{
 			width: 50px;
 			height: 50px;
 			background-color: salmon;
 			text-align: center;
 			line-height: 50px;
 			margin: 3px;
 			float: left;
 		}
 		.clear {clear: both;}
 	</style>
 </head>
 <body>
 <?php //ini untuk penggunaan for ?>
 <?php for ($i = 0; $i < count($angka); $i++) { //count($angka) untuk menghitung sendiri pengulangannya, tujuannya kalo isi si array nambah gak perlu edit pengulangannya?> 
 <div class="kotak"><?php echo $angka[$i]; ?></div>
 <?php } ?>
<div class="clear"></div>

<?php //ini untul penggunaan foreach ?>

<?php foreach (	$angka as $a ) {  //as digunakan untuk mengganti variable baru, jika menggunakan foreach variable array harus diganti, nah diatas diganti pake variable baru (a) ?>
	<div class="kotak"><?php echo $a; ?></div>
<?php } ?>

<div class="clear"></div>
<?php foreach ($angka as $a) : ?>
	<div class="kotak"><?= $a //<?= adalah sama dengan <?php echo, bisa digunakan jika ingin mengampilkan value saja, dan untuk mempersingkat?></div>
<?php endforeach ?>

 </body>
 </html>