<?php echo $this->element('header'); ?>
	<!-- Shoping Cart -->
	<?php
		$userinfo = $userinfo['User'];
	 ?>
	<form class="bg0 p-t-75 p-b-85 container-fluid" style="margin-left: 30px;">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50" style="position: relative; right: 300px;" >
					<div class=" m-r--38 m-lr-0-xl " style="width: 900px; position: relative; left: -50px;">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1 ">Product</th>
									<th class="column-2"></th>
									<th class="column-3 text-center">Price</th>
									<th class="column-4 text-center">Size</th>
									<th class="column-5 text-center">Color</th>
									<th class="column-6 text-center">Quantity</th>
<!--									<th class="column-7 text-center"> Total</th>-->
								</tr>

								<?php if(!empty($products)){ ?>
								<?php $i=0;$subtot=0;
									foreach($products as $prod_pan)
								   {
										$sum= $prod_pan[4] * $prod_pan[1];
								?>
								<tr class="table_row">
											<td class="column-1">
												<div class="Prod supp how-itemcart1"  produit-id="<?php echo $prod_pan[0]; ?>" produit-qte="<?php echo $prod_pan[1]; ?>">
													<img src="<?php echo $prod_pan[5]; ?>" alt="IMG"/>
												</div>
											</td>
											<td class="column-2 text-center"> <?php echo $prod_pan[6] ; ?></td>
											<td class="column-3 text-center"> <?php echo $prod_pan[4] ; ?> MAD</td>
											<td class="column-4 text-center" >
												<div class="rs1-select2 bor8 bg0" style="width: 140px;">
													<select class="js-select2 drop-down" name="time">
														<option ><?= $prod_pan[3]  ?></option>
														<?php $colors = array("Size S", "Size M", "Size L",'Size XL');
														foreach ($colors as $color){
															if($prod_pan[3] == $color){
																$colors = \array_diff($colors, [$prod_pan[3]]);
															}
														}
														foreach ($colors as $color){ ?>
															<option ><?= $color; ?></option>
														<?php	}
														?>
													</select>
													<div class="dropDownSelect2"></div>
												</div>

											</td>


									<td class="column-5 text-center">
													<div class="rs1-select2 bor8 bg0" style="width: 140px;">
														<select class=" js-select2 dropd" name="time">
															<option ><?= $prod_pan[2]  ?></option>
															<?php $colors = array("Red", "Blue", "White",'Grey');
																foreach ($colors as $color){
																	if($prod_pan[2] == $color){
																		$colors = \array_diff($colors, [$prod_pan[2]]);
																	}
																}
																foreach ($colors as $color){ ?>
																	<option ><?= $color; ?></option>
																<?php	}
															?>
														</select>
														<div class="dropDownSelect2"></div>
													</div>
											</td>
											<td class="column-6 text-center">
												<div class="wrap-num-product flex-w m-l-auto m-r-5">
													<div class="down btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
														<i class="fs-16 zmdi zmdi-minus"></i>
													</div>
													<input  produit-id="<?php echo $prod_pan[0]; ?>" id="inp_qte<?php echo $i; ?>" class="mtext-104 cl3 txt-center num-product" type="number" name="num-product2" value="<?php echo $prod_pan[1]; ?>">
													<div class="up btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m" style="z-index: 3000;">
														<i class="fs-16 zmdi zmdi-plus"></i>
													</div>
												</div>
											</td>
<!--											<td class="prix_tot column-7">--><?php //echo $sum; ?><!-- MAD</td>-->
											<?php  $subtot=$subtot+$sum; ?>
										</tr>
								   <?php  $i++;}} ?>
							</table>
						</div>
						<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
							<div class="flex-w flex-m m-r-20 m-tb-5">
								<input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Coupon Code">
								<div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
									Apply coupon
								</div>
							</div>
							<button  class="update_sess flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
								Update Cart
							</button>
						</div>
					</div>
				</div>
				<div class="col-sm-10 col-lg-7 col-xl-5  m-b-150" style="right: 10px;position: absolute;">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Cart Totals
						</h4>
						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									Subtotal:
								</span>
							</div>
							<div class="size-209">
								<span class="mtext-110 cl2 totalpay">
									<?php if(!empty($products)){ echo $subtot.' MAD';}else{ echo '0 MAD';} ?>
								</span>
							</div>
						</div>
						<div class="flex-w flex-t bor12 p-t-15 p-b-30">
							<div class="size-208 w-full-ssm">
								<span class="stext-110 cl2">
									Shipping:
								</span>
							</div>
							<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
								<p class="stext-111 cl6 p-t-2">
									There are no shipping methods available. Please double check your address, or contact us if you need any help.
								</p>
								<div class="p-t-15">
									<span class="stext-112 cl8">
										Calculate Shipping
									</span>
									<div class="flex-w">
										<div class="flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer">
											Update Totals
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
								<span class=" mtext-101 cl2">
									Total:
								</span>
							</div>
							<div class="size-209 p-t-1">
								<span class="mtext-110 cl2 totalpay">
									<?php if(!empty($products)){ echo $subtot.' MAD';}else{ echo '0 MAD';} ?>
								</span>
							</div>
						</div>
						<span class="js-addCommande paymentt flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
							Proceed to Checkout
						</span>
					<div class="momo">
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="m-b-250"></div>
		<script>

		 	$('.paymentt').click(function(){
				 var prix=$('.prix_tot').html();
				 var email= '<?php echo $userinfo['email']?>';

				var name= '<?php echo $userinfo['firstName'] . '' .   $userinfo['lastName']?>';
				 var adress= '<?php echo $userinfo['adress']?>';
				 var tel= '<?php echo $userinfo['tel']?>';
				 var cin = '<?php echo $userinfo['cin']?>';
				 if(name== '' || adress== '' || tel== '' || cin == '')
				 {
					$('.momo').empty().append('<div>&nbsp;</div><div class="alert alert-danger text-center">Please complete your profil Infos <strong><a href="<?php echo $this->Html->url(array('controller'=>'users','action'=>'editpr')); ?>">here</a></strong></div>');
				 }
				 else{
					$.ajax({
					type:'POST',
					url:'/wedding1/paniers/payment',
					data:{'Prix_tot':prix,'name': name,'adress':adress,'tel':tel,'cin':cin,'email':email},
					success:function(data){
					}
					});
					var nameProduct = $(this).html();
					swal(nameProduct, "is added to Commandes !", "success");
					$('.table_row').remove();
					$('.totalpay').empty().append('0 MAD');
					$('.num-products').attr('data-notify',0);

				 }

			});

			$('.update_sess').click(function(e){
				// e.preventDefault();
						var count = <?php echo $i; ?> ;
						var produits=[];
				$('tbody > .table_row').each(function (index) {
					var tr =$('tbody > .table_row')[index];

					var id= $(tr).find('.Prod').attr('produit-id');
					var qte= $('#inp_qte'+index).attr('value');
					var size = $(tr).find('.select2-selection__rendered')[0];
					var color = $(tr).find('.select2-selection__rendered')[1];
					size = $(size).attr('title');
					color = $(color).attr('title');
					produits[index]=[id,qte,size,color];
				});
				$.ajax({
					type:"post",
					url:"/wedding1/paniers/editpanier",
					data:{"produits":produits},
					success:function(data){
					}
				});
			});
			$('.supp').click(function(){
				var count = <?php echo $i; ?> ;
					var id= $(this).attr('produit-id');
					var qte= $(this).attr('produit-qte');
					var produit_id=id;
					$(this).parent().parent().remove();
					$.ajax({
					type:"post",
					url:"/wedding1/paniers/deletepanier",
					data:{"produit_id":produit_id},
					success:function(data){

					}
				});
			});
			$(document).ready(function () {
				var drop = $('.drop-down > option');
				$('.drop-down > option').each(function (index) {
					console.log(index);
				});

			});
		</script>
	</form>

	<?php echo $this->element('footer'); ?>
