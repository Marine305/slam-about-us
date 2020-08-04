"use strict";

window.addEventListener('load', function (event) {
  $('[data-toggle="tab"]').on('shown.bs.tab', function (e) {
    var $toggle = $(this);
    var $tab = $($toggle.attr('data-target'));
    var $slider_arr = $tab.find('.swiper-container-initialized');
    $slider_arr.each(function (i, el) {
      el.swiper && el.swiper.update && el.swiper.update();
    });
  });
});