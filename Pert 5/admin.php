<?php
session_start();
if($_SESSION['login'] !=1){
	header('Location : login.php');
}
?>

<h1> Hanya Bisa Diakses Admin </h1>

<a href = logout.php> Logout </a>