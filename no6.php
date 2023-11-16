<?php
$host = "localhost";
$username = "nama_pengguna";
$password = "kata_sandi";
$database = "nama_database";

$koneksi = new mysqli($host, $username, $password, $database);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
// Sekarang Anda dapat menjalankan query atau operasi database lainnya.
?>
