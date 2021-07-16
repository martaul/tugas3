<?php

$server = "localhost";
$user = "id16891603_marta";
$password = "Stanl00nayaa!";
$nama_database = "id16891603_pendaftaran_siswa";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>