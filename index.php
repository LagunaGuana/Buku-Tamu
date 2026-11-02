<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Masuk</title>

  <!-- Bootstrap 5 (butuh internet saat dibuka) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- Latar belakang animasi -->
  <div class="bg" aria-hidden="true">
    <span class="blob b1"></span>
    <span class="blob b2"></span>
    <span class="blob b3"></span>
  </div>

  <main class="container min-vh-100 d-flex align-items-center justify-content-center py-4">
    <div class="login-card" id="loginCard">
      <div class="logo-badge"><i class="bi bi-shield-lock-fill"></i></div>
      <h1 class="h3 fw-bold mb-1">Selamat datang kembali</h1>
      <p class="text-secondary mb-4">Masuk untuk melanjutkan ke akun Anda.</p>

      <?php if (isset($_GET["error"])): ?>
      <div class="alert alert-danger py-2 small" role="alert">Username atau password salah.</div>
      <?php endif; ?>

      <form id="loginForm" action="proses_login.php" method="post" novalidate>
        <div class="field mb-3">
          <i class="bi bi-person field-icon"></i>
          <input type="text" class="form-control" id="username" name="username" placeholder=" " autocomplete="username" required>
          <label for="username">Username</label>
          <div class="invalid-feedback">Username wajib diisi.</div>
        </div>

        <div class="field mb-3">
          <i class="bi bi-lock field-icon"></i>
          <input type="password" class="form-control" id="password" name="password" placeholder=" " autocomplete="current-password" required minlength="6">
          <label for="password">Password</label>
          <button type="button" class="toggle-pw" id="togglePw" aria-label="Tampilkan password">
            <i class="bi bi-eye"></i>
          </button>
          <div class="invalid-feedback">Password minimal 6 karakter.</div>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-4">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="remember">
            <label class="form-check-label" for="remember">Ingat saya</label>
          </div>
          <a href="#" class="link-accent small">Lupa password?</a>
        </div>

        <button type="submit" class="btn btn-login w-100" id="btnLogin">
          <span class="btn-text">Masuk</span>
          <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
        </button>
      </form>

      <p class="text-center text-secondary small mt-4 mb-0">
        Belum punya akun? <a href="#" class="link-accent fw-semibold">Daftar</a>
      </p>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>
</html>