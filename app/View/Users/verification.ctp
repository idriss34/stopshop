


<?= $this->Html->css('util_log'); ?>
<?= $this->Html->css('main_log'); ?>



<div class="limiter">
	<div class="container-login100 " style="background-color: #00ad5f;" >
		<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54" style="width: 800px">
			<?php echo $this->Form->create('User'); ?>
			<span class="login100-form-title p-b-49">
						Your Email has been verified <br/>
					</span>
			<span class="login100-form-title p-b-49" style="font-size: 21px;">
							Thanks, You can Sign in with your Account
						</span>

			<div class="flex-col-c p-t-30">


				<a href="<?php echo $this->Html->url('/login'); ?>" class="txt2" style="font-size: 22px; color: green;">
					Sign in
				</a>
			</div>
			<?php echo $this->Form->end(); ?>

		</div>
	</div>
</div>


<div id="dropDownSelect1"></div>




