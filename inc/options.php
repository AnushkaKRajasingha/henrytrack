<?php
if (!defined('WPHT')) {
	define('WPHT', 'WPHT');
}
require_once 'classes/plugin-init_var.php';
$plugin_var = new init_var();
$plugin_var->_initVar();
require_once WPHT_CLS_DIR.'/plugin-core.php';
$_pluginCore = new Plugin_Core();

/*


add_action('checkclientip', 'ipdetect_handler');
function ipdetect_handler(){
	$ip = $_SERVER['HTTP_CLIENT_IP']?:($_SERVER['HTTP_X_FORWARDE‌​D_FOR']?:$_SERVER['REMOTE_ADDR']);	//var_dump($ip);
	return $ip;
}

function usertrackscript() {
	if (!is_admin()) {
		$date = new DateTime();
		wp_enqueue_script( 'usertrack_script', admin_url( 'admin-ajax.php' ).'?action=track_request_ajax', array(), '1.0.'.$date->getTimestamp(), true );
	}
}
add_action( 'wp_enqueue_scripts', 'usertrackscript' );
add_action( 'wp_ajax_nopriv_track_request_ajax', 'track_request_ajax' );
function track_request_ajax() {
	apply_filters('checkclientip',$ref);
	var_dump($ref);
	exit;
}*/