<?php
$host     = "localhost";
$user     = "root";
$pass     = "";
$database = "latihan";

// Koneksi langsung ke server + database
$koneksi = new mysqli($host, $user, $pass, $database);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
$koneksi->set_charset("utf8mb4");
// Jangan pakai echo di file ini, karena akan mengganggu redirect (header) di halaman login.