<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->library('session');
?>

<div id="login_form">
	<?php
		echo $this->session->userdata('msg'); 
		$this->session->set_userdata('msg', NULL);
		echo $this->session->userdata('msg'); 
		 if(isset($account_created)){ ?>
		<h3><?php echo $account_created; ?></h3>
	<?php } else { ?>
		<h2>Login, Please</h2>
	<?php }	?>
	
	<?php
		echo form_open('login/validate_credentials');
		echo form_input('email','Email');
		echo form_password('password','','placeholder="Password" class="password');
		echo form_label('','lbltext');
		echo anchor('login/signup','Create Account');
	?>
	<input type="submit" name="submit" value="Login"/>
	<?php
		echo form_close();
	?>
</div>