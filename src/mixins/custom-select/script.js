(function () {
	window.reinit.select =  function () {
		let select_input = $('select.custom-select');

		select_input.length &&
		select_input.styler &&
		select_input.styler();
	};

	$(document).on('click', '[data-url]', function() {
		let $this = $(this);
		let url = $this.attr('data-url');
		document.location.href = url;
	});

	window.reinit.select();
})();
