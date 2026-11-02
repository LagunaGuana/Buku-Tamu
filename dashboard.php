<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="container py-5">
  <h1>Halo, <?= htmlspecialchars($_SESSION["username"]) ?>!</h1>
  <p>Anda berhasil login.</p>
  <a href="logout.php" class="btn btn-outline-danger">Keluar</a>
</body>
</html>