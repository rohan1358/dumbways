<?php 
$burung = 6969;
$harisekalilahir = 21;
$totalmati = 11.1;
$total441hari = 441;
$totalburung= 0;

for ($i=1; $i <= $total441hari/$harisekalilahir ; $i++) { 
	$x = $burung * $totalmati / 100;
	$y = $burung - $x;
	$burung = $y*2;
	$totalburung += $burung;
}
echo $burung;



// $burung = 6969;
// $totalharipersekalilahir = 21;
// $totalmatisebelumlahir = 11.1;
// $jumlahtotalharilahir441hari = 441;

// $burungmati = $burung * $totalmatisebelumlahir / 100;
// $burunglahir = $burung - $burungmati;
// // echo "$burunglahir";
// $berapakalilahir = $jumlahtotalharilahir441hari / $totalharipersekalilahir;
// // echo "$berapakalilahir";
// $total = $burunglahir * $berapakalilahir;
// echo "$total";
 ?>