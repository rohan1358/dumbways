<?php 
$cetak = 'dumbways';
$pecah = str_split($cetak);
$hitung = count($pecah);
for ($i=0; $i<$hitung; $i++) {
	for ($j=0; $j < $i ; $j++) { 
		echo "&nbsp";
	}
	echo "$pecah[$i]";
	echo "<br/>";
}
 ?>