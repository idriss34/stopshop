
	<!-- Cart -->
<div class="wrap-header-cart js-panel-cart pan-cart">
	<div class="s-full js-hide-cart"></div>
		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="list-cart header-cart-wrapitem w-full">
					<?php
						$sumtot=0;
						$products=explode('|',$this->Session->read('panier'));
						if(!empty($products[0])){
						$count_products=count($products);
						foreach($products as $product)
						{
							$prod[]=explode(',',$product);
						}
					?>
					<?php foreach($prod as $pr){ $price =  $pr[4] / $pr[1];  ?>
						<li class="header-cart-item flex-w flex-t m-b-12 product-li" >
							<label class="d-none" id="<?php echo $pr[0]; ?>"></label>
							<div class="header-cart-item-img prod-img">
								<img src="<?php echo $pr[5]; ?>" alt="IMG" id="img-cart-supp">
							</div>

							<div class="header-cart-item-txt p-t-8">
								<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
									<?php echo $pr[6]; ?>
								</a>

								<span class="header-cart-item-info rix">
								<?php echo $pr[1]; ?> x <?php echo $price; ?> MAD
								</span>
							</div>
						</li>
					<?php $sum = $pr[1]*($price);
						  $sumtot = $sumtot + $sum;
				 } ?>
					<?php }else{?>
						<div class="error-cart">
							<?php echo $this->element('errormsg'); } ?>
						</div>
				</ul>

				<div class="w-full">
					<div class="font-weight-bolder divtot header-cart-total w-full p-tb-40">
						Total: <span class="tot font-weight-bolder"> <?php echo $sumtot." MAD"; ?></span>
					</div>
					<div class=" header-cart-buttons flex-w w-full">
						<a href="<?php echo $this->Html->url(array('controller'=>'paniers','action'=>'index')); ?>" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="<?php echo $this->Html->url(array('controller'=>'paniers','action'=>'index')); ?>"ZZ class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
$(document).ready(function () {
	var num = <?php echo $count_products; ?>;
	$('.num-products').attr('data-notify',num);

});
</script>
