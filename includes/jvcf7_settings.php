<form method="post" action="options.php">
<?php settings_fields( 'jvcf7-settings-group' ); ?>
<table class="wp-list-table widefat fixed bookmarks">
    <thead>
        <tr>
            <th><strong>Settings</strong></th>
        </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            
            <table class="form-table jvcf7_form">
                <tr valign="top">
                    <td scope="row">Show Error Message Next to the Field ?</td>
                    <td>
                        <select name="jvcf7_show_label_error" style="width:150px;"  />
                            <option value="errorMsgshow" <?php echo $jvcf7_show_label_error == 'errorMsgshow'?'selected="selected"':''; ?>>Yes</option>
                            <option value="noErrorMsg" <?php echo $jvcf7_show_label_error == 'noErrorMsg'?'selected="selected"':''; ?>>No</option>
                        </select>
                        
                    </td>
                </tr>
                
                <tr valign="top">
                    <td scope="row">Invalid Field Indication</td>
                    <td>
                        <select name="jvcf7_invalid_field_design" style="width:150px;"  />
                            <option value="theme_0" <?php echo $optionValues['jvcf7_invalid_field_design'] == 'theme_0'?'selected="selected"':''; ?>>-None-</option>
                            <option value="theme_1" <?php echo $optionValues['jvcf7_invalid_field_design'] == 'theme_1'?'selected="selected"':''; ?>>Theme 1</option>
                            <option value="" disabled="disabled">For more theme. Check our Pro version.</option>
                        </select>
                    </td>
                    <?php /*
                    <td>
                    <em>Demo:</em> <br/>
                        <img src="<?php echo plugins_url('jquery-validation-for-contact-form-7/img/highlight_invalid_fields.png'); ?>" />
                    </td>
					*/ ?>
                    
                </tr>
            </table>
            
            <p class="submit">
            <input type="submit" name="submit-jvcf7" class="button-primary" value="<?php _e('Save Changes') ?>" />
            </p>
            
            
        </td>
        
    </tr>
    </tbody>
</table>
<br/>
</form>