<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "lapor.in";

$connect = new mysqli($host, $user, $password, $database);

if(!$connect){
    die("Koneksi Gagal: " .mysqli_connect_error());
}

?>