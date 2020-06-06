$(document).ready(function() {

  // show and hide menu
  var win = $(window).width();
  if (win <= 991) { // mobile & tablet screen
    $("#nav-hamburger img").click(function() {
      if ($(this).attr('data-click-state') == 1) { // hide menu
        $(this).attr('data-click-state', 0)
        $('#nav-menu-mob .nav').css({
          "clip-path": "circle(100px at 128% -17%)",
          "-webkit-clip-path": "circle(100px at 128% -17%)",
          "pointer-events": "none",
        })
        $("#nav-hamburger img").css({
          "transform": "rotate(0deg)",
          "-webkit-transform": "rotate(0deg)",
          "-ms-transform": "rotate(0deg)"
        })
        $("#nav-menu-mob").css({
          "height": "0"
        })
      } else { // show menu
        $(this).attr('data-click-state', 1);
        $("#nav-menu-mob").css({
          "height": "auto"
        })
        $('#nav-menu-mob .nav').css({
          "clip-path": "circle(1000px at 50% -10%)",
          "-webkit-clip-path": "circle(1000px at 50% -10%)",
          "pointer-events": "all",

        })
        $("#nav-hamburger img").css({
          "transform": "rotate(180deg)",
          "-webkit-transform": "rotate(180deg)",
          "-ms-transform": "rotate(180deg)"
        })
      }
    })
  }

  // button more
  $("#button-more").click(function() {
    $("html,body").animate({
      scrollTop: $("#profile-box").offset().top - 75
    }, 1000);
  });

  // action - scroll to top button
  $(".scroll-to-top").click(function() {
    $("html,body").animate({
      scrollTop: 0
    }, 1000);
  });

  // show / hide - scroll to top button
  var scr = $(".scroll-to-top");
  $(window).scroll(function() {
    if ($(this).scrollTop() >= 500) {
      scr.fadeIn();
    } else {
      scr.fadeOut();
    }
  });

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
  $("#navbar-box li a").click(function() {
    // close the menu after select option
    $('#nav-menu-mob .nav').css({
      "clip-path": "circle(100px at 128% -17%)",
      "-webkit-clip-path": "circle(100px at 128% -17%)",
      "pointer-events": "none"
    })
    $("#nav-hamburger img").css({
      "transform": "rotate(0deg)"
    })
    $("html,body").animate({
      scrollTop: $("#" + $(this).data("value")).offset().top - 75
    }, 1000);
  });


  // smooth scroll to section when click on it in footer
  $("#contactus-box #mid #links a").click(function() {
    $("html,body").animate({
      scrollTop: $("#" + $(this).data("value")).offset().top - 75
    }, 1000);
  });


  // move get strarted image
  var win = $(window).width();
  if (win >= 992) {
    function get_started_iamge() {
      $("#get-started-photo img").animate({
        paddingTop: "20px"
      }, 1800, function() {
        $(this).animate({
          paddingTop: "0px"
        }, 1800, function() {
          get_started_iamge();
        });
      });
    }
    get_started_iamge();
  }

})
