<? //filename: prosesmahasiswa.php 

include("db.php");

if($_GET['action'] == "add"){
	//2. Query 
	$query = "INSERT INTO mahasiswa (NIM, Nama, Jurusan)
			VALUES('$_POST[NIM]', '$_POST[Nama]', '$_POST[Jurusan]')";
}else if($_GET['action'] == 'edit'){
	//2. Query 
	$query = = "UPDATE mahasiswa 
				SET NIM = '$_POST[NIM]',
					Nama = '$_POST[Nama]',
					Jurusan = '$_POST[Jurusan]'
				WHERE id = $_POST[No]";
}else if($_GET['action'] == "delete"){
	$query = "DELETE FROM mahasiswa 
				WHERE id=$_GET[No]";
}

mysqli_query($koneksi, $query);

//Redirect ke template.php
header('Location: template.php?page=mahasiswa');