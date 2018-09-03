(function ($) {
    let navbarHamburger = $(".js-navbar__hamburger");
    let navbarCollapse = $(".js-navbar-collapse");
    let navbarBackground = $(".js-navbar-background");

    navbarHamburger.on("click", function (event) {
        event.preventDefault();
        navbarHamburger.toggleClass("is-active");
        navbarCollapse.toggleClass("show");
    });
    navbarBackground.on("click", function (event) {
        event.preventDefault();
        navbarHamburger.toggleClass("is-active");
        navbarCollapse.toggleClass("show");
    });
})($);