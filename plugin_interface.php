<?php
// create custom plugin settings menu
add_action('admin_menu', 'jvcf7_create_menu');
add_action('admin_notices', 'jvcf7_pro_notification');

if (isset($_GET['hidemsg']) == 1){
	update_option('jvcf7_hide_pro_notice','yes');
}

function jvcf7_pro_notification(){
	if (get_option('jvcf7_hide_pro_notice') != 'yes'){
		 echo '<div class="updated">
       <p><b>Jquery Validation for Contact Form 7 Pro</b> now has<br/>
	   <ol>
	   <li>Additional validation methods like Minimum Number, Maximum Number, Minimum Length, Maximum Length, Range Length, Range, Equal To, Extension, Require Group and with more validation error theme.</li>
	   <li>4 different <a href="http://dnesscarkey.com/jquery-validation/validation-error-theme/" target="_blank">validation error theme</a> to choose from.</li>
	   <li>Option to change <a href="http://dnesscarkey.com/jquery-validation/change-error-message/" target="_blank">default error message</a>.</li>
	   </ol>
	   Click <a href="http://dnesscarkey.com/jquery-validation/pro-version-demo/" target="_blank"><strong>HERE</strong></a> for demo<br/><a style="display:block;text-align:right;" href="options-general.php?page=jquery-validation-for-contact-form-7/plugin_interface.php&hidemsg=1">Hide This Message</a></p>
	   </div>';
	}
}

function jvcf7_create_menu() {
	add_options_page('Jquery Validation For Contact Form 7', 'Jquery Validation For Contact Form 7', 'administrator', __FILE__, 'jvcf7_settings_page');
	add_action('admin_init', 'register_jvcf7settings');
}
 
function register_jvcf7settings() {
	register_setting('jvcf7-settings-group', 'jvcf7_show_label_error');
	register_setting('jvcf7-settings-group', 'jvcf7_highlight_error_field');
	register_setting('jvcf7-settings-group', 'jvcf7_invalid_field_design');
	
} 

function jvcf7_settings_page() {	
	global $optionValues;
	$jvcf7_show_label_error 						= $optionValues['jvcf7_show_label_error'];
	$jvcf7_highlight_error_field 					= $optionValues['jvcf7_highlight_error_field'];
	include('includes/jvcf7_header.php');
	include('includes/jvcf7_settings.php');
	include('includes/jvcf7_instructions.php');
	include('includes/jvcf7_footer.php');	
}