$(document).ready(function () {
    $('.why-us').animate({scrollLeft: 450}, 0);
    $('.why-us').animate({scrollLeft: 0}, 1500);
    $('.menu_toggle').click(function() {
        if($(this).is('.active:not(.back)')) {
             $(this).addClass('back');
        } else if ($(this).is('.back')) {
            $(this).removeClass('back');
        } else {
            $(this).addClass('active');
        }
    });
    $('.menu-toggle').click(function () {
        /* $('.nav-menu').toggleClass("nav-menu_visible"); */
        $('.main-navigation').toggleClass("main-navigation_visible");
        $("body").toggleClass("body_scroll");
    });
    $('.nav_closing').click(function () {
        
        /* $('.nav-menu').toggleClass("nav-menu_visible"); */
        $('.main-navigation').toggleClass("main-navigation_visible");
        $("body").toggleClass("body_scroll");
        if($('.menu_toggle').is('.active:not(.back)')) {
            $('.menu_toggle').addClass('back');
       } else if ($('.menu_toggle').is('.back')) {
           $('.menu_toggle').removeClass('back');
       } else {
           $('.menu_toggle').addClass('active');
       }
    });




    if ($(window).width() < 1080) {
        $(".why-us_container").toggleClass("container");
        $(".nav_container").toggleClass("container");
        $(".feedback_container").toggleClass("container");
        //$(".why-us_container").toggleClass("owl-carousel");
        
    }
$('.slider_header').slick({ 
         autoplay: false,
         dots: true,
         arrows: true,
         fade: true,
         autoplaySpeed: 1500
                              });
    $('.owl-carousel').slick({
        dots: false,
      infinite: true,
      speed: 800,
      slidesToShow: 1,
      centerMode: false,
      variableWidth: true,
         arrows: false
      });
     $('.owl-carousel_about').slick({
        dots: false,
      infinite: true,
      speed: 800,
      slidesToShow: 1,
      centerMode: true,
      variableWidth: true,
      arrows: false
      });
});

