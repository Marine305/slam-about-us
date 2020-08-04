window.addEventListener('load', function (event) {
	$('.js-form-control--data').datepicker && $('.js-form-control--data').datepicker({
		maxDate: new Date(),
		dateFormat: 'dd.mm.yyyy',
		onSelect: function (a, b, c) {
			let $el = c.$el;
			let $form = $el.closest('.bv-form');
			$form.data('bootstrapValidator').revalidateField($el);
		}
	});

	$(document).on('input', '.sidebar-filter__input', function() {
		let $this = $(this);
		let $wrap = $this.closest('.sidebar-filter__content');
		let $checkbox = $wrap.find('input[type="checkbox"]');
		let value = $this.val();
	});
});
