<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php //echo $this->Html->image('images/icons/favicon.png'); ?>
	<?php echo $this->Html->css('../vendor/bootstrap/css/bootstrap.min'); ?>
	<?php echo $this->Html->css('../fonts/font-awesome-4.7.0/css/font-awesome.min');?>
	<?= $this->Html->css('../fonts/iconic/css/material-design-iconic-font.min'); ?>
	<?= $this->Html->css('../fonts/linearicons-v1.0.0/icon-font.min'); ?>

	<?= $this->Html->css('../vendor/animate/animate'); ?>
	<?= $this->Html->css('../vendor/css-hamburgers/hamburgers.min') ;?>
	<?= $this->Html->css('../vendor/animsition/css/animsition.min'); ?>
	<?= $this->Html->css('../vendor/select2/select2.min'); ?>
	<?= $this->Html->css('../vendor/daterangepicker/daterangepicker'); ?>
	<?= $this->Html->css('../vendor/slick/slick'); ?>
	<?= $this->Html->css('../vendor/MagnificPopup/magnific-popup'); ?>
	<?= $this->Html->css('../vendor/perfect-scrollbar/perfect-scrollbar'); ?>
	<?= $this->Html->css('util'); ?>
	<?= $this->Html->css('main'); ?>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<?php echo $this->Html->script('../vendor/jquery/jquery-3.2.1.min'); ?>

	<?php echo $this->Html->script('../vendor/animsition/js/animsition.min'); ?>
	<!--===============================================================================================-->
	<?php echo $this->Html->script('../vendor/bootstrap/js/popper'); ?>
	<?php echo $this->Html->script('../vendor/bootstrap/js/bootstrap.min'); ?>
	<!--===============================================================================================-->

	<?php echo $this->Html->script('../vendor/slick/slick.min'); ?>
	<?php echo $this->Html->script('slick-custom'); ?>
	<style>
		.btn-danger1{
			background-color: #dc3545;
			border-color: #dc3545;
			align-items:flex-start;
			flex-startbutton
			border-bottom-left-radius:4px;
			border-bottom-right-radius:4px;
			border-bottom-style:solid;
			border-bottom-width:1.11111px;
			border-image-outset:0;
			border-image-repeat:stretch;
			border-image-slice:100%;
			border-image-source:none;
			border-image-width:1;
			border-left-color:rgb(220, 53, 69);
			border-left-style:solid;
			border-left-width:1.11111px;
			border-right-color:rgb(220, 53, 69);
			border-right-style:solid;
			border-right-width:1.11111px;
			border-top-color:rgb(220, 53, 69);
			border-top-left-radius:4px;
			border-top-right-radius:4px;
			border-top-style:solid;
			border-top-width:1.11111px;
			box-sizing:border-box;
			color:rgb(255, 255, 255);
			cursor:pointer;
			display:inline-block;
			font-family:-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
			font-size:16px;
			font-stretch:100%;
			font-style:normal;
			font-variant-caps:normal;
			font-variant-east-asian:normal;
			font-variant-ligatures:normal;
			font-variant-numeric:normal;
			font-weight:400;
			height:37.5347px;
			letter-spacing:normal;
			line-height:24px;
			margin-bottom:0px;
			margin-left:0px;
			margin-right:0px;
			margin-top:0px;
			overflow-x:visible;
			overflow-y:visible;
			padding-bottom:6px;
			padding-left:12px;
			padding-right:12px;
			padding-top:6px;
			text-align:center;
			text-indent:0px;
			text-rendering:auto;
			text-shadow:none;
			text-size-adjust:100%;
			text-transform:none;
			transition-delay:0s, 0s, 0s, 0s;
			transition-duration:0.15s, 0.15s, 0.15s, 0.15s;
			transition-property:color, background-color, border-color, box-shadow;
			transition-timing-function:ease-in-out, ease-in-out, ease-in-out, ease-in-out;
			user-select:none;
			vertical-align:middle;
			white-space:nowrap;
			width:77.9861px;
			word-spacing:0px;
			writing-mode:horizontal-tb;
			-webkit-appearance:none;
			-webkit-tap-highlight-color:rgba(0, 0, 0, 0);
			-webkit-border-image:none;
		}
		.btn-gray{
			color: #fff;
			background-color: #6c757d;
			border-color: #6c757d;
			align-items:flex-start;
			background-color:rgb(108, 117, 125);
			#6c757d.btn-secondary
			-internal-light-dark-color(rgb(239, 239, 239), rgb(74, 74, 74))button
			border-bottom-color:rgb(108, 117, 125);
			border-bottom-left-radius:4px;
			border-bottom-right-radius:4px;
			0.25rem.btn
			0pxbutton
			border-bottom-style:solid;
			border-bottom-width:1.11111px;
			border-image-outset:0;
			border-image-repeat:stretch;
			border-image-slice:100%;
			initial.btn
			initialbutton
			border-image-source:none;
			border-image-width:1;
			border-left-color:rgb(108, 117, 125);
			border-left-style:solid;
			border-left-width:1.11111px;
			border-right-color:rgb(108, 117, 125);
			border-right-style:solid;
			border-right-width:1.11111px;
			border-top-color:rgb(108, 117, 125);
			border-top-left-radius:4px;
			border-top-right-radius:4px;
			border-top-style:solid;
			border-top-width:1.11111px;
			box-sizing:border-box;
			color:rgb(255, 255, 255);
			cursor:pointer;
			display:inline-block;
			font-family:-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
			font-size:16px;
			font-stretch:100%;
			font-style:normal;
			font-variant-caps:normal;
			font-variant-east-asian:normal;
			font-variant-ligatures:normal;
			font-variant-numeric:normal;
			font-weight:400;
			height:37.5347px;
			letter-spacing:normal;
			line-height:24px;
			margin-bottom:0px;
			margin-left:0px;
			margin-right:0px;
			margin-top:0px;
			overflow-x:visible;
			overflow-y:visible;
			padding-bottom:6px;
			padding-left:12px;
			padding-right:12px;
			padding-top:6px;
			text-align:center;
			text-indent:0px;
			text-rendering:auto;
			text-shadow:none;
			text-size-adjust:100%;
			text-transform:none;
			transition-delay:0s, 0s, 0s, 0s;
			transition-duration:0.15s, 0.15s, 0.15s, 0.15s;
			transition-property:color, background-color, border-color, box-shadow;
			transition-timing-function:ease-in-out, ease-in-out, ease-in-out, ease-in-out;
			user-select:none;
			vertical-align:middle;
			white-space:nowrap;
			width:99.7743px;
			word-spacing:0px;
			writing-mode:horizontal-tb;
			-webkit-appearance:none;
			-webkit-tap-highlight-color:rgba(0, 0, 0, 0);
			-webkit-border-image:none;
		}
		.btn-gray:hover{
			background-color: #5f666d !important;
		}
	</style>
</head>
<body class="animsition">

<!-- Header -->






<?php echo $this->fetch('content');
?>
<?php echo $this->element('cart'); ?>
<?php echo $this->element('like_page'); ?>
<?php echo $this->element('commande'); ?>
<?php echo $this->Html->script('quick_view'); ?>






<?php echo $this->Html->script('../bootstrap/js/bootstrap.min'); ?>
<?php echo $this->Html->script('../vendor/daterangepicker/moment.min'); ?>
<?php echo $this->Html->script('../vendor/daterangepicker/daterangepicker'); ?>
<?php echo $this->Html->script('../vendor/countdowntime/countdowntime'); ?>
<?php echo $this->Html->script('../vendor/select2/select2.min'); ?>
<script>
	$(".js-select2").each(function(){
		$(this).select2({
			minimumResultsForSearch: 20,
			dropdownParent: $(this).next('.dropDownSelect2')
		});
	})
</script>
<!--===============================================================================================-->
<?php echo $this->Html->script('../vendor/daterangepicker/moment.min'); ?>
<?php echo $this->Html->script('../vendor/daterangepicker/daterangepicker'); ?>
<!--===============================================================================================-->
<!--===============================================================================================-->
<?php echo $this->Html->script('../vendor/parallax100/parallax100'); ?>
<script>
	$('.parallax100').parallax100();
</script>
<!--===============================================================================================-->
<?php echo $this->Html->script('../vendor/MagnificPopup/jquery.magnific-popup.min'); ?>
<script>
	$('.gallery-lb').each(function() { // the containers for all your galleries
		$(this).magnificPopup({
			delegate: 'a', // the selector for gallery item
			type: 'image',
			gallery: {
				enabled:true
			},
			mainClass: 'mfp-fade'
		});
	});
</script>
<!--===============================================================================================-->
<?php echo $this->Html->script('../vendor/isotope/isotope.pkgd.min'); ?>
<!--===============================================================================================-->
<?php echo $this->Html->script('../vendor/sweetalert/sweetalert.min'); ?>
<script>

	$('.js-addwish-b2').on('click', function(e){
		e.preventDefault();
	});

	$('.js-addwish-b2').each(function(){
		$('.js-addwish-b2').click(function () {
			$('.error-likes').hide();
		});
		var nameProduct = $(this).parent().parent().find('.name').text();
		$(this).on('click', function(){
			var repetition ;
			var id = $(this).parent().parent().parent().find('.quickV').attr('id');
			$('.list-prod > .list-likes').each(function (prod) {
				var items_id = $('.list-likes')[prod].id;
				if (items_id == id)
				{
					repetition = true;
				}
			});
			if(repetition)
			{
				swal('Ooops !',"Item already exist ", "error");
			}
			else {
				var prixProduct = $(this).parent().parent().find('.prix-prod').text();
				var imgProduct = $(this).parent().parent().parent().find('.img-product').attr('src');
				$('.list-prod').append('<li class="list-likes header-cart-item flex-w flex-t m-b-12" ><label class="d-none" id="'+id+'"></label><div class="like-img header-cart-item-img"><img class="imgprod" src='+imgProduct+' alt="IMG"></div><div class="headercartitemtxt p-t-8" style="position: absolute; left: 80px"><a href="#" class="nprod header-cart-item-name m-b-18 hov-cl1 trans-04" >'+nameProduct+'</a><span class="pprod header-cart-item-info ">'+prixProduct+'</span></div></li>');
				$.ajax({
					type:'POST',
					url:'/wedding1/produits/likes',
					data:{'Id_Product':id,'Name_Product':nameProduct,'Prix_Product':prixProduct,'Img_Product':imgProduct}

				});
				var num = $('.like_num').attr('data-notify');
				$('.like_num').attr('data-notify',++num);
				swal(nameProduct, "is added to wishlist !", "success");
				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			}
		});
	});

	$('.js-addwish-detail').each(function(){
		var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

		$(this).on('click', function(){
			swal(nameProduct, "is added to wishlist !", "success");
			$(this).addClass('js-addedwish-detail');
			$(this).off('click');
		});
	});


	/*---------------------------------------------*/

	$('.js-addcart-detail').each(function(){
		//var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
		//$(this).on('click', function(){
		//	swal(nameProduct, "is added to cart !", "success");
		//});
	});


</script>
<!--===============================================================================================-->
<?php echo $this->Html->script('../vendor/perfect-scrollbar/perfect-scrollbar.min'); ?>
<script>
	$('.js-pscroll').each(function(){
		$(this).css('position','relative');
		$(this).css('overflow','hidden');
		var ps = new PerfectScrollbar(this, {
			wheelSpeed: 1,
			scrollingThreshold: 1000,
			wheelPropagation: false,
		});

		$(window).on('resize', function(){
			ps.update();
		})
	});
	$(document).ready(function(){
		$('ul').on('click', ".product-li > .prod-img", function(){
			var ammount = $('.tot').text().split('MAD')[0];
			var id= $(this).parent().find('label').attr('id');
			var prixProd= $(this).parent().find('.rix').text().split(' ')[2] * $(this).parent().find('.rix').text().split(' ')[0];
			var resultat = ammount - prixProd;
			swal({
				title: "Are you sure?",
				text: "Once deleted, you will not be able to recover this product !",
				icon: "warning",
				buttons:true,
				dangerMode: true,
			})
					.then((willConfirm) => {
						if (willConfirm) {
							$.ajax({
								type:"post",
								url:"/wedding1/paniers/deletepanier",
								data:{"produit_id":id},
								success:function(data){
								}
							});
							$(this).parent().remove();
							var x=$('.product-li').length;
							$('.num-products').attr('data-notify',x);
							$('.tot').empty().append(resultat+' MAD');
							swal("Nice! Your product that you like it has been deleted!", {
								icon: "success",
							});
						} else {
							swal("Your product that you like it is safe!");
						}
					});


		});
		$('ul').on('click', ".list-likes > .like-img", function(){
			swal({
				title: "Are you sure?",
				text: "Once deleted, you will not be able to recover this product !",
				icon: "warning",
				buttons:true,
				dangerMode: true,
				cancelButtonColor:'#d33',
				cancelConfirmColor:'#d33',
			})
					.then((willConfirm) => {
						if (willConfirm) {
							var id= $(this).parent().find('label').attr('id');
							$.ajax({
								type:"post",
								url:"/wedding1/produits/delete_like",
								data:{"produit_id":id},
								success:function(data){
								}
							});
							$(this).parent().remove();
							var x=$('.list-likes').length;
							$('.like_num ').attr('data-notify',x);
							swal("Nice! Your product that you like it has been deleted!", {
								icon: "success",
							});
						} else {
							swal("Your product that you like it is safe!");
						}
					});


		});

	});
</script>
<!--===============================================================================================-->
<?php echo $this->Html->script('mainn'); ?>
<?php echo $this->Html->script('shop2'); ?>

</body>
</html>
