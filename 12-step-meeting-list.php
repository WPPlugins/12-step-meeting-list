<?php
/*
Plugin Name: 12 Step Meeting List
Plugin URI: https://wordpress.org/plugins/12-step-meeting-list/
Description: CMS for maintaining database of 12-step meetings and locations
Version: 2.13.5
Author: Meeting Guide
Author URI: https://meetingguide.org
License: BSD 3-Clause
License URI: https://opensource.org/licenses/BSD-3-Clause
Text Domain: 12-step-meeting-list
*/

//define constants
if (!defined('GROUP_CONTACT_COUNT'))		define('GROUP_CONTACT_COUNT',	3);
if (!defined('TSML_CONTACT_LINK'))		define('TSML_CONTACT_LINK',		'mailto:info@meetingguide.org');
if (!defined('TSML_PATH'))				define('TSML_PATH', 				plugin_dir_path(__FILE__));
if (!defined('TSML_VERSION'))			define('TSML_VERSION',			'2.13.5');

//include these files first
include(TSML_PATH . '/includes/variables.php');
include(TSML_PATH . '/includes/functions.php');

//include rest of files
include(TSML_PATH . '/includes/admin_import.php');
include(TSML_PATH . '/includes/admin_lists.php');
include(TSML_PATH . '/includes/admin_meeting.php');
include(TSML_PATH . '/includes/admin_menu.php');
include(TSML_PATH . '/includes/admin_region.php');
include(TSML_PATH . '/includes/ajax.php');
include(TSML_PATH . '/includes/init.php');
include(TSML_PATH . '/includes/save.php');
include(TSML_PATH . '/includes/shortcodes.php');
include(TSML_PATH . '/includes/widgets.php');
include(TSML_PATH . '/includes/widgets_init.php');

//these hooks need to be in this file
register_activation_hook(  __FILE__, 'tsml_change_activation_state');
register_deactivation_hook(__FILE__, 'tsml_change_activation_state');

//add cron hook (this is not ready yet)
//add_action('tsml_import_data_sources', 'tsml_import_data_sources');
