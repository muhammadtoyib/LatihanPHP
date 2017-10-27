<?php

//enkripsi cara 1

$string="rahasiakita";;

$encrypted = password_hash($string,PASSWORD_BCRYPT);
echo $encrypted;

//cara 2
$salt = '$2a$10$HaloHaloHaloHaloHaloHaloHalo22';
$encry2 = crypt($string, $salt);

echo "<br />";