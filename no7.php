<?php
// sourcecode koneksi
$host = "localhost";
$username = "nama_pengguna";
$password = "kata_sandi";
$database = "contoh_db";

$koneksi = new mysqli($host, $username, $password, $database);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
