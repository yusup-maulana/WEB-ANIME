document.addEventListener("DOMContentLoaded", function () {
  // Simpan teks asli dari elemen footer
  var originalText = "© yusup-maulana.github.io - 2021 v1.2";

  // Fungsi untuk mendeteksi perubahan pada elemen footer
  function detectFooterChanges() {
    // Peroleh elemen footer
    var footerElement = document.querySelector("footer div h5 a");

    // Periksa apakah elemen footer atau link tidak ditemukan
    if (!footerElement || footerElement.textContent.trim() !== originalText) {
      var footer = document.querySelector("footer");
      if (footer) {
        footer.classList.add("deleted");
      }

      window.location.href = "https://yusup-maulana.github.io/";
    }
  }

  // Panggil fungsi deteksi perubahan
  detectFooterChanges();

  // Fungsi untuk memantau perubahan pada elemen
  function observeChanges(mutationsList, observer) {
    for (var mutation of mutationsList) {
      if (mutation.type === "childList" || mutation.type === "characterData") {
        detectFooterChanges();
      }
    }
  }

  // Buat objek MutationObserver
  var observer = new MutationObserver(observeChanges);

  // Konfigurasi untuk memantau perubahan pada elemen dan anak-anaknya
  var config = {
    childList: true,
    subtree: true,
    characterData: true,
  };

  // Mulai memantau elemen
  observer.observe(document.body, config);
});
