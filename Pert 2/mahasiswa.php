<?php //filename: mahasiswa.php
// 1. koneksi
include("db.php");

// 2. query
$query = "SELECT * FROM mahasiswa";
$hasil = mysqli_query($koneksi, $query);
?>

<h1>Data Mahasiswa</h1>
<a href="template.php?page=formmahasiswa&action=add">Tambah Data</a>
<table>
	<thead>
		<tr>
			<th>No.</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Jurusan</th>
			<th>Action</th>
		</tr>
	</thead>
<tbody>
	<?php
	while($row = mysqli_fetch_assoc($hasil)){
		?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['NIM']; ?></td>
			<td><?php echo $row['Nama']; ?></td>
			<td><?php echo $row['Jurusan']; ?></td>
			<td>
				<a href="template.php?page=formmahasiswa&id=<?php echo $row['id']; ?>&action=edit">Edit</a>
				<a href="prosesmahasiswa.php?action=delete&id=<?php echo $row['id']; ?>">Delete</a>
			</td>
		</tr>
		<?php
		}
		?>
	</tbody>
</table>