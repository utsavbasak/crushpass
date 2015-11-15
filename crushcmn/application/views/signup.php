<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->library('session');
?>
<div id="register_form">
	<h1>Create an account</h1>
	<?php
		echo form_open('login/create_member');
		echo form_input('name', set_value('name','Name'));
		echo form_input('email',set_value('email','Email address'));
		echo form_password('password','','placeholder="Password" class="password"');
		echo form_password('password_confirm','','placeholder="Confirm Password" class="password"');
	?>
		<input type="date" name="dob" required="required"/>
	<?php echo form_submit('submit','Create Account'); ?>
	<?php echo validation_errors('<p class="error">'); ?>
</div>