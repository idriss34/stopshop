
	<!-- Commandess -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<div class="wrap-header-cart js-panel-cart commande">
		<div class="s-full js-hide-cart"></div>
		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Detail Commande
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="list-detail header-cart-wrapitem w-full">



				</ul>

				<div class="w-full">
						<div class="total-cmnd font-weight-bolder divtot header-cart-total w-full p-tb-40">
							Total: <span class="tot-cmnd font-weight-bolder"> </span>
						</div>
					<div class=" header-cart-buttons flex-w w-full col d-flex justify-content-center">
						<button  onClick="removeCommandCascade()" class="removebtn flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							Remove it
						</button>


					</div>
				</div>
			</div>
		</div>
	</div>
<script>


	function removeCommandCascade()
	{
		var idcmnd = $('.comndup').attr('id');
		if(idcmnd)
		{


					 $('ul a li').each(function (index) {
						if($(this).attr('data') == idcmnd)
						{
							if($(this).find('svg').attr('data-icon') == 'check-circle')
							{
								var nameProduct = $(this).text();
								swal(nameProduct, "You can't remove an approved command !", "error");
								return ;
							}
							$.ajax({
								type:'DELETE',
								url:'/wedding1/commandes/delete',
								data:{'idcmnd':idcmnd},
								success:function(data){
								}
							});
							$(this).parent().remove();
							$('.comndup ').remove();
							$('.tot-cmnd ').remove();
							var nameProduct = $(this).text();
							swal(nameProduct, "it's removed from Commandes !", "success");
						}


					});

		}
	}
</script>
