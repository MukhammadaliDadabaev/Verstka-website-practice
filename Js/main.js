const ready = function (cb) {
  // Check if the `document` is loaded completely
  document.readyState === "loading"
    ? document.addEventListener("DOMContentLoaded", function (e) {
        cb();
      })
    : cb();
};

// Usage
ready(function () {
  const elSiteHeaderToggler = document.querySelector(".site-header__toggler");
  const elSitenav = document.querySelector(".sitenav");

  elSiteHeaderToggler.addEventListener("click", () => {
    elSitenav.classList.toggle("sitenav--open");
  });
});
