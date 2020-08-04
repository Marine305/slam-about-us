(function() {

	const $form_group_credit = $('.js-form-group--credit');
	const $ange_slider_credit = $('.js-range-slider-credit');
	$ange_slider_credit.ionRangeSlider && $ange_slider_credit.ionRangeSlider();
	window.RangeCreditInit = function($els) {
		$els.each(function(i,el) {
			const $range_parent = $(el);
			const $range = $range_parent.find('.js-range-slider--credit');
			const $this_value = $range_parent.find('.js-range-value');
			const $this_price = $range_parent.find('.js-range-price');
			const this_credit_value = JSON.parse($range.attr('data-credit-value'));
			const this_postfix = $range.attr('data-postfix');



			const handler_range_change = function(data) {
				const $this = $(this);
				const from = $this.data("from");
				const value = $this.prop("value");

				$this_price.length > 0 && $this_price.html(this_credit_value[from]['price']);
				$this_value.html(value + this_postfix);
			};

			$range.on('change', handler_range_change)
		})
	};

	window.RangeCreditInit($form_group_credit)

})();
