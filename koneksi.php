<?php
$server = "localhost";
$user = "root";
$password = "";
$nama_db = "db_bale";

$koneksi = mysqli_connect ("localhost","root","","db_bale");

if( !$koneksi){
    die("Gagal terhubung dengan database:" .mysqli_connect_error());
}


?>
