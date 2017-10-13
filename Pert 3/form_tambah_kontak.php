<?php // filename: form_tambah_kontak.php

include("koneksi.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Phone Book</title>
</head>
<body>
<h1>Phone Book</h1>
<div id="menu">
	<ul>
		<li><a href="index.php">Kontak</a></li>
		<li><a href="kategori.php">Kategori</a></li>
	</ul>
</div>
<div id="konten">
	<h2>Tambah Kontak</h2>
	<?php
	$q = "SELECT * FROM kategori";
	$hasil = mysqli_query($db, $q);
	?>
	<form action="proses_Tambah_kontak.php" method="post">
		Nama:
		<input type="text" name="nama" />
		<br />
		Phone:
		<input type="text" name="phone" />
		<br />
		Email:
		<input type="text" name="email" />
		<br />
		Kategori:
		<select name="kategori">
			<?php while($row = mysqli_fetch_array($hasil)); ?>
			<option value="<?php echo $row[0]; ?>"> <?php echo $row[1]; ?></option>
		</select>
		<br />
		<input type="submit" value="Simpan" />
	</form>
</div>
</body>
</html>