const form = document.getElementById("loginForm");
const card = document.getElementById("loginCard");
const btn = document.getElementById("btnLogin");
const btnText = btn.querySelector(".btn-text");
const spinner = btn.querySelector(".spinner-border");
const pw = document.getElementById("password");
const user = document.getElementById("username");

// Tampilkan / sembunyikan password
document.getElementById("togglePw").addEventListener("click", function () {
  const show = pw.type === "password";
  pw.type = show ? "text" : "password";
  this.querySelector("i").className = show ? "bi bi-eye-slash" : "bi bi-eye";
});

// Hapus tanda error saat mengetik
[user, pw].forEach((el) =>
  el.addEventListener("input", () => el.classList.remove("is-invalid"))
);

form.addEventListener("submit", function (e) {
  e.preventDefault();

  const userOk = user.value.trim() !== "";
  const pwOk = pw.value.length >= 6;
  user.classList.toggle("is-invalid", !userOk);
  pw.classList.toggle("is-invalid", !pwOk);

  // Jika tidak valid: getarkan kartu
  if (!userOk || !pwOk) {
    card.classList.remove("shake");
    void card.offsetWidth; // restart animasi
    card.classList.add("shake");
    return;
  }

  // Animasi loading
  btn.disabled = true;
  btnText.textContent = "Memproses...";
  spinner.classList.remove("d-none");

  // Tampilkan efek sukses singkat, lalu kirim form ke proses_login.php
  setTimeout(() => form.submit(), 700);
});