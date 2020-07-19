<div class="wrap-header-cart js-panel-cart">
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
				<ul class="header-cart-wrapitem w-full">
					<?php $i=0; $sumtot=0;
						foreach($produits as $prod_pan)
						{  									
						$sumtot += $prod_pan[0]['Produit']['prix'] * $qte[$i];	
					?> 
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<?php echo $this->Html->image('images/Uploaded_Photo/'.$prod_pan[0]['Image'][0]['name'],array('alt'=>'IMG')); ?>
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								<?php echo $prod_pan[0]['Produit']['name'] ; ?>
							</a>

							<span class="header-cart-item-info">
							<?php echo $qte[$i]; ?> x  <?php echo $prod_pan[0]['Produit']['prix'] ; ?> $
							</span>
						</div>
					</li>
					<?php  $i++;} ?>
				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: $75.00
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>