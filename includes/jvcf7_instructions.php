<table class="wp-list-table widefat fixed bookmarks">
    <thead>
        <tr>
            <th><strong>Validation Rules</strong></th>
        </tr>
    </thead>
    <tbody>
    <tr>
        <td>
        <h4>Please check snapshot below to use this validaton methods.</h4>        
		<ol class="validation_rules">
            <li><strong>Required validation</strong> : When you need to make field required.<br/>
			Just tick required field in contact form 7 (Snapshot below)</li>
            
            <li><strong>Email validation</strong> : When you need to validate email address.<br />
            Just use Contact Form 7 email field</li>
            
            <li><strong>Url validation</strong> : When you need to validate urls.<br />
			Use class <strong>url</strong>. Validates : http://www.example.com </li>
            
            <li><strong>Date validation</strong> : When you need to validate date.<br/>
            Use class <strong>date</strong>. Validates : 2015-03-12</li>
            
            <li><strong>Number validation</strong> : When you need to validate only numbers.<br/>
            Use class <strong>number</strong>. Validates : 7645.46 </li>
            
            <li><strong>Digit only validation</strong> : Only accepts digits. No decimals accepted.<br/>
            Use class <strong>digits</strong>. Validates : 7645</li>
            
            <li><strong>Credit Card validation</strong> : When you need to validate credit card number.<br/>
            Use class <strong>creditcard</strong>. Validates: 5520010511051954</li>
            
            <li><strong>US Phone number validation</strong> : When you need to validate US Phone number.<br/>
            Use class <strong>phoneUS</strong>. Validates: 837-345-3456</li>

            <li><strong>IBAN number validation</strong> : When you need to validate IBAN number.<br/>
                Use class <strong>iban</strong>. Validates: PK36SCBL0000001123456702</li>
        </ol>
        
        <h4>Following validation methods are only available in Pro version.</h4>        
        
        <ol>    
            <li><strong>Minimum Number</strong> : Minimum numeric value user can input. Like: Age must be 18+.<br/>
            Use class <strong>JVmin-#</strong>. Where <strong>#</strong> is minimum numeric value required.</li>
            
            <li><strong>Maximum Number</strong> : Maximum numeric value user can input. Like: Age mustt not be above 100.<br/>
            Use class <strong>JVmax-#</strong>. Where <strong>#</strong> is maximum numeric value required.</li>
            
            <li><strong>Minimum Length</strong> : Minimum length user can input. Like: Name should be atleast 3 characters long.<br/> 
            Use class <strong>JVminlength-#</strong>. Where <strong>#</strong> is minimum length required.</li>
            
            <li><strong>Maximum Length</strong> : Maximum length user can input. Like: Name shouldn't exceed more than 30 characters.<br />
            Use class <strong>JVmaxlength-#</strong>. Where <strong>#</strong> is maximum length allowed.</li>
            
            <li><strong>Range Length</strong> : Minimum and maximum number of characters user can input. Like: username should atleast 3 and not more than 20 characters.<br />
Use class <strong>JVrangelength-#-*</strong>. Where <strong>#</strong> is minimum length required and <strong>*</strong> is maximum length allowed.</li>
            
            <li><strong>Range</strong> : Minimum and maximum number value user can input. Like: Age should between 18 - 60.<br/>
            Use class <strong>JVrange-#-*</strong>. Where <strong>#</strong> is minimum numeric value required and <strong>*</strong> is maximum numeric value allowed.</li>
            
            <li><strong>Equal To</strong> : When you need to ask same value similar to previous element. Like: Password Confirmation <br />
Use class <strong>JVequalTo-##########</strong>. Where <strong>##########</strong> is the field name you want to tally with.</li>
            
            <li><strong>JVextension</strong> : Only allow certain files format for user to upload. Like : jpg, png only.
            Use class <strong>JVextension-ext1_ext2_ext3</strong>. Where <strong>ext1, ext2, ext3</strong> are the file extension you allow user to upload.</li>
            
            <li><strong>JVrequireGroup</strong> : When given number of fields in a group need to be required. Like: Within a group of three phone numbers, ensure at least one is complete 
            Use class <strong>JVrequireGroup-#_GROUPNAME</strong>. Where <strong>#</strong> is no of fields uses must fill up from the group and <strong>GROUPNAME</strong> is a field group name. Like: phonenumbers</li>
            
        </ol>

</td>
</tr>
</tbody>
</table>
<br/>
<table class="wp-list-table widefat fixed bookmarks">
    <thead>
        <tr>
            <th><strong>Instructions</strong></th>
        </tr>
    </thead>
    <tbody>
    <tr>
        <td>
		<ol>
    	<li>You can add validation rules like url, date, dateiso, number, digits, creditcard, phoneUS, iban from the class field of contact form 7. Check the snapshot below.<br/><img src="<?php echo plugins_url('jquery-validation-for-contact-form-7/img/add_validation.png'); ?>" />
		</li>
        <li>Field that has been marked as required will be added <em>required</em> validation rule. You don't need to add required as the class in the field.</li>
        <li>Email field from contact form 7 will be automatically added with <em>email</em> validation rule. You don't need to add email as class in the field</li>
        <li>This plugin works with the help of jquery validation. Visit <a href="http://docs.jquery.com/Plugins/Validation" target="_blank">http://docs.jquery.com/Plugins/Validation</a> for more details about the plugin.</li>        
        <li>Click <a href="http://dineshkarki.com.np/forums/forum/jquery-validation-for-contact-form">here</a> to report any bugs for this plugin.</li>
    </ol>

</td>
</tr>
</tbody>
</table>
<br/>