<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<?php //echo $this->Html->image('images/icons/favicon.png'); ?>
<!--===============================================================================================-->
	<?php echo $this->Html->css('../vendor/bootstrap/css/bootstrap.min'); ?>
<!--===============================================================================================-->
	<?php echo $this->Html->css('../fonts/font-awesome-4.7.0/css/font-awesome.min');?>
<!--===============================================================================================-->
	<?= $this->Html->css('../fonts/iconic/css/material-design-iconic-font.min'); ?>
<!--===============================================================================================-->
	<?= $this->Html->css('../fonts/linearicons-v1.0.0/icon-font.min'); ?>
<!--===============================================================================================-->
	<?= $this->Html->css('../vendor/animate/animate'); ?>
<!--===============================================================================================-->
	<?= $this->Html->css('../vendor/css-hamburgers/hamburgers.min') ;?>
<!--===============================================================================================-->
	<?= $this->Html->css('../vendor/animsition/css/animsition.min'); ?>
<!--===============================================================================================-->
	<?= $this->Html->css('../vendor/select2/select2.min'); ?>
<!--===============================================================================================-->
	<?= $this->Html->css('../vendor/daterangepicker/daterangepicker'); ?>
<!--===============================================================================================-->
	<?= $this->Html->css('../vendor/slick/slick'); ?>
<!--===============================================================================================-->
	<?= $this->Html->css('../vendor/MagnificPopup/magnific-popup'); ?>
<!--===============================================================================================-->
	<?= $this->Html->css('../vendor/perfect-scrollbar/perfect-scrollbar'); ?>
<!--===============================================================================================-->
	<?= $this->Html->css('util'); ?>
	<?= $this->Html->css('main'); ?>
	<!--===============================================================================================-->
	<?php echo $this->Html->script('../vendor/jquery/jquery-3.2.1.min.js'); ?>
	<?php echo $this->Html->script('functions'); ?>
	<!--===============================================================================================-->
			<style>
				.wrap-menu-desktop{
					top:0px;
				}
				 .log{
					 width: 132px;
					 height: 37px;
					 margin-top: -10px;
				 }
			</style>
</head>
<body class="animsition">

	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">

					<!-- Logo desktop -->
					<a href="<?php echo $this->Html->url(array('controller'=>'produits','action'=>'home')); ?>" class="logo">

						<?= $this->Html->image('images/icons/log.png',array('class'=>'log')); ?>
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="active-menu">
								<a href="<?php echo $this->Html->url(array('controller'=>'produits','action'=>'index')); ?>">Produits</a>
								<ul class="sub-menu">
									<a href="<?php echo $this->Html->url(array('controller'=>'produits','action'=>'add')); ?>"><li>Ajouter</li></a>
								</ul>
							</li>

							<li>
								<a href="<?php echo $this->Html->url(array('controller'=>'users','action'=>'index')); ?>">Users</a>
								<ul class="sub-menu">
									<a href="<?php echo $this->Html->url('/add_user'); ?>"><li>Ajouter</li></a>
								</ul>
							</li>

							<li>
								<a href="<?php echo $this->Html->url(array('controller'=>'categories','action'=>'index')); ?>">Categories</a>
								<ul class="sub-menu">
									<a href="<?php echo $this->Html->url(array('controller'=>'categories','action'=>'add')); ?>"><li>Ajouter</li></a>
								</ul>
							</li>
							<li>
								<a href="<?php echo $this->Html->url(array('controller'=>'commandes','action'=>'index')); ?>">Commandes</a>
								<ul class="sub-menu">
									<a href="<?php echo $this->Html->url(array('controller'=>'commandes','action'=>'add')); ?>"><li>Ajouter</li></a>
									<a href="<?php echo $this->Html->url(array('controller'=>'commandes','action'=>'charts')); ?>"><li>Chart of Sales</li></a>
									<a href="<?php echo $this->Html->url(array('controller'=>'commandes','action'=>'commvalid')); ?>"><li>Commandes Valid</li></a>
								</ul>
							</li>


							<!-- <li>
								<a href="<?php //echo $this->Html->url(array('controller'=>'contacts','action'=>'index')); ?>">Contacts</a>
								<ul class="sub-menu">
									<a href="<?php //echo $this->Html->url(array('controller'=>'contacts','action'=>'add')); ?>"><li>Ajouter</li></a>
								</ul>
							</li> -->


							<li>
								<a href="<a href="<?php echo $this->Html->url(array('controller'=>'users','action'=>'logout')); ?>">Logout</a>
							</li>
						</ul>
					</div>

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>
					</div>
				</nav>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->
			<div class="logo-mobile">
				<a href="<?php echo $this->Html->url(array('controller'=>'produits','action'=>'home')); ?>"><?= $this->Html->image('images/icons/logo-01.png'); ?></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>

				<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
					<i class="zmdi zmdi-favorite-outline"></i>
				</a>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m p-lr-10 trans-04">
							Help & FAQs
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							My Account
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							EN
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							USD
						</a>
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="index.html">Home</a>
					<ul class="sub-menu-m">
						<li><a href="index.html">Homepage 1</a></li>
						<li><a href="home-02.html">Homepage 2</a></li>
						<li><a href="home-03.html">Homepage 3</a></li>
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="product.html">Shop</a>
				</li>

				<li>
					<a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
				</li>

				<li>
					<a href="blog.html">Blog</a>
				</li>

				<li>
					<a href="about.html">About</a>
				</li>

				<li>
					<a href="contact.html">Contact</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<?php echo $this->Html->image('images/icons/icon-close2.png',array('alt'=>'CLOSE')); ?>
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>



	<?php echo $this->fetch('content'); ?>






	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Categories
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Women
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Men
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Shoes
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Watches
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Help
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Track Order
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Returns
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Shipping
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								FAQs
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						GET IN TOUCH
					</h4>

					<p class="stext-107 cl7 size-201">
						Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
					</p>

					<div class="p-t-27">
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-pinterest-p"></i>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Newsletter
					</h4>

					<form>
						<div class="wrap-input1 w-full p-b-4">
							<input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
							<div class="focus-input1 trans-04"></div>
						</div>

						<div class="p-t-18">
							<button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
								Subscribe
							</button>
						</div>
					</form>
				</div>
			</div>

			<div class="p-t-40">
				<div class="flex-c-m flex-w p-b-18">
					<a href="#" class="m-all-1">
						<?php echo $this->Html->image('images/icons/icon-pay-01.png',array('alt'=>'ICON-PAY')); ?>
					</a>

					<a href="#" class="m-all-1">
						<?php echo $this->Html->image('images/icons/icon-pay-02.png',array('alt'=>'ICON-PAY')); ?>
					</a>

					<a href="#" class="m-all-1">
						<?php echo $this->Html->image('images/icons/icon-pay-03.png',array('alt'=>'ICON-PAY')); ?>
					</a>

					<a href="#" class="m-all-1">
						<?php echo $this->Html->image('images/icons/icon-pay-04.png',array('alt'=>'ICON-PAY')); ?>
					</a>

					<a href="#" class="m-all-1">
						<?php echo $this->Html->image('images/icons/icon-pay-05.png',array('alt'=>'ICON-PAY')); ?>
					</a>
				</div>

				<p class="stext-107 cl6 txt-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

				</p>
			</div>
		</div>
	</footer>

<!--===============================================================================================-->
	<?php echo $this->Html->script('../vendor/animsition/js/animsition.min.js'); ?>
<!--===============================================================================================-->
	<?php echo $this->Html->script('../vendor/bootstrap/js/popper.js'); ?>
	<?php echo $this->Html->script('../vendor/bootstrap/js/bootstrap.min.js'); ?>
<!--===============================================================================================-->
	<?php echo $this->Html->script('../vendor/select2/select2.min.js'); ?>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<?php echo $this->Html->script('../vendor/daterangepicker/moment.min.js'); ?>
	<?php echo $this->Html->script('../vendor/daterangepicker/daterangepicker.js'); ?>
<!--===============================================================================================-->
	<?php echo $this->Html->script('../vendor/slick/slick.min.js'); ?>
	<?php echo $this->Html->script('slick-custom'); ?>
<!--===============================================================================================-->
	<script src=""></script>
	<?php echo $this->Html->script('../vendor/parallax100/parallax100.js'); ?>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<?php echo $this->Html->script('../vendor/MagnificPopup/jquery.magnific-popup.min.js'); ?>
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
	<?php echo $this->Html->script('../vendor/isotope/isotope.pkgd.min.js'); ?>
<!--===============================================================================================-->
	<?php echo $this->Html->script('../vendor/sweetalert/sweetalert.min.js'); ?>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
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
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

	</script>
<!--===============================================================================================-->
	<?php echo $this->Html->script('../vendor/perfect-scrollbar/perfect-scrollbar.min.js'); ?>
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

	</script>
<!--===============================================================================================-->
	<?php echo $this->Html->script('mainn'); ?>

</body>
</html>
