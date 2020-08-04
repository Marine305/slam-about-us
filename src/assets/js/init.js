const uiInits = {

	init: function () {
		this.svgPolifill();
		this.browserCheck();
		this.validation();
	},

	svgPolifill: function () {
		// svg sprites 
		svg4everybody && svg4everybody();
	},

	browserCheck: function () {
		// проверка браузера
		const userAgent = navigator.userAgent;
		if (userAgent.indexOf("Firefox") > -1) {
			// "Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0"
			document.querySelector('body').classList.add('browser-mozzila');
		} else if (userAgent.indexOf("Opera") > -1 || userAgent.indexOf("OPR") > -1) {
			//"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36 OPR/57.0.3098.106"
			document.querySelector('body').classList.add('browser-opera');
		} else if (userAgent.indexOf("Trident") > -1) {
			// "Mozilla/5.0 (Windows NT 10.0; WOW64; Trident/7.0; .NET4.0C; .NET4.0E; Zoom 3.6.0; wbx 1.0.0; rv:11.0) like Gecko"
			document.querySelector('body').classList.add('browser-ie');
		} else if (userAgent.indexOf("Edge") > -1) {
			// "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36 Edge/16.16299"
			document.querySelector('body').classList.add('browser-edge');
		} else if (userAgent.indexOf("Chrome") > -1) {
			// "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/66.0.3359.181 Chrome/66.0.3359.181 Safari/537.36"
			document.querySelector('body').classList.add('browser-chrome');
		} else if (userAgent.indexOf("Safari") > -1) {
			// "Mozilla/5.0 (iPhone; CPU iPhone OS 11_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/11.0 Mobile/15E148 Safari/604.1 980x1306"
			document.querySelector('body').classList.add('browser-safari');
		}
		// проверка на МАС платформу
		if (navigator.platform.toUpperCase().indexOf('MAC') >= 0) {
			document.querySelector('body').classList.add('platform-mac');
		}
	},

	VHfix: function () {
		var options = [
			{
				selector: '.top-menu',
				vh: 100,
			},
			{
				selector: '.js_mob-sidebar',
				vh: 100,
			}
		];

		if ($(window).width() < 1024) {
			let vhFix = new VHChromeFix(options);

			$(window).on('resize', function () {
				vhFix = new VHChromeFix(options);
			});
		}

	},
	validation: function () {

		let loadedFlag = {
			BV: true,
			inputmask: true
		};

		function BVInit() {
			$('.bv-form:not(.bv-form-initialized)')
				.on('init.form.bv', function (e) {
					let $this = $(this);
					$this.addClass('bv-form-initialized');
					loadedFlag.BV = true;
				})
				.bootstrapValidator({
					feedbackIcons: {
						valid: 'bv-icon-ok',
						invalid: 'bv-icon-not',
						validating: 'bv-icon-refresh'
					},
				});
		}

		function inputmaskInit() {
			$('input[type="tel"]:not(.inputmask-initialized)').inputmask({
				mask: "+7 (999) 999-99-99"
			}).addClass('inputmask-initialized');
			$('.js-form-control--data:not(.inputmask-initialized)').inputmask({
				mask: "99.99.9999"
			}).addClass('inputmask-initialized');
			loadedFlag.inputmask = true;
		}

		// загрузка(по необходимости) и инит валидатора
		function loaderBV() {
			if ($('.bv-form').bootstrapValidator) {
				BVInit()
			} else {
				loadedFlag.BV = false;
				$.getScript('/local/templates/html/js/vendor/bootstrapValidator.min.js', BVInit);
			}
		}

		// загрузка(по необходимости) и инит маски телефона
		function loaderInputmask() {

			if ($('input[type="tel"]').inputmask) {
				inputmaskInit()
			} else {
				loadedFlag.inputmask = false;
				$.getScript('/local/templates/html/js/vendor/jquery.inputmask.min.js', inputmaskInit);
			}
		}


		$(document).on('mouseover touchstart touchend', '.bv-form', function () {
			if (loadedFlag.BV && loadedFlag.inputmask) {
				loaderBV();
				loaderInputmask();
			}
		})

	},
}

export default uiInits
