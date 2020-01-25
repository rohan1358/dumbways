<?php 
include ("koneksi.php");

$id = $_POST['id'];
$judul = $_POST['judul'];
$tahunrilis = $_POST['tr'];
$kategori = $_POST['kategori'];
$penulis = $_POST['penulis'];
mysqli_query($koneksi, "UPDATE book_tb SET
 name='$judul', 
 publication_year='$tahunrilis', 
 categori_id='$kategori', 
 write_id='$penulis' 
 where id='$id'");
header("Location: index.php");


 ?>