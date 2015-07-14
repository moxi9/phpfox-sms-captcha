<?php

if (PHPfox::isAdminPanel() && (new Core\Request())->get('id') == 'PHPfox_RingCaptcha' && version_compare(PHPfox::VERSION, '4.0.2', '<')) {
	echo '<div class="error_message">In order for this app to work you need to be running PHPfox 4.0.2 or higher. You are running PHPfox ' . PHPfox::VERSION . '.</div>';
}