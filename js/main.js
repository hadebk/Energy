$(document).ready(function() {
  /* change the color of nav when scroll down */
  $(window).on("scroll", function() {

    var sc = $(window).scrollTop();
    if (sc > 100) {
      // scroll
      /*$("nav").css("background-color", "#ffcc00");
      $("#navbar-box #nav-menu ul li a").css("color", "#04054f");
      $("#navbar-box #nav-hamburger i").css("color", "#04054f");*/
    }
  });

  // show and hide menu
  var win = $(window).width();
  if (win <= 991) { // mobile & tablet screen
    $("#nav-hamburger img").click(function() {
      if ($(this).attr('data-click-state') == 1) { // hide menu
        $(this).attr('data-click-state', 0)
        $('#nav-menu-mob .nav').css({
          "clip-path":"circle(100px at 128% -17%)",
          "-webkit-clip-path":"circle(100px at 128% -17%)",
          "pointer-events": "none"
        })
        $("#nav-hamburger img").css({
              "transform": "rotate(0deg)"
        })
      } else { // show menu
        $(this).attr('data-click-state', 1);
        $('#nav-menu-mob .nav').css({
          "clip-path":"circle(1000px at 90% -10%)",
          "-webkit-clip-path":"circle(1000px at 90% -10%)",
          "pointer-events": "all"
        })
        $("#nav-hamburger img").css({
              "transform": "rotate(180deg)"
        })
      }
    })
  }

  // flip icon of the service box when hover on it
  $("#services-box .services").hover(function() {
    $(this).find('img').addClass("animated flipInY")
  }, function() {
    $(this).find('img').removeClass("animated flipInY")
  })

  // show image in modal
  $('.img').on('click', function() {
    $('.imagepreview').attr('src', $(this).find('img').attr('src'));
    $('#imagemodal').modal('show');
  });

  // smooth scroll to section when click on it in navbar
    $("#navbar-box li a").click(function(){
      // close the menu after select option
      $('#nav-menu-mob .nav').css({
        "clip-path":"circle(100px at 128% -17%)",
        "-webkit-clip-path":"circle(100px at 128% -17%)",
        "pointer-events": "none"
      })
      $("#nav-hamburger img").css({
            "transform": "rotate(0deg)"
      })
       $("html,body").animate({
           scrollTop : $("#" + $(this).data("value")).offset().top -75
       },1000);
    });

})
