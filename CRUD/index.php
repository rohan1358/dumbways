<?php 
include "koneksi.php";
$query = mysqli_query($koneksi, "SELECT book_tb.id AS id, book_tb.name AS judul, book_tb.publication_year AS tahunrilis, category_tb.name AS kategori, write_tb.write AS penulis 
FROM book_tb
INNER JOIN category_tb
ON book_tb.category_id=category_tb.id
INNER JOIN write_tb
ON book_tb.write_id=write_tb.id");
$data = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
	<title>crud</title>
</head>
<body>
	<a href="insert.php">tambah data</a>
	<table border="1px">
		<tr>
			<th>no</th>
			<th>judul</th>
			<th>tahun rilis</th>
			<th>kategori</th>
			<th>penulis</th>
		</tr>
		<?php 
		$no=1;
		foreach ($data as $key) : $no++ ?>
		<tr>
			<td><?php echo $no ?></td>
			<td><?php echo $key['judul']; ?></td>
			<td><?php echo $key['tahunrilis']; ?></td>
			<td><?php echo $key['kategori']; ?></td>
			<td><?php echo $key['penulis']; ?></td>
			<td><a href="edit.php?id=<?php echo $key['id'] ?>">edit</a>|<a href="delete.php?id=<?php echo $key['id'] ?>">hapus</a></td>
		</tr>
	<?php endforeach; ?>
	</table>

</body>
</html>