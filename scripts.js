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
});
