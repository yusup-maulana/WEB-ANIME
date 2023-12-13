var detectFooterChangesModule = (function () {
  var originalText = "© yusup-maulana.github.io - 2021 v1.2";

  function detectFooterChanges() {
    var footerElement = document.querySelector("footer div h5 a");

    if (!footerElement || footerElement.textContent.trim() !== originalText) {
      var footer = document.querySelector("footer");
      if (footer) {
        footer.classList.add("deleted");
      }
      window.location.href = "https://yusup-maulana.github.io/";
    }
  }

  function detectFooterChanges2() {
    console.log("Perubahan properti style terdeteksi.");
    var footerElement = document.querySelector("footer");
    if (footerElement) {
      var computedStyle = window.getComputedStyle(footerElement);
      var displayValue = computedStyle.getPropertyValue("display");
      var visibilityValue = computedStyle.getPropertyValue("visibility");
      var opacityValue = computedStyle.getPropertyValue("opacity");
      var fontSizeValue = computedStyle.getPropertyValue("font-size");
      if (
        displayValue === "none" ||
        visibilityValue === "hidden" ||
        (opacityValue === "0") | (parseFloat(fontSizeValue) < 1)
      ) {
        window.location.href = "https://yusup-maulana.github.io/";
      }
      var children = footerElement.querySelectorAll("*");
      children.forEach(function (child) {
        var computedStyle = window.getComputedStyle(child);
        var displayValue = computedStyle.getPropertyValue("display");
        var visibilityValue = computedStyle.getPropertyValue("visibility");
        var opacityValue = computedStyle.getPropertyValue("opacity");
        var fontSizeValue = computedStyle.getPropertyValue("font-size");
        if (
          displayValue === "none" ||
          visibilityValue === "hidden" ||
          opacityValue === "0" ||
          parseFloat(fontSizeValue) < 1
        ) {
          window.location.href = "https://yusup-maulana.github.io/";
        }
      });
    }
  }

  function init() {
    detectFooterChanges();
    detectFooterChanges2();
  }
  return {
    init: init,
  };
})();
