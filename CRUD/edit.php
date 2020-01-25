<?php 
include "koneksi.php";
$id= $_GET['id'];

$data=mysqli_query($koneksi, "SELECT book_tb.id AS id, book_tb.name AS judul, 
	book_tb.publication_year AS tahunrilis, 
	category_tb.name AS kategori, 
	write_tb.write AS penulis 
FROM book_tb
INNER JOIN category_tb
ON book_tb.category_id=category_tb.id
INNER JOIN write_tb
ON book_tb.write_id=write_tb.id
WHERE book_tb.id='$id'");
$d = mysqli_fetch_all($data, MYSQLI_ASSOC);
$data3 = mysqli_query($koneksi, "SELECT * FROM category_tb");
$categori = mysqli_fetch_all($data3, MYSQLI_ASSOC);
$data2 = mysqli_query($koneksi, "SELECT * FROM write_tb");
$write = mysqli_fetch_all($data2, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
</head>
<body>
<table>
	<form method="post" action="aksi_edit.php">
		<tr>
			<td>Judul</td>
			<td>
				<input type="hidden" name="id" value=" <?php echo $d[0]['id']; ?>">
				<input type="text" value=" <?php echo $d[0]['judul'] ?>" name="name">
			</td>
		</tr>
		<tr>
			<td>Tahun rilis</td>
			<td><input type="text" value=" <?php echo $d[0]['tahunrilis']; ?>" name="tr"></td>
		</tr>
		<tr>
			<td>Kategori</td>
			<td>
				<select>
					<?php foreach ($categori as $categori): ?>
						<option><?php echo $categori['name']; ?></option>
					<?php endforeach ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Penulis</td>
			<td><select>
				<?php foreach ($write as $write): ?>
					<option><?php echo $write['write']; ?></option>
				<?php endforeach ?>
			</select></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="edit"></td>
		</tr>
	</form>
</table>
</body>
</html>