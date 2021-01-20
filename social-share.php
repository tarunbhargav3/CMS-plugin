<?php
/*
Plugin Name: Social buttons
Description: Social Media Share Buttons.
Version: 1.1.6
Text Domain: smb
Domain Path: /languages
Author: Tarun Bhargav
License: GPL2 or later
*/

defined('ABSPATH') || exit;

if (! defined('WPINC')) {
    die;
}

if (! class_exists('smb')) {
    include_once dirname(__FILE__) . '/plugin.php';
}

$smb_plugin = smb::GetInstance('1.0.6', __FILE__);
