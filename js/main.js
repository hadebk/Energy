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

  // flip icon of the service box when hover on it
  $("#services-box .services").hover(function(){
    $(this).find('img').addClass("animated flipInY")
  },function(){
    $(this).find('img').removeClass("animated flipInY")
  })

})
