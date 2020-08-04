"use strict";

var $compress_nav_arr = $('.js-nav-compress');
$compress_nav_arr.each(function (i, el) {
  var $nav = $(el);
  var nav_change_width;
  var $list = $nav.find('> .js-nav-list');
  var $abroad = $nav.find('> .js-nav-abroad');
  var $abroad_list = $abroad.find('> .js-nav-list');

  var get_el_width = function get_el_width($el) {
    return $el[0].getBoundingClientRect().width;
  };

  var get_el_right = function get_el_right($el) {
    return $el[0].getBoundingClientRect().right;
  };

  var check_compress = function check_compress() {
    if ($abroad_list.children().length === 0) {
      $nav.addClass('is-no-compress');
    } else {
      $nav.removeClass('is-no-compress');
    }
  };

  var compress = function compress() {
    var $items = $list.find('> .js-nav-item');
    $nav.addClass('is-recalculation');
    $.each($($items.get().reverse()), function (i, el) {
      var $item = $(el);

      if ($item.is(':last-child')) {
        if (get_el_right($item) > get_el_right($nav)) {
          $item.prependTo($abroad_list);
        }
      } else {
        if (get_el_right($item) > get_el_right($nav) - get_el_width($abroad)) {
          $item.prependTo($abroad_list);
        }
      }
    });
    check_compress();
    $nav.removeClass('is-recalculation');
  };

  var uncompress = function uncompress() {
    var $abroad_items = $abroad_list.find('> .js-nav-item');
    $nav.addClass('is-recalculation');
    $.each($abroad_items, function (i, el) {
      var $item = $(el);

      if ($item.index() === 0) {
        if ($item.is(':last-child')) {
          if (get_el_width($list) + get_el_width($item) <= get_el_width($nav)) {
            $item.appendTo($list);
          }
        } else {
          if (get_el_width($list) + get_el_width($item) + get_el_width($abroad) <= get_el_width($nav)) {
            $item.appendTo($list);
          }
        }
      }
    });
    check_compress();
    $nav.removeClass('is-recalculation');
  };

  var handler_resize = function handler_resize() {
    if (nav_change_width !== get_el_width($nav)) {
      nav_change_width = get_el_width($nav);

      if (get_el_width($list) + get_el_width($abroad) > get_el_width($nav)) {
        compress();
      } else {
        uncompress();
      }
    } else {
      $nav.removeClass('is-recalculation');
    }
  };

  handler_resize();
  $(window).on('resize', handler_resize);
  $('[data-toggle="tab"]').on('shown.bs.tab', handler_resize);
});