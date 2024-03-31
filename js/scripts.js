// Toggle header nav
document.addEventListener("DOMContentLoaded", function () {
  var menuToggle = document.querySelector(".menu-toggle");
  var siteNavigation = document.querySelector(".site-navigation");

  menuToggle.addEventListener("click", function () {
    siteNavigation.classList.toggle("expanded");
    var expanded = siteNavigation.classList.contains("expanded");
    menuToggle.setAttribute("aria-expanded", expanded);
    menuToggle.classList.toggle("active");
  });

  document
    .getElementById("scrollbutton")
    .addEventListener("click", function () {
      var iframe = document.getElementById("scroll-target");

      // Scroll to the position of the iframe on the page
      iframe.scrollIntoView({ behavior: "smooth", block: "center" });
    });
});
