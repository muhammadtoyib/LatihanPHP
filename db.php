<?php

$koneksi = mysqli_connect("localhost", "root", "", "belajarloginapp");

if(!$koneksi){
	echo "Connection Failed";
}