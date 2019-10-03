$(function () {
    $(window).on("scroll", function () { /* change the color of nav when scroll down */
        var sc = $(window).scrollTop();
        if (sc > 100) {
            // scroll
            $("nav").css("background-color", "#ffcc00");
            $("#navbar-box #nav-menu ul li a").css("color", "#04054f");
            $("#navbar-box #nav-hamburger i").css("color", "#04054f");
        }
    });


});
