<?php

class Admin
{
	public function __construct()
	{
		add_action('admin_menu', [$this, 'adminMenu']);
	}

	public function adminMenu()
	{
		add_menu_page('Contact Us Form', 'Contact Us Form', 'manage_options', 'pluginwptest', [$this, 'adminList'], 'dashicons-book', 15);
	}

	public function adminList()
	{
		if (!current_user_can('manage_options')) {
			wp_die(__('You do not have sufficient permissions to access this page.'));
		}

		include 'templates/tpl_admin_list.php';
	}
}

$admin = new Admin();