


<?= $this->Html->css('util_log'); ?>
<?= $this->Html->css('main_log'); ?>


<div class="limiter">
	<div class="container-login100" >
		<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
			<?php echo $this->Form->create('User'); ?>
			<span class="login100-form-title p-b-49" style="font-size: 23px; ">
						Change password for @<?= $username; ?>
					</span>
			<div class=" msg Password d-none alert alert-danger" style="color:red;">
				Password must be at least 6 characters.
			</div>
			<div class="msg alert alert-danger Password1 d-none" style="color:red;">
				The new password you provided is weak and can be easily guessed. Your password was not saved. Please choose a stronger password..
			</div>
			<div class="msg alert alert-danger blank  d-none" style="color:red;">
				Password can't be blank.
			</div>

			<div class="wrap-input100 validate-input " data-validate="Password is required">
				<span class="label-input100">Password</span>
				<input class="input100 password" type="password" name="data[User][password]" placeholder="Type your Confirm password">
				<span class="focus-input100" data-symbol="&#xf190;"></span>
			</div>

			<div class="wrap-input100 validate-input m-t-20" data-validate="Password is required">
				<span class="label-input100">Confirm Password</span>
				<input class="input100 repassword" type="password"  placeholder="Type your password">
				<span class="focus-input100" data-symbol="&#xf190;"></span>
			</div>

			<div class="container-login100-form-btn m-t-30">
				<div class="wrap-login100-form-btn">
					<div class="login100-form-bgbtn"></div>
					<button type="submit" class="login100-form-btn change-pass" >Change password</button>
				</div>
			</div>



			<?php echo $this->Form->end(); ?>

		</div>
	</div>
</div>


<div id="dropDownSelect1"></div>


<?php echo $this->Html->script('/login/main'); ?>


<script>
	(function($) {
		$('.change-pass').click(function (event)
		{
			var password = $(".password").val();
			var confirm_password = $(".repassword").val();
			if(password == '' || confirm_password == '' )
			{
				event.preventDefault();
				$('.blank').removeClass('d-none');
			}
			else
			{
				$('.blank').addClass('d-none');
			}
			if(password != confirm_password )
			{
				event.preventDefault();
				$('.Password1').removeClass('d-none');
			}
			else
			{
				$('.Password1').addClass('d-none');
			}
			if(password.length < 6)
			{
				event.preventDefault();
				$('.Password').removeClass('d-none');
			}
			else
			{
				$('.Password').addClass('d-none');
			}
		});
	})(jQuery);
</script>

