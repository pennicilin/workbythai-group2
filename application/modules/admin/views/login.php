<div class="login-box">

	<div class="login-logo"><b><img style="width: 50%;" src="<?php echo base_url('assets/images/electricity-logo.png'); ?>"></b></div>

	<div class="login-box-body">
		<p class="login-box-msg"></p>
		<?php echo $form->open(); ?>
			<?php echo $form->messages(); ?>
			<?php echo $form->bs3_text('Username:', 'username', ENVIRONMENT==='development' ? 'webmaster' : ''); ?>
			<?php echo $form->bs3_password('Password:', 'password', ENVIRONMENT==='development' ? 'webmaster' : ''); ?>
			<div class="row">
				<div class="col-xs-8">
					<div class="checkbox">
						<label><input type="checkbox" name="remember"> Remember me</label>
					</div>
				</div>
				<div class="col-xs-4">
					<?php echo $form->bs3_submit('Login', 'btn btn-primary btn-block btn-flat'); ?>
				</div>
			</div>
		<?php echo $form->close(); ?>
	</div>

</div>