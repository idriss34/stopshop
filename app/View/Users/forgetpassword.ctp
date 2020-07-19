


<?= $this->Html->css('util_log'); ?>
<?= $this->Html->css('main_log'); ?>

<style>
	.focus-input100::after{
		padding-top: 24px;
	}
</style>
<div class="limiter">
	<div class="container-login100" >
		<div class="wrap-login100 p-l-55 p-r-55 p-t-30 p-b-54">
			<?php echo $this->Form->create('User'); ?>
			<span class="login100-form-title p-b-49" style="font-size: 23px; ">
						Reset your password
					</span>
					<?php
					if($message){ ?>
						<div class="alert alert-<?= $type ?> text-center" >
							<?= $message ?>
						</div>
					<?php	}
					?>
			<?php if($type == 'danger' || $type == null){ ?>
				<div class="msg Email d-none alert alert-danger" style="color:red;">
					Please put a valid email address.
				</div>
			<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
				<span class="label-input100">Enter your user account's verified email address and we will send you a password reset link.</span>
				<input class="input100" type="text" id="email" name="data[User][email]" placeholder="Type your E-mail">
				<span class="focus-input100" data-symbol="&#xf206;"></span>
			</div>
			<div class="container-login100-form-btn">
				<div class="wrap-login100-form-btn">
					<div class="login100-form-bgbtn"></div>
					<button type="submit" class="login100-form-btn reset" >Send Password reset email</button>
				</div>
			</div>
			<?php } ?>



			<?php echo $this->Form->end(); ?>

		</div>
	</div>
</div>


<div id="dropDownSelect1"></div>


<?php echo $this->Html->script('/login/main'); ?>

<script>
	(function($) {
		$('.reset').click(function (event)
		{
			var email = $('#email').val();
			var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			if(!email.match(mailformat))
			{
				event.preventDefault();
				$('.Email').removeClass('d-none');
			}
			else
			{
				$('.Email').addClass('d-none');
			}
	});
	})(jQuery);
</script>


