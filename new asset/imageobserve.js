const observeImages = () => {
  const images = document.querySelectorAll(".img1 img[data-src]");

  const imgOptions = {
    threshold: 0.5,
  };

  const imgObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const img = entry.target;
        const realSRC = img.dataset.src;

        img.setAttribute("src", realSRC);
        img.removeAttribute("data-src");
        img.style.filter = "blur(0px)";
        observer.unobserve(img);
      }
    });
  }, imgOptions);

  images.forEach((img) => {
    imgObserver.observe(img);
  });
  console.log("o");
};

async function searchAndObserve(page_number, search) {
  try {
    // Melakukan pencarian
    // Tunggu sampai seluruh proses selesai sebelum memanggil observeImages
    await new Promise((resolve) => {
      const observer = new MutationObserver(() => {
        observeImages();
        console.log("o"); // Indikasi fungsi observeImages dieksekusi setelah perubahan pada DOM
        resolve();
        console.log("searchAndObserve");
      });

      // Batasi pengamatan pada elemen body dan sub tree
      observer.observe(document.body, {
        childList: true,
        subtree: true,
      });
    });
  } catch (error) {
    // Tangani kesalahan jika diperlukan
    console.error("Terjadi kesalahan:", error);
  }
}
