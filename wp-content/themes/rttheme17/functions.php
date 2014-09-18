<?php
#-----------------------------------------
#	RT-Theme functions.php
#	version: 1.0
#-----------------------------------------
include 'products_meta.php';
include 'themeset.php';
include 'delete.php';
// include 'create_table.php';
# start user session
if( session_id() == '' && !headers_sent() ) {
	session_start(); 
}

# Check WP Version
function rt_check_WP_version(){
global $wp_version, $load_msg;
	if (version_compare($wp_version,"3.7","<"))
	{
		$load_msg = '<div id="notice" class="error"><p><strong><h3>WORDPRESS VERSION ERROR!</h3>This theme requires WordPress Version 3.5 or higher to run. Please upgrade your WordPress version!</strong> <br /><br />>> <a href="http://codex.wordpress.org/Upgrading_WordPress">How can I upgrade my WordPress version?</a><br /><br /></div>';
	}else{
		$load_msg = ""; 
	}
	
	return $load_msg;
}

# Check PHP Version
if (version_compare(PHP_VERSION, '5.3.0', '<')) {
global $load_msg;

	$PHP_version_error = '<div id="notice" class="error"><p><strong><h3>THEME ERROR!</h3>This theme requires PHP Version 5 or higher to run. Please upgrade your php version!</strong> <br />You can contact your hosting provider to upgrade PHP version of your website.</p> </div>';
	if(is_admin()){	
		add_action('admin_notices','errorfunction');
	}else{
		echo $PHP_version_error;
		die;
	}
	
	function errorfunction(){
		global $PHP_version_error;
		echo $PHP_version_error;
	}
	
	return $load_msg;
}

# Define Content Width
if ( ! isset( $content_width ) ) $content_width = 606;

# Load the theme
if(rt_check_WP_version()){
	if(is_admin()){
		add_action( 'admin_notices', $c = create_function( '', 'echo "' . addcslashes( $load_msg, '"' ) . '";' ) );
	}
	else{
		exit($load_msg);
	} 
}else{
	require_once (get_template_directory() . '/rt-framework/classes/loading.php');
	$rttheme = new RTTheme();
	$rttheme->start(array('theme' => 'RT-THEME 17','slug' => 'rttheme','version' => '1.0'));
}

# Remove Google Fonts
class Disable_Google_Fonts {
public function __construct() {
add_filter( 'gettext_with_context', array( $this, 'disable_open_sans' ), 888, 4 );
}
public function disable_open_sans( $translations, $text, $context, $domain ) {
if ( 'Open Sans font: on or off' == $context && 'on' == $text ) {
$translations = 'off';
}
return $translations;
}
}
$disable_google_fonts = new Disable_Google_Fonts;
?>