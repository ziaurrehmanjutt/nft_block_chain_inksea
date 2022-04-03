<body>
	<!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader-wrapper">
			<div class="spinner"></div>
		</div>
		<caption>

		</caption>

		<div>
			<a href="li"></a>
		</div>

	</div>
	<!-- Preloader-end -->

	<div class="mim_tm_all_wrap" data-magic-cursor="" data-color="crimson">

		<!-- Start Header -->
		<header id="header-area" class="header-transparent sticky">
			<div class="mobile_menubar">
				<i class='bx bx-menu'></i>
			</div><!-- End Mobile menu  -->
			<div class="main-menu-area">
				<!-- start main menu area -->
				<div class="container container-main-menu">
					<div class="main-menu d-flex align-items-center">
						<div class="logo">
							<!-- start logo  -->
							<a href="index.php" class="navbar-brand">
								<img src="<?= base_url('assets/') ?>img/logo.png" alt="logo">
							</a>
							<a href="index.php" class="navbar-icon">
								<img src="<?= base_url('assets/') ?>img/favicon.png" alt="logo">
							</a>
						</div> <!-- End logo  -->
						<form action="<?=base_url('search')?>">
						<div class="input-main">

							<!-- start search bar  -->
							<input class="input" name="search" type="text" placeholder="Search...">
							<button type="submit">
								<i class="bx bx-search"></i>
							</button>
						</div> <!-- end search bar  -->
						</form>
						<div class="menu d-flex">
							<!-- start menu  -->
							<nav class="navigation" id="mobile-menu">
								<ul class="menu-list list-style-none mb-0">
									<!-- start ul  -->
									<li><a href="<?=base_url('/')?>">Home</a></li>
									<li class="has-children"><a href="#">Explore</a>
										<ul class="sub-menu">
											<!-- <li><a href="#">Explore One</a></li> -->
											<li><a href="<?= base_url('search') ?>"> Live Auction</a></li>
											<!-- <li><a href="#"> Collection</a></li>
											<li><a href="#">Item Details</a></li> -->
										</ul>
									</li>
									<!-- <li class="has-children"><a href="#">Community</a>
										<ul class="sub-menu">
											<li><a href="#">News & Press</a></li>
											<li><a href="#">Single Blog</a></li>
											<li><a href="#">Help Center</a></li>
										</ul>
									</li> -->
									<li class="has-children"><a href="#">Pages</a>
										<ul class="sub-menu">
											<?php if (isset($_SESSION['login'])) : ?>
												<li><a href="<?=base_url('profile')?>">My Account</a></li>
											<?php endif;  ?>



											<li><a href="#">Terms & Conditions</a></li>
											<li><a href="#">About Us</a></li>
											<li><a href="#">Contact Us</a></li>
											<li><a href="#">Privacy Policy</a></li>
											<li><a href="<?= base_url('wallet') ?>">Connect Wallet</a></li>
										</ul>
									</li>
									<li><a href="<?= base_url('activity') ?>">Activity</a></li>
									<?php if (!isset($_SESSION['login'])) : ?>
										<li><a href="<?=base_url('login')?>">Login</a></li>
									<?php endif;  ?>
								</ul> <!-- end ul  -->
							</nav> <!-- end nav  -->
						</div><!-- end menu  -->
						<div class="action-nav" style="position: absolute;right: 114px;">
							<select id="language" class="wide">
								<option value="0">ENG</option>
								<!-- <option value="1">ARB</option>
								<option value="2">GER</option>
								<option value="3">FRN</option> -->
							</select><!-- end language  -->
							<?php if (isset($_SESSION['login']) && $_SESSION['login']) : ?>
								<div class="profile-nav-main">
									<div class="profile-nav">
										<div class="img-otr">
											<img class="nav-prof-img" src="<?= base_url('assets/') ?>img/avatar/1.jpg" alt="Avatar">
											<i class="bx bxs-check-circle"></i>
										</div>
									</div><!-- end profile-nav  -->
									<div class="profile-pop-otr">
										<div class="balance-otr">
											<div class="balance">
												<p class="text heading-S">Balance</p>
												<p class="price heading-L">xxxx ETH</p>
											</div>
											<div class="img-etherem">
												<?php if ($_SESSION['login']->user_image) : ?>
													<img class="etherem" src="<?= base_url('assets/users') . $_SESSION['login']->user_image ?>" alt="img">
												<?php else : ?>
													<img class="etherem" src="<?= base_url('assets/') ?>img/avatar/ethereum.png" alt="img">
												<?php endif  ?>
											</div>
										</div><!-- end balance  -->
										<div class="copy-icon-otr">
											<span id="wallet" class="profile_wallet text heading-SB"><?= $_SESSION['login']->meta_mask_key ?></span>
											<button id="btn_copy" title="Copy Text">
												<i class='bx bx-copy-alt'></i>
											</button>
										</div><!-- end copy link  -->
										<ul class="link-profile-ul">
											<li class="link-profile-li">
												<a href="" class="link-profile-a heading-SB">My Item</a>
											</li>
											<li class="link-profile-li">
												<a href="<?= base_url('profile') ?>" class="link-profile-a heading-SB">Edit Profile</a>
											</li>
											<!-- <li class="link-profile-li">
											<a href="" class="link-profile-a heading-SB">Upload File</a>
										</li> -->
											<li class="link-profile-li">
												<a href="<?= base_url('logout') ?>" class="link-profile-a heading-SB">Logout</a>
											</li>
										</ul><!-- end ul  -->
									</div><!-- end profile pop  -->
								</div><!-- end profile nav  -->

							<?php else :  ?>

							<?php endif;  ?>
						</div><!-- end action nav  -->
						<!-- Responsive Menu -->
						<div class="mobile-menu mobile-menu-preview"></div>
					</div><!-- end main menu  -->
					<div class="main-menu-icon">
						<!-- start mobile menu icon  -->
						<span class="line line-1"></span>
						<span class="line line-2"></span>
						<span class="line line-3"></span>
					</div> <!-- end mobile menu icon  -->
				</div><!-- end container  -->
			</div><!-- end main menu area  -->
		</header> <!-- end header  -->