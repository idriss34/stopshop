


	<?= $this->Html->css('util_log'); ?>
	<?= $this->Html->css('main_log'); ?>


	<div class="limiter">
		<div class="container-login100" >
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<?php echo $this->Form->create('User'); ?>
					<span class="login100-form-title p-b-49">
						Login
					</span>
					<?php
					if($message){ ?>
						<div class="alert alert-<?= $type ?>">
							<?= $message ?>
						</div>
					<?php	}
					?>
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="data[User][username]" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="data[User][password]" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<div class="text-right p-t-8 p-b-31">
						<a href="<?php echo $this->Html->url('/forget_password'); ?>">
							Forgot password?
						</a>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
 							<button type="submit" class="login100-form-btn" >Connexion</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Or Sign Up Using
						</span>
					</div>

					<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>

					<div class="flex-col-c p-t-30">
						<span class="txt1 p-b-17">
							Or Sign Up Using
						</span>

						<a href="<?php echo $this->Html->url('/register'); ?>" class="txt2">
							Sign Up
						</a>
					</div>
					<?php echo $this->Form->end(); ?>

			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>


	<?php echo $this->Html->script('/login/main'); ?>




