<? //filename: proses_mtk.php 

include("db.php");

if($_GET['action'] == "add"){
	//2. Query 
	$query = "INSERT INTO matakuliah (kode_mtk, nama_mtk)
			VALUES('$_POST[kode_mtk]', '$_POST[nama_mtk]')";
}

mysqli_query($koneksi, $query);

//Redirect ke template.php
header('Location: template.php?page=matakuliah');