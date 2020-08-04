$(document).ready(function () {
  function parallaxi(selector, k, b) {
    var viewport = $(window);
    viewport.on({
      scroll: function () {
        var scrolled = viewport.scrollTop();
        var item = $(selector);
        var item_s = scrolled * k + b;
        item.css({
          transform: "translateY(" + item_s + "px" + ")",
        });
      },
    });
  }
  parallaxi(".el-line-big__ball .lazy-img-wrap", 0.12, -100);
});
