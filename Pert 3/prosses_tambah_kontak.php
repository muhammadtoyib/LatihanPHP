<?php

include("koneksi.php");

// Mendapatkan Ekstensi File yg Diupload
$ext = explode(".", $_FILES['gambar']['name']);
$ext = end($ext);

// Ekstensi File yg Diperbolehkan
$ext_boleh = Array("jpg","png","gif");


$size = $_FILES['gambar']['size'];
$sumber = $_FILES['gambar']['tmp_name'];
$tujuan = "uploads/" . $_FILES['gambar']['name'];

// Data
$nama = mysqli_real_escape_string($db, $_POST['nama']);
$phone = mysqli_real_escape_string($db, $_POST['phone']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$kategori = $_POST['kategori'];
if(in_array($ext, $ext_boleh) && $size <= 2*1024*1024 ){
	echo "File valid";
	$gambar = move_uploaded_file($sumber, $tujuan);
	$query = "INSERT INTO kontak (icon_path, nama, phone, email, kategori_id) 
		  VALUES ('$tujuan', '$nama', '$phone', '$email', '$kategori')";
mysqli_query($db, $query);
}

header('Location: index.php');
?>