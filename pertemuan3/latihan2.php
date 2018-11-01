<?php 
//Pengkondisian
//if else
//if else if else
//ternary
//switch

$a=10;
if ($a < 20) {
	echo "benar if";
}
 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>LATIHAN 1</title>
	<style>
		.warna-baris{
			background-color: silver;
		}
		.warna-dasar{
			background-color: salmon;
		}
	</style>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0" class="warna-dasar">
<?php for ( $m = 1; $m <=5; $m++ ) : //titik dua adalah pengganti kurung kurawal { ?>
	<?php if ( $m %2 == 1 ) : // kalo nilai m habis dibagi 1 (ganjil) maka diwarnai salmon?>
		<tr class="warna-baris">
	<?php else : ?>
		<tr>
	<?php endif; ?>
		<?php for ($n = 1; $n <=5; $n++) : //titik dua ini juga sama ?>
			<?php if ( $n %2 == 1 ) : // kalo nilai n habis dibagi 1 (ganjil) maka diwarnai salmon?> 
					<td class="warna-baris">
				<?php else : ?>
					<td>
				<?php endif; ?>
			<?php echo "$m,$n"; ?>
		<?php endfor; //endfor ini juga sama ?>
	</tr>


<?php endfor; //endfor adalah penutup sebagai pengganti } ?>

</table>


</body>
</html>