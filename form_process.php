<?php
if(isset($_POST['submit'])){

	$name = array("Alexwawo", "Maria", "Johndoe", "Janedoe", "Nathan");

	$minimum = 5;
	$maximum = 10;

	$username = $_POST['username'];
	$password = $_POST['password'];

	if(strlen($username) < $minimum){
		echo "Username Harus Memiliki Panjang 5 atau Lebih";
	}

	if(strlen($username) > $maximum){
		echo "Username Tidak Boleh Lebih Panjang dari 10";
	}

	if(!in_array($username, $name)){
		echo "Maaf Akses Ditolak";
	}else{
		echo "Selamat Datang";
	}
}
?>