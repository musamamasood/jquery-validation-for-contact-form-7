<?php
/* 
Plugin Name: Jquery Validation For Contact Form 7
Plugin URI: http://dnesscarkey.com/jquery-validation/
Description: This plugin integrates jquery validation in contact form 7
Author: Dinesh Karki
Version: 3.1
Author URI: http://www.dineshkarki.com.np
*/

/*  Copyright 2012  Dinesh Karki  (email : dnesskarki@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


$defaultOptionValues['jvcf7_show_label_error'] 			= "errorMsgshow";
$defaultOptionValues['jvcf7_invalid_field_design'] 		= "theme_1";

$optionValues = array();
foreach ($defaultOptionValues as $key=>$value){
	$optionValues[$key] = get_option($key);
	if (empty($optionValues[$key])){
		update_option($key, $value);
		$optionValues[$key] = $value;
	}
}

function jvcf7_validation_js(){
  global $optionValues;
  echo '<script>
  	jvcf7_loading_url= "'.plugins_url('contact-form-7/images/ajax-loader.gif').'";
    jvcf7_invalid_field_design = "'.$optionValues["jvcf7_invalid_field_design"].'";
	jvcf7_show_label_error = "'.$optionValues["jvcf7_show_label_error"].'";
  </script>';
  wp_enqueue_script('jquery');
  wp_enqueue_script('jquery-form');
  wp_enqueue_script('jvcf7_jquery_validate', plugins_url('jquery-validation-for-contact-form-7/js/jquery.validate.min.js'), array('jquery'), '', true);
  wp_enqueue_script('jvcf7_jquery_validate_iban', plugins_url('jquery-validation-for-contact-form-7/js/iban.js'), array('jquery', 'jvcf7_jquery_validate'), '', true);
  wp_dequeue_script( 'contact-form-7' );  
  wp_enqueue_script('jvcf7_validation_custom', plugins_url('jquery-validation-for-contact-form-7/js/jquery.jvcf7_validation.js'), '', '', true);
  
  wp_register_style('jvcf7_style', plugins_url('jquery-validation-for-contact-form-7/css/jvcf7_validate.css'));
  wp_enqueue_style('jvcf7_style');	
}

function jvcf7_adminCsslibs(){
	wp_register_style('jvcf7_style', plugins_url('jquery-validation-for-contact-form-7/css/jvcf7_validate.css'));
    wp_enqueue_style('jvcf7_style');	
}

add_action('wp_enqueue_scripts', 'jvcf7_validation_js');
add_action("admin_print_styles", 'jvcf7_adminCsslibs');

include('plugin_interface.php');
?>