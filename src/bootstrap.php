<?php

use Dotenv\Dotenv;

if (!defined('WP_BOOTSTRAP') && !defined('ABSPATH')) {
	define('ABSPATH', '');
}

define('PROJECT_DIR', realpath(__DIR__ . '/../../../..'));

if (file_exists(PROJECT_DIR . '/vendor/autoload.php')) {
	require_once(PROJECT_DIR . '/vendor/autoload.php');
}

if (file_exists(PROJECT_DIR . '/tests/vendor/autoload.php')) {
	require_once(PROJECT_DIR . '/tests/vendor/autoload.php');
}

if (file_exists(PROJECT_DIR . '/.env')) {
	Dotenv::createImmutable(PROJECT_DIR)->load();
}

if (file_exists(PROJECT_DIR . '/tests/.env')) {
	Dotenv::createImmutable(PROJECT_DIR . '/tests/')->load();
}