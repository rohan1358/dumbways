<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cara Mencari Bilangan Array Terbesar Dengan PHP</title>
</head>
<body>
<?php
$data = ['a', 'b','c', 'd', 'e','f'];
echo data($data);
function data($data){
	// echo implode(' ', $data);
	// echo "<br/>";
	 $nilai = $data;         
	 // echo min($nilai).'/'.max($nilai);
}

for ($j=0; $j < count($data) ; $j++) { 
	if ($j%2==0) {
		$angka[] = $j;
	}

}

$aa = max($angka);
// echo $data[$aa];

$data = ['h', 'g', 'y', 'a', 'b','c', 'd', 'e','f'];

for ($i=0; $i <count($data) ; $i++) { 
	// echo $i; // 012345678
	// echo $data[$i]; // hgabcdef

	if($data[$i] == 'a'){
		$indexnya = $i;
	}
}

for ($j=0; $j <count($data) ; $j++) { 
	//012345678
	if($j < $indexnya) {
		unset($data[$j]);
	}
}


// print_r($data
echo '['.min($data).','.max($data).']';


?>
</body>
</html>