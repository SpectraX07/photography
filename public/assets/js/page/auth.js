"use strict";
$(function(){
	$('#formAuthentication').on('submit', function(e){
		// e.preventDefault();
		
		e.preventDefault();
		let main = $(this),
		btn = main.find('[type="submit"]'),
		btnHtml = 'Sign in';

		const formData = new FormData(main[0]);
		$.ajax({
			url: main.attr('action'),
			type: 'POST',
			data: formData,
			async: true,
			beforeSend: function () {
				btn.prop('disabled', true).html('<span class="spinner-border me-1" role="status" aria-hidden="true"></span> Loading...');
				$('.invalid-feedback').html('');
			},
			success: function (data) {
				if (data.success) {
					window.location.href = data.redirect;
				} else {
					$("[name='x-token']").val(data.hash);
					if (typeof data.message != 'undefined' && data.message != '') {
						showToast('Warning!', data.message, 'warning');
					}
					$.each(data.errors, function (index, value) {
						$('[name="'+index+'"], '+index).siblings('div.invalid-feedback').text(value).show();
					});
				}
			},
			error: function (response) {
				btn.prop('disabled', false).html(btnHtml);
			},
			complete: function(data, status, xhr) {
				btn.prop('disabled', false).html(btnHtml);
			},
			dataType: 'json',
			cache: false,
			contentType: false,
			processData: false
		});
	});
});