document.addEventListener("DOMContentLoaded", () => {
  const prevBtn = document.getElementById("prevToggleBtn");
  const nextBtn = document.getElementById("nextToggleBtn");

  const kampusUtama = document.getElementById("kampus-utama");
  const kampusPsdku = document.getElementById("kampus-psdku");

  let isKampusUtamaVisible = true;

  // Fungsi untuk menampilkan dan menyembunyikan dengan animasi
  function toggleDisplay() {
    if (isKampusUtamaVisible) {
      // Animasi keluar kampus utama
      kampusUtama.classList.remove("active");
      kampusUtama.classList.add("hidden");

      // Animasi masuk kampus PSDku
      kampusPsdku.classList.remove("hidden");
      kampusPsdku.classList.add("active");
    } else {
      // Animasi keluar kampus PSDku
      kampusPsdku.classList.remove("active");
      kampusPsdku.classList.add("hidden");

      // Animasi masuk kampus utama
      kampusUtama.classList.remove("hidden");
      kampusUtama.classList.add("active");
    }

    // Toggle status
    isKampusUtamaVisible = !isKampusUtamaVisible;

    // Atur tombol disabled
    updateButtonState();
  }

  // Fungsi untuk mengatur tombol disabled
  function updateButtonState() {
    if (isKampusUtamaVisible) {
      prevBtn.setAttribute("disabled", "disabled"); // Disable tombol Prev
      nextBtn.removeAttribute("disabled"); // Enable tombol Next
    } else {
      nextBtn.setAttribute("disabled", "disabled"); // Disable tombol Next
      prevBtn.removeAttribute("disabled"); // Enable tombol Prev
    }
  }

  // Tambahkan event listener ke tombol
  nextBtn.addEventListener("click", toggleDisplay);
  prevBtn.addEventListener("click", toggleDisplay);

  // Atur state awal tombol
  updateButtonState();
});
