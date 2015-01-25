<?php
/*
Plugin Name:	WPExplorer Services Editor
Plugin URI:		http://www.wpexplorer.com
Description:	Use this plugin to rename your services in your Free WordPress theme by WPExplorer
Version:		1.0
Author:			WPExplorer
Author URI:		http://www.wpexplorer.com
License:		GPLv2
*/


// Plugin Text Domain
load_plugin_textdomain( 'wpexsr', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

// Include Admin Framework
include_once( dirname( __FILE__ ) . '/admin/admin.php' );

// Include functions
require_once( dirname(__FILE__) . '/inc/filters.php');