<?php $this->requestAction('/produits/shop');?>
<?php  foreach($produits as $produit){  ?>

	<div class="product col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item <?php echo $produit['Categorie']['id']; ?> <?php echo $produit['Sex']['id']; ?>">
		<!-- Block2 -->
		<div class="block2">

			<div class="block2-pic hov-img0 bl">
				<?php echo $this->Html->image('images/Uploaded_Photo/'.$produit['Image'][0]['name'],array('class'=>'img-product imgprod','alt'=>'IMG-PRODUCT')); ?>
				<a href="#" class="quickV block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1" id="<?php  echo $produit['Produit']['id']; ?>">
					Quick View
				</a>
			</div>

			<div>&nbsp;</div>

			<div class="block2-txt flex-w flex-t p-t-14" style="position:relative; right:20px;">
				<div class="block2-txt-child1 flex-col-l ">
					<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
						<span class="name"><?php echo ($produit['Produit']['name']); ?></span>
					</a>

					<span class="prix-prod stext-105 cl3">
									<?php echo ($produit['Produit']['prix']); ?> <span > MAD</span>
								</span>

				</div>

				<div class="block2-txt-child2 flex-r p-t-3">
					<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2 js-addwish-b2">
						<?php echo $this->Html->image('images/icons/icon-heart-01.png',array('alt'=>'aaaa','class'=>'icon-heart1 dis-block trans-04')) ?>
						<?php $var= $produit['Produit']['id']; ?>
						<?php echo $this->Html->image('images/icons/icon-heart-02.png',array('class'=>'like-img icon_like icon-heart2 dis-block trans-04 ab-t-l','alt'=>'ICON','id'=>"$var")); ?>
					</a>
				</div>

			</div>
		</div>
	</div>
<?php }  ?>


<style>
	.span{
		border:2px solid black;
		padding:5px;
	}
	.span:hover{
		border:2px solid red;
	}
</style>
