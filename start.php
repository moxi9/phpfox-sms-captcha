<?php

if (setting('ringcaptcha_enabled') && version_compare(PHPfox::VERSION, '4.0.2', '>=')) {
	new Core\Webhook('plugin:user.component_controller_register_2', 'http://store.phpfox.us/extend/ringcaptcha?webhook=component_controller_register_2');

	new Core\Event(['webhook', 'external_controller'], function(Core\HTTP $webhook) {
		$webhook->header('CLIENT_ID', PHPFOX_LICENSE_ID);
		$webhook->header('CLIENT_KEY', PHPFOX_LICENSE_KEY);
		$webhook->header('RC_KEY', setting('ringcaptcha_app_key'));
		$webhook->header('RC_SECRET', setting('ringcaptcha_secret_key'));
		$webhook->header('RC_NAME', setting('ringcaptcha_name'));
	});
}