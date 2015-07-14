
$Ready(function() {
	if (ringcaptcha_enabled != '1') {
		return;
	}

	$('#js_registration_holder #js_form').submit(function() {
		var t = $(this);
		if (t.hasClass('is-passed')) {
			return true;
		}

		tb_show('', '#', $('<a href="' + PF.url.make('/ringcaptcha-popup') + '" class="popup"></a>'));

		return false;
	});
});