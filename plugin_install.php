<?php

global $db_version;
$db_version = '1.0';

function db_install()
{
	global $db_version;
	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

	$sql = "CREATE TABLE IF NOT EXISTS `contact_us` (
          `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
          `name` varchar(155) DEFAULT NULL,
          `email` varchar(255) DEFAULT NULL,
          `message` varchar(255) DEFAULT NULL,
          PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
	dbDelta($sql);

	add_option('$db_version', $db_version);
}
