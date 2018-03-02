<?php

class Shortcodes
{

	public function __construct()
	{
		add_shortcode('contact_us', [$this, 'shortcodeForm']);
	}

	public function shortcodeForm()
	{
		ob_start();
		include 'templates/tpl_form.php';
		$result = ob_get_clean();

		return $result;
	}
}

$shortcodes = new Shortcodes();

