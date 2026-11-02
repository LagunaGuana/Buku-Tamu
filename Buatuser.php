<?php
// Jalankan SEKALI lewat browser untuk membuat user contoh, lalu HAPUS file ini.
require "koneksi.php";

$username = "admin";
$password = password_hash("admin123", PASSWORD_DEFAULT);

$stmt = $koneksi->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $password);

echo $stmt->execute()
    ? "User 'admin' (password: admin123) berhasil dibuat. Hapus file ini sekarang."
    : "Gagal / user sudah ada: " . $stmt->error;