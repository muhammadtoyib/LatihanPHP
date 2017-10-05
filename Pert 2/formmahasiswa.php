<?php
if($_GET['action'] =="edit"){
	echo "<h1>Edit Mahasiswa</h1>";
	include("db.php");
	$query = "SELECT * FROM mahasiwa
			WHERE id = $_GET[id]";
	$hasil = mysqli_query($koneksi, $query);
	$row = mysqli_fetch_assoc($hasil);
}else{
	echo "<h1>Add Mahasiswa</h1>";
	$row['NIM'] = "";
	$row['Nama'] = "";
	$row['Jurusan'] = "";
	$row['id'] = "";
}
?>
<form action="prosesmahasiswa.php?action=<?php echo $GET['action']; ?>" method="post">
	NIM: 
	<input type="text" name="nim" value="<?php echo $row['NIM']; ?>" />
	<br />
	Nama: 
	<input type="text" name="nama" value="<?php echo $row['Nama']; ?>" />
	<br />
	Jurusan: 
	<input type="text" name="jurusan" value="<?php echo $row['Jurusan']; ?>" />
	<br />
	<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
	<input type="submit" name="submit" />
</form>