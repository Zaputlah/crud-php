<?php
// koneksi.php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'phpform';

$koneksi = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}