"use strict";

window.addEventListener('load', function (event) {
  var $header = $('.js-header');
  var maxScrollTop = 0;
  $(window).on('scroll', function () {
    if (maxScrollTop < $(this).scrollTop()) {
      maxScrollTop = $(this).scrollTop();
      $header.removeClass('header-scroll-top');
    } else {
      maxScrollTop = $(this).scrollTop();
      $header.addClass('header-scroll-top');
    }

    if ($(this).scrollTop() > 100 && !$('.nav-catalog').hasClass('active')) {
      $header.addClass('header-scroll');
    } else {
      $header.removeClass('header-scroll');
    }
  });
});