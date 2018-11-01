<!DOCTYPE html>
<html>
<head>
	<title>LATIHAN 1</title>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0">
	<?php 
	for ($k=1; $k<=5;$k++){
		echo "<tr>";
		for ($l=1; $l<=5; $l++){ 
			echo "<td>$k,$l</td>";
		}
		echo "</tr>";

	}
	?>
<?php for ( $m = 3; $m <=6; $m++ ) : //titik dua adalah pengganti kurung kurawal { ?>
	<tr>
		<?php for ($n = 3; $n <=7; $n++) : //titik dua ini juga sama ?>
			<td><?php echo "$m,$n"; ?></td>
		<?php endfor; //endfor ini juga sama ?>
	</tr>


<?php endfor; //endfor adalah penutup sebagai pengganti } ?>

</table>


</body>
</html>



<?php 

//pengulangan
//for
//while
//do.. while
//foreach : pengulangan khusus array

for ( $a = 0; $a < 5; $a++ ) {
	echo "Hello World! FOR <br>";
}

$i = 0;
while ( $i < 5 ) {
	echo "Hello World! while <br>";
$i++;
}


$x=0;
do {
	echo "Hello World! DO WHILE <br>";
	$x++;
} while ( $x < 5 );

 ?>