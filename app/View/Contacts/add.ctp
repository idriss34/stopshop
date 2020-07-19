<?php echo $this->element('header'); ?>
<style>
	.how-pos4{
		top:calc(50% - px);
	}
</style>

	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('<?= $this->Html->url('/img/images/bg-02.jpg'); ?>');">
		<h2 class="ltext-105 cl0 txt-center">
			Contact
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Send Us A Message
						</h4>
						<?php echo $this->Form->create('Contact'); ?>
						<div class="bor8 m-b-20 how-pos4-parent">
							<input name="data[Contact][email]" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="Your Email Address">
							<?php echo $this->Html->image('images/icons/icon-email.png',array('alt'=>'ICON','class'=>'how-pos4 pointer-none')); ?>
						</div>

						<div class="bor8 m-b-30">
							<textarea name="data[Contact][sujet]" class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="msg" placeholder="How Can We Help?"></textarea>
						</div>

						<button type="submit" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
							Submit
						</button>
						<?php echo $this->Form->end(); ?>
				</div>

				<div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-map-marker"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Address
							</span>

							<p class="stext-115 cl6 size-213 p-t-18">
								Coza Store Center 8th floor, 379 Hudson St, New York, NY 10018 US
							</p>
						</div>
					</div>

					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-phone-handset"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Lets Talk
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								+1 800 1236879
							</p>
						</div>
					</div>

					<div class="flex-w w-full">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-envelope"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Sale Support
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								contact@example.com
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	


	
			<!-- <div class="card-header text-center">
				<h3>Contacts</h3>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-12 ">
						<?php //echo  $this->Form->create('Contact'); ?>
							<?php
							//echo $this->Form->input('objet',array("class"=>"form-control","aria-describedby"=>"passwordHelp","placeholder"=>"Objet","div"=>array('class'=>'form-group')));
							//echo $this->Form->input('sujet',array("class"=>"form-control","aria-describedby"=>"passwordHelp","placeholder"=>"Objet","div"=>array('class'=>'form-group')));
							?>
							<div class="text-center">
								<button type="submit" class="btn btn-primary">Ajouter</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->


<?php echo $this->element('footer'); ?>

