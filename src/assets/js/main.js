// import 'popper.js';
// import 'bootstrap';
// import 'bootstrap/js/src/util.js';
import 'bootstrap/js/src/modal.js'; //модалки
// import 'bootstrap/js/src/tab.js'; //табы
import 'bootstrap/js/src/collapse.js'; //аккордеоны
import 'bootstrap/js/src/tooltip.js'; //аккордеоны

// inits
import uiInits from './init';

window.reinit = {};
window.reinit.slider = {};

let GLOBAL = {
	slider: function () {
		window.slam_slider = function (args) {
			const $slider_wrap = $(args.el);

			const slider = $slider_wrap.find('.js-swiper-slider');
			const data = {
				media: $slider_wrap.attr('data-media'),
			};
			const slider_prev = $slider_wrap.find('.js-swiper-button-prev');
			const slider_next = $slider_wrap.find('.js-swiper-button-next');
			const slider_pagination = $slider_wrap.find('.js-swiper-pagination');

			let swiper = {};
			!args.args.navigation && (args.args.navigation = {});
			args.args.navigation.nextEl = slider_next;
			args.args.navigation.prevEl = slider_prev;
			!args.args.pagination && (args.args.pagination = {});
			args.args.pagination.el = slider_pagination;
			args.args.pagination.type = 'bullets';
			args.args.pagination.clickable = true;

			const init = function() {
				swiper = new Swiper(slider, args.args)
					.on('imgLazyLoaded', function() {
						setTimeout(function() {
							swiper.update();
						}, 300)
					});

				setTimeout(function() {
					swiper.update();
				}, 1000)
			};
			const destroy = function() {
				swiper.destroy && swiper.destroy();
				new LazyLoad({
					threshold: 0,
				}, $slider_wrap.find('.swiper-lazy'));
			};

			if ($slider_wrap.attr('data-media')) {

				let handler_media = function(state) {
					if (state) {
						init();
					} else {
						destroy()
					}
				};

				window.check_media(data.media,handler_media)

			} else {
				init();
			}



			return swiper;
		};

		window.slam_slider_with_nav = function(args) {

			const $slider_wrap = args.$el;
			const $slider_nav = $slider_wrap.find('.js-swiper-nav');
			const $slider_main = $slider_wrap.find('.js-swiper-main');
			let swiper_nav;
			let swiper_main;

			swiper_nav = $slider_nav.length > 0 && window.slam_slider({
				el: $slider_nav,
				args: args.args_nav
			}).on('transitionEnd', function(e,slider) {
				$slider_nav.find('.swiper-slide-thumb-active').length < 1 && $slider_nav.find('.swiper-slide-active').addClass('swiper-slide-thumb-active');
			});

			swiper_main = window.slam_slider({
				el: $slider_main,
				args: {
					thumbs: {
						swiper: swiper_nav
					},
					...args.args_main
				}
			});

			return {main: swiper_main, nav: swiper_nav}
		}
	},
	media: function () {
		window.check_media = function (media, callback) {

			const breakpoint = window.matchMedia(media);



			const breakpointChecker = function () {
				if (breakpoint.matches === true) {
					callback(true);
				} else if (breakpoint.matches === false) {
					callback(false)
				}
			};

			breakpoint.addListener(breakpointChecker);

			breakpointChecker();
		};
		window.media = function(mediaString) {
			return window.matchMedia(mediaString).matches
		};
	},
	swipe: function() {
		window.swipe = function(args) {
			let ts;
			let swiper = false;
			let tab = false;
			let range = false;

			$(document).on('touchstart', args.selector, function(e) {
				let $this = $(this);

				$(e.target).closest('.swiper').length > 0 ? swiper = true : swiper= false;
				$(e.target).closest('.nav-tabs').length > 0 ? tab = true : tab= false;
				$(e.target).closest('.irs').length > 0 ? range = true : range= false;
				ts = e.originalEvent.touches[0].clientX;
				$this.css({
					"-webkit-transform":"none",
					"-ms-transform":"none",
					"transform":"none"
				});
				args.class.touchmove && $this.addClass(args.class.touchmove);
			});

			$(document).on('touchend', args.selector, function(e) {
				if (!swiper && !tab && !range) {
					let $this = $(this);
					let te = e.originalEvent.changedTouches[0].clientX;
					let offset = Math.abs(ts - te);

					args.class.touchmove && $this.removeClass(args.class.touchmove);

					if (ts > te) {
						if (offset > (args.offset || 100)) {
							ts = 0;
							args.listen && args.listen.left && args.touchend && args.touchend.left && args.touchend.left();
						} else {
							$this.css({
								"-webkit-transform":"none",
								"-ms-transform":"none",
								"transform":"none"
							});
						}
					} else {
						if (offset > (args.offset || 100)) {
							ts = 0;
							args.listen && args.listen.right && args.touchend && args.touchend.right && args.touchend.right();
						} else {
							$this.css({
								"-webkit-transform":"none",
								"-ms-transform":"none",
								"transform":"none"
							});
						}
					}

					setTimeout(function() {
						$this.css({
							"-webkit-transform":"none",
							"-ms-transform":"none",
							"transform":"none"
						});
					}, 300)
				}
			});

			$(document).on('touchmove', args.selector, function(e) {
				if (!swiper && !tab && !range) {
					let $this = $(this);
					let te = e.originalEvent.changedTouches[0].clientX;
					let offset = Math.abs(ts - te);

					args.class.touchmove && $this.addClass(args.class.touchmove);

					if (ts > te) {
						args.listen && args.listen.left && $this.css('transform', 'translate(-'+offset+'px,0px)');
					} else {
						args.listen && args.listen.right && $this.css('transform', 'translate(' +offset+'px,0px)');
					}
				}
			});
		}
	}
};

GLOBAL.slider();
GLOBAL.media();
GLOBAL.swipe();


const ready = (callback) => {
	document.readyState != "loading" ? callback() : document.addEventListener("DOMContentLoaded", callback);
};

ready(() => {
	uiInits.init();

	$(document).on('input', '.ajaxfilter-num-to', function () {
		let input = {};
		input.$el = $(this);
		input.value = input.$el.val();
		input.data = {
			max_value: parseInt(input.$el.attr('placeholder'))
		};

		if (input.value > input.data.max_value) {
			input.$el.val(input.data.max_value);
		}
	});
	window.swipe({
		selector: '.sidebar-filter__block',
		// Сдвиг при котором произойдет this.touchend
		offset: 200,
		// Включение эвентов
		listen: {
			// Включить свайп влево
			left: true,
			// Включить свайп вправо
			right: false,
		},
		// Евенты в конце сдвига
		touchend: {
			// Евент если сдвиг влево был больше this.offset
			left: function () {
				$('.sidebar-filter__close').trigger('click');
			},
			// Евент если сдвиг вправо был больше this.offset
			right: function () {

			},
		},
		// Классы
		class: {
			// Класс во время сдвига
			touchmove: 'is-touchmove'
		},
		// Таймауты
		timeout: {
			transform: 300
		}
	});
	const btn_toggle = require('../../mixins/btn-toggle/btn-toggle');
	const lazy_img = require('../../mixins/lazy-img/script');
	const scroll_to = require('../../mixins/scroll-to/script');
	const trigger_click = require('../../mixins/trigger-click/script');
	const custom_select = require('../../mixins/custom-select/script');
	const form = require('../../mixins/forms/script');

});