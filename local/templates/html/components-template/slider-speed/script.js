"use strict";

window.addEventListener('load', function (event) {
  $('.js-swiper-speed').each(function (i, el) {
    window.slam_slider({
      el: el,
      args: {
        autoHeight: true,
        lazy: true,
        loop: false,
        slidesPerView: 3,
        spaceBetween: 0,
        watchOverflow: true
      }
    });
  });
});