<!DOCTYPE html>
<html>
<head>
	<title>Latihan Array</title>
	<style>
		.kotak {
			width: 60px;
			height: 60px;
			background-color: salmon;
			text-align: center;
			line-height: 60px;
			margin: 10px;
			float: left;
			transition: 1s;
		}
		.kotak:hover	{
			transform: rotate(360deg);
			border-radius: 50%;
		}
		.clear	{
			clear: both;
		}
	</style>
</head>
<body>

	<?php 
	$angka = [
		[1,2,3],	
		[4,5,6],
		[7,8,9]
	]
	 ?>
	 <?php foreach ( $angka as $x )  : ?>
	 	<?php foreach ( $x as $y ) : ?>
	 		<div class="kotak"><?php echo $y; ?></div>
	 	<?php endforeach; ?>
	 	<div class="clear"></div>
	 <?php endforeach; ?>
</body>
</html>