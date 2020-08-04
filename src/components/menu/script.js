window.addEventListener("load", function (event) {
  var body = $("body");
  var mobMenuParent = $(".header-main");
  var mobMenu = $(".js-header-menu");
  var burger = $(".js-burger");
  var parent = $(".js-scrollmenu");
  var logo = parent.find(".logo");
  const threshold = 1;
  const initialScroll = $(document).scrollTop();
  switchTopBar(initialScroll);

    if ($(".js-header-menu.active")) {
      $(".js-nav").on("click", function () {
        closeMobileMenu();
      });
    }

  function closeMobileMenu() {
    mobMenuParent.removeClass("active");
    mobMenu.removeClass("active");
    body.removeClass("menu-opened");
    burger.removeClass("active");
    logo.removeClass("active");
  }

  burger.on("click", function () {
    if (mobMenu.hasClass("active")) {
      mobMenuParent.removeClass("active");
      mobMenu.removeClass("active");
      body.removeClass("menu-opened");
      burger.removeClass("active");
      logo.removeClass("active");
    } else {
      mobMenuParent.addClass("active");
      mobMenu.addClass("active");
      body.addClass("menu-opened");
      burger.addClass("active");
      logo.addClass("active");
    }
    return false;
  });

  $(window).resize(function () {
    if ($(window).width() >= 1025) {
      body.removeClass("menu-opened");
      mobMenu.removeClass("active");
      mobMenuParent.removeClass("active");
      burger.removeClass("active");
    }
  });

  $(window).on("scroll", function () {
    const scroll = $(document).scrollTop();
    switchTopBar(scroll);
  });
  function switchTopBar(scroll) {
    if (scroll > threshold) {
      $(".js-scrollmenu").addClass("fixed");
    } else {
      $(".js-scrollmenu").removeClass("fixed");
    }
  }

  $(".menu").on("click", ".js-nav-link", function (event) {
    if ($(".wrapper").length) {
      event.preventDefault();
      const menu = $(this).closest(".menu");
      const liArr = menu.find(".js-nav");
      const clickedLi = $(this).closest(".js-nav");
      if (clickedLi.hasClass("active")) {
        return false;
      }
      const id = "#" + $(this).attr("href").split("#")[1];
      let top = $(id).offset().top - 0;

      // ======= animate movement
      $("body,html").animate({ scrollTop: top }, 600);
      liArr.removeClass("active");
      clickedLi.addClass("active");
    }

    if ($(window).width() >= 1025) {
      $(".header-main").removeClass("active");
      $(".js-header-menu").removeClass("active");
      $("body").removeClass("menu-opened");
      $(".js-burger").removeClass("active");
      $(".logo").removeClass("active");
      $(".menu a").removeClass("active");
    }
  });
});
