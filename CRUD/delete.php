<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM book_tb WHERE id='$id'");
 
header("Location:index.php");
?>