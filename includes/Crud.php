<?php

class Crud
{
	public function __construct()
	{
		add_action('wp_ajax_contact_us_save', [$this, 'formSave']);
		add_action('wp_ajax_nopriv_contact_us_save', [$this, 'formSave']);
	}

	public function formSave()
	{
		global $wpdb;

		$result = [
			'status' => 'failed',
			'code'   => 404,
			'error'  => 'Something\'s wrong. Please try again later.'
		];

		$name = isset($_POST['contact_name']) && $_POST['contact_name'] != '' ? $_POST['contact_name'] : '';
		$email = isset($_POST['contact_email']) && $_POST['contact_email'] != '' ? $_POST['contact_email'] : '';
		$message = isset($_POST['contact_message']) && $_POST['contact_message'] != '' ? $_POST['contact_message'] : '';

		try {
			$wpdb->insert(
				'contact_us',
				[
					'name'    => $name,
					'email'   => $email,
					'message' => $message
				]
			);

			$result = [
				'status' => 'success',
				'code'   => 200,
				'error'  => 'Success'
			];
		} catch (Exception $e) {
			$result['error'] = $e->getMessage();
		}

		wp_send_json(json_encode($result));
	}
}

//$crud = new Crud();