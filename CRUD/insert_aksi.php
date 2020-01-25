<?php 
include ("koneksi.php");

$judul = $_POST['judul'];
$tahunrilis = $_POST['tr'];
$kategori = $_POST['categori'];
$penulis = $_POST['penulis'];
mysqli_query($koneksi, "INSERT INTO book_tb VALUES ('', '$judul', '$tahunrilis', '$kategori', '$penulis')");

header("Location: index.php");


 ?>