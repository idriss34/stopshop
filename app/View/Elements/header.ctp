<style>
	.profilimg
	{
		position: relative;
		bottom: 1.5px;
		width: 25px;
		height: 26px;
	}
	.log{
		width: 132px;
		height: 37px;
		margin-top: -13px;
	}
	.logoM{
		width: 152px;
		height: 47px;
	}

</style>
<header class="header-v4">
<?php $user =$this->requestAction('/users/getInfosUser'); ?>
<?php  $user =$this->requestAction('/users/getInfosUser');
	  $user_img = $user['User']['img']; ?>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>

					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m trans-04 p-lr-25">
							Help & FAQs
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							My Account
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							EN
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							USD
						</a>
					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop how-shadow1">
				<nav class="limiter-menu-desktop container">

					<!-- Logo desktop -->
					<a href="<?php echo $this->Html->url(array('controller'=>'produits','action'=>'home')); ?>" class="logo">
						<?php echo $this->html->image('images/icons/log.png',array('class'=>'log')); ?>
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="<?php echo $this->Html->url(array('controller'=>'produits','action'=>'home')); ?>">Home</a>
							</li>

							<li class="active-menu">
								<a href="<?php echo $this->Html->url(array('controller'=>'produits','action'=>'shop')); ?>">Shop</a>
							</li>

							<li class="label1" data-label1="hot">
								<a href="<?php echo $this->Html->url(array('controller'=>'paniers','action'=>'index')); ?>">Features</a>
							</li>

							<li>
								<a href="#">Blog</a>
							</li>

							<li>
								<a href="<?php echo $this->Html->url(array('controller'=>'pages','action'=>'about')); ?>">About</a>
							</li>

							<li>
								<a href="<?php echo $this->Html->url(array('controller'=>'contacts','action'=>'add')); ?>">Contact</a>
							</li>
						</ul>
					</div>

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>

						<div class="num-products icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="0">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>

						<a href="#" class="like_num icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
							<i class="zmdi zmdi-favorite-outline"></i>
						</a>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								 <?php echo $this->html->image('/img/images/profil/'.$user_img,array("class"=>"profilimg img-fluid rounded-circle")); ?> </a>
							<div class="drop dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
								<a class="dropdown-item" href="<?php echo $this->Html->url(array('controller'=>'users','action'=>'editpr')); ?>">My account</a>
								<a class="dropdown-item" href="<?php echo $this->Html->url(array('controller'=>'users','action'=>'logout')); ?>">Log out</a>
							</div>
						</li>
					</div>
				</nav>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->
			<div class="logo-mobile">
				<a href="<?php echo $this->Html->url(array('controller'=>'produits','action'=>'home')); ?>"><?php echo $this->html->image('images/icons/log.png',array('alt'=>'logo','class'=>'logoM')); ?></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="0">
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
					<a href="<?php echo $this->Html->url(array('controller'=>'produits','action'=>'home')); ?>">Home</a>
					<!-- <ul class="sub-menu-m">
						<li><a href="index.html">Homepage 1</a></li>
						<li><a href="home-02.html">Homepage 2</a></li>
						<li><a href="home-03.html">Homepage 3</a></li>
					</ul> -->
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="<?php echo $this->Html->url(array('controller'=>'produits','action'=>'shop')); ?>">Shop</a>
				</li>

				<li>
					<a href="<?php echo $this->Html->url(array('controller'=>'paniers','action'=>'index')); ?>" class="label1 rs1" data-label1="hot">Features</a>
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
					<?php echo $this->html->image('images/icons/icon-close2.png',array('alt'=>'CLOSE')); ?>
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
