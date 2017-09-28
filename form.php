<?php
if(isset($_POST['submit'])){

	$name = array("Alexwawo", "Maria", "Johndoe", "Janedoe", "Nathan");

	$minimum = 5;
	$maximum = 10;

	$username = $_POST['username'];
	$password = $_POST['password'];

	if(strlen($username) < $minimum){
		echo "Username Harus Memiliki Panjang 5 atau Lebih!";
	}
	if(strlen($username) > $maximum){
		echo "Username TIdak Boleh Lebih Panjang dari 10";
	}

	if(!in_array($username, $name)){
		echo "Maaf, Akses Ditolak";
	} else{
		echo "Selamat Datang";
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Forms</title>
</head>
<body>

<form action="form.php" method="post">
	<input type="text" name="username" placeholder="Enter Username" />
	<input type="password" name="password" placeholder="Enter Password" />
	<br />
	<input type="submit" name="submit"/>

</body>
</html>