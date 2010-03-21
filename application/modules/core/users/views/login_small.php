<?php echo form_open('users/login', array('id'=>'login_small')); ?>

<div class="float-left" style="width:15em">
	<label for="email"><?php echo lang('user_email'); ?></label>
	<input type="text" id="email" name="email" maxlength="120" />
	
	<div class="spacer-bottom"></div>
	
	<label for="password"><?php echo lang('user_password'); ?></label>
	<input type="password" id="password" name="password" maxlength="20" />
</div>

<div class="float-right align-center spacer-left">
	<input type="image" src="<?php echo image_path('admin/bt-login.gif');?>" value="<?php echo lang('user_login_btn') ?>" name="btnLogin" />
<p><?php echo anchor('users/reset_pass', lang('user_reset_password_link'));?> | <?php echo anchor('register', lang('user_register_btn'));?></p>
</div>

<?php echo form_close(); ?>