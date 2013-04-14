<?php

/*
  Plugin Name: Unicornify Avatar
	Plugin URI: https://github.com/chejug/unicornify-avatar.git
	Plugin Description: Change the gravatar to unicornify
	Plugin Version: 1.0
	Plugin Date: 2013-04-13
	Plugin Author: jugu	
	Plugin Author URI: 
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.5
	Plugin Update Check URI: 
*/

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
	header('Location: ../../');
	exit;
}

qa_register_plugin_overrides('qa-unicornify-format.php');
qa_register_plugin_overrides('qa-unicornify-user.php');
qa_register_plugin_module('module', 'qa-unicornify-admin.php', 'qa_unicornify_admin', 'Unicornify Avatar');
