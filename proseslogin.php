<?php
session_start();
require "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

$username = trim($_POST["username"] ?? "");
$password = $_POST["password"] ?? "";

// Prepared statement: aman dari SQL injection
$stmt = $koneksi->prepare("SELECT id, username, password FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();

if ($user && password_verify($password, $user["password"])) {
    session_regenerate_id(true);
    $_SESSION["user_id"]  = $user["id"];
    $_SESSION["username"] = $user["username"];
    header("Location: dashboard.php");
} else {
    header("Location: index.php?error=1");
}
exit;