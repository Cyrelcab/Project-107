document.querySelectorAll('.nav-link').forEach(function(navItem) {
    navItem.addEventListener("click", function() {
        var navbarToggler = document.querySelector(".navbar-toggler");
        var navbarCollapse = document.querySelector(".navbar-collapse.show");
        if (navbarToggler && navbarCollapse) {
            navbarToggler.click(); // Programmatically close the navbar
        }
    });
});