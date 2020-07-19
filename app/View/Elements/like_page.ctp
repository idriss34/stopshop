	<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart likes">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart  flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Wish List
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>

			<div class="header-cart-content flex-w js-pscroll" style="width: 300px">
				<ul class="list-prod header-cart-wrapitem w-full">
					<!-- Wish List Product -->
					<?php
						 if($this->Session->read('Likes')!==null)
						 {
							$Likes=explode('|',$this->Session->read('Likes'));
							foreach($Likes as $product)
							{
								$prod[]=explode(',',$product);
							}
							if($prod[0][0] !== ''){
							foreach($prod as $pr)
							{  ?>

								<li class="list-likes header-cart-item flex-w flex-t m-b-12" id="<?php	echo $pr[0]; ?>" style="width: 300px;">
									<label class="d-none" id="<?php echo $pr[0]; ?>"></label>
									<div class="header-cart-item-img like-img">
									<img src="<?php	echo $pr[3]; ?>" alt="IMG">
								</div>

								<div class="header-cart-item-txt p-t-8">
									<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
										<?php	echo $pr[1]; ?>
									</a>

									<span class="header-cart-item-info">
									<?php	echo $pr[2]; ?>
									</span>
								</div>
							</li>

				<?php	}
						 }
						 else
						 {?>
						 <div class="error-likes">
							<?php echo $this->element('errormsg'); }} ?>
						 </div>

				</ul>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function () {
			var count_likes = $('.list-likes').length;
			$('.like_num ').attr('data-notify',count_likes);

		});
	</script>

