<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0" name="viewport">
	<title><?php bloginfo('name'); ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
	<!-- Font -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700%7CMontserrat:400,700%7CPlayfair+Display:400,400italic' rel='stylesheet' type='text/css'>
	
	<!-- Css -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/core.min.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/skin.css" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>/css/skin.css" />


	<!--[if lt IE 9]>
    	<script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
</head>
<body class="shop home-page">

	<!-- Side Navigation Menu -->
	<aside class="side-navigation-wrapper enter-right" data-no-scrollbar data-animation="push-in">
		<div class="side-navigation-scroll-pane">
			<div class="side-navigation-inner">
				<div class="side-navigation-header">
					<div class="navigation-hide side-nav-hide">
						<a href="#">
							<span class="icon-cancel medium"></span>
						</a>
					</div>
				</div>
				<nav class="side-navigation">
					<ul>
						<li>
							<a href="#" class="contains-sub-menu">Demos</a>
							<ul class="sub-menu">
								<li>
									<a href="index-agency.html">Creative Agency</a>
								</li>
								<li>
									<a href="index-ecommerce.html">Ecommerce</a>
								</li>
								<li>
									<a href="index-small-business.html">Small Business</a>
								</li>
								<li>
									<a href="index-photography.html">Photography</a>
								</li>
								<li>
									<a href="index-corporate.html">Corporate</a>
								</li>
								<li>
									<a href="index-showcase.html">Showcase</a>
								</li>
								<li>
									<a href="index-personal.html">Personal</a>
								</li>
								<li>
									<a href="index-one-page.html">One Page</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="contains-sub-menu">Pages</a>
							<ul class="sub-menu">
								<li>
									<a href="about-style-one.html">About Original</a>
								</li>
								<li>
									<a href="about-style-two.html">About Style 2</a>
								</li>
								<li>
									<a href="about-style-three.html">About Style 3</a>
								</li>
								<li>
									<a href="services-style-one.html">Services Original</a>
								</li>
								<li>
									<a href="services-style-two.html">Services Style 2</a>
								</li>
								<li>
									<a href="services-style-three.html">Services Style 3</a>
								</li>
								<li>
									<a href="contact-style-one.html">Contact Original</a>
								</li>
								<li>
									<a href="contact-style-two.html">Contact Style 2</a>
								</li>
								<li>
									<a href="contact-style-three.html">Contact Style 3</a>
								</li>
								<li>
									<a href="frequently-asked-questions.html">FAQ</a>
								</li>
								<li>
									<a href="404.html">404</a>
								</li>
								<li>
									<a href="500.html">500</a>
								</li>
								<li>
									<a href="maintenance.html">Maintenance</a>
								</li>
								<li>
									<a href="search-results.html">Search Results</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="contains-sub-menu">Blog</a>
							<ul class="sub-menu">
								<li>
									<a href="blog.html">3 Column Grid</a>
								</li>
								<li>
									<a href="blog-four-columns-full-width.html">4 Column Full Width Grid</a>
								</li>
								<li>
									<a href="blog-sidebar-right-with-media.html">Blog Index Sidebar Right</a>
								</li>
								<li>
									<a href="blog-sidebar-left-with-media.html">Blog Index Sidebar Left</a>
								</li>
								<li>
									<a href="blog-wide-no-sidebar.html">Blog Without Sidebar</a>
								</li>
								<li>
									<a href="blog-masonry-creative-with-parallax.html">Blog Creative</a>
								</li>
								<li>
									<a href="blog-single-post-sidebar-right.html">Single Post Sidebar Right</a>
								</li>
								<li>
									<a href="blog-single-post-sidebar-left.html">Single Post Sidebar Left</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="contains-sub-menu">Shop</a>
							<ul class="sub-menu">
								<li>
									<a href="shop-grid.html">Shop Grid</a>
								</li>
								<li>
									<a href="shop-creative.html">Shop Creative</a>
								</li>
								<li>
									<a href="shop-sidebar-right.html">Shop Sidebar Right</a>
								</li>
								<li>
									<a href="single-product.html">Single Product</a>
								</li>
								<li>
									<a href="single-product-with-gallery.html">Product With Gallery</a>
								</li>
								<li>
									<a href="single-product-with-header.html">Product With Header</a>
								</li>
								<li>
									<a href="single-product-with-parallax.html">Product With Parallax</a>
								</li>
								<li>
									<a href="single-product-on-sale.html">Product On Sale</a>
								</li>
								<li>
									<a href="single-product-no-stock.html">Product Out Of Stock</a>
								</li>
								<li>
									<a href="cart.html">Cart</a>
								</li>
								<li>
									<a href="checkout.html">Checkout</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="contains-sub-menu">Folio</a>
							<ul class="sub-menu">
								<li>
									<a href="portfolio-three-columns.html">3 Column Grid Default</a>
								</li>
								<li>
									<a href="portfolio-three-columns-alternative.html">3 Column Grid Alt</a>
								</li>
								<li>
									<a href="portfolio-three-columns-full-width.html">3 Column Grid Full Width</a>
								</li>
								<li>
									<a href="portfolio-three-columns-full-width-no-margins.html">3 Column Grid Full Width No Margins</a>
								</li>
								<li>
									<a href="portfolio-four-columns-full-width-alternative.html">4 Column Grid Full Width Alt</a>
								</li>
								<li>
									<a href="portfolio-four-columns-full-width-no-margins.html">4 Column Grid Full Width No Margins</a>
								</li>
								<li>
									<a href="portfolio-masonry-grid.html">Full Width Masonry Grid</a>
								</li>
								<li>
									<a href="portfolio-masonry-grid-no-margins.html">Full Width Masonry Grid No Margins</a>
								</li>
								<li>
									<a href="project-style-one.html">Project Style One</a>
								</li>
								<li>
									<a href="project-style-two.html">Project Style Two</a>
								</li>
								<li>
									<a href="project-style-three.html">Project Style Three</a>
								</li>
								<li>
									<a href="project-style-four.html">Project Style Four</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="elements-accordions.html">Elements</a>
						</li>
					</ul>
				</nav>
				<nav class="side-navigation nav-block">
					<ul>
						<li>
							<a href="#" class="contains-sub-menu cart">Cart <span class="cart-indication"><span class="badge">3</span></span></a>
							<ul class="sub-menu custom-content cart-overview">
								<li class="cart-item">
									<a href="single-product.html" class="product-thumbnail">
										<img src="images/shop/cart/cart-thumb-small.jpg" alt="" />
									</a>
									<div class="product-details">
										<a href="single-product.html" class="product-title">
											Cotton Jump Suit
										</a>
										<span class="product-quantity">2 x</span>
										<span class="product-price"><span class="currency">$</span>15.00</span>
										<a href="#" class="product-remove icon-cancel"></a>
									</div>
								</li>
								<li class="cart-item">
									<a href="single-product.html" class="product-thumbnail">
										<img src="images/shop/cart/cart-thumb-small-2.jpg" alt="" />
									</a>
									<div class="product-details">
										<a href="single-product.html" class="product-title">
											Crew Neck U.S Sweater
										</a>
										<span class="product-quantity">2 x</span>
										<span class="product-price"><span class="currency">$</span>45.00</span>
										<a href="#" class="product-remove icon-cancel"></a>
									</div>
								</li>
								<li class="cart-item">
									<a href="single-product.html" class="product-thumbnail">
										<img src="images/shop/cart/cart-thumb-small-3.jpg" alt="" />
									</a>
									<div class="product-details">
										<a href="single-product.html" class="product-title">
											Cross Summer Top
										</a>
										<span class="product-quantity">2 x</span>
										<span class="product-price"><span class="currency">$</span>17.00</span>
										<a href="#" class="product-remove icon-cancel"></a>
									</div>
								</li>
								<li class="cart-subtotal">
									Sub Total
									<span class="amount"><span class="currency">$</span>77.00</span>
								</li>
								<li class="cart-actions">
									<a href="cart.html" class="view-cart">View Cart</a>
									<a href="checkout.html" class="checkout"><span class="icon-check"></span> Checkout</a>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
				<div class="side-navigation-footer">
					<p class="copyright no-margin-bottom">&copy; 2014 THEMEMOUNTAIN.</p>
				</div>
			</div>
		</div>
	</aside>
	<!-- Side Navigation Menu End -->

	<div class="wrapper">
		<div class="wrapper-inner">

			<!-- Header -->
			<header class="header header-fixed header-fixed-on-mobile header-transparent" data-bkg-threshold="100" data-compact-threshold="100">
				<div class="header-inner">
					<div class="row nav-bar">
						<div class="column width-12 nav-bar-inner">
							<div class="logo">
								<div class="logo-inner">
									<a href="index.html"><img src="images/logo-dark.png" alt="Warhol Logo" /></a>
									<a href="index.html"><img src="images/logo.png" alt="Warhol Logo" /></a>
								</div>
							</div>
							<nav class="navigation nav-block secondary-navigation nav-right">
								<ul>
									<li>
										<!-- Dropdown Cart Overview -->
										<a href="#" class="nav-icon cart no-page-fade"><span class="cart-indication"><span class="icon-shopping-cart"></span> <span class="badge">3</span></span></a>
										<ul class="sub-menu custom-content cart-overview">
											<li class="cart-item">
												<a href="single-product.html" class="product-thumbnail">
													<img src="images/shop/cart/cart-thumb-small.jpg" alt="" />
												</a>
												<div class="product-details">
													<a href="single-product.html" class="product-title">
														Cotton Jump Suit
													</a>
													<span class="product-quantity">2 x</span>
													<span class="product-price"><span class="currency">$</span>15.00</span>
													<a href="#" class="product-remove icon-cancel"></a>
												</div>
											</li>
											<li class="cart-item">
												<a href="single-product.html" class="product-thumbnail">
													<img src="images/shop/cart/cart-thumb-small-2.jpg" alt="" />
												</a>
												<div class="product-details">
													<a href="single-product.html" class="product-title">
														Crew Neck U.S Sweater
													</a>
													<span class="product-quantity">2 x</span>
													<span class="product-price"><span class="currency">$</span>45.00</span>
													<a href="#" class="product-remove icon-cancel"></a>
												</div>
											</li>
											<li class="cart-item">
												<a href="single-product.html" class="product-thumbnail">
													<img src="images/shop/cart/cart-thumb-small-3.jpg" alt="" />
												</a>
												<div class="product-details">
													<a href="single-product.html" class="product-title">
														Cross Summer Top
													</a>
													<span class="product-quantity">2 x</span>
													<span class="product-price"><span class="currency">$</span>17.00</span>
													<a href="#" class="product-remove icon-cancel"></a>
												</div>
											</li>
											<li class="cart-subtotal">
												Sub Total
												<span class="amount"><span class="currency">$</span>77.00</span>
											</li>
											<li class="cart-actions">
												<a href="cart.html" class="view-cart mt-10">View Cart</a>
												<a href="checkout.html" class="checkout button pill small"><span class="icon-check"></span> Checkout</a>
											</li>
										</ul>
									</li>
									<li>
										<!-- Search -->
										<a href="#search-modal" data-content="inline" data-toolbar="" data-aux-classes="tml-search-modal" data-modal-mode data-modal-width="1000" data-lightbox-animation="fade" data-nav-exit="false" class="lightbox-link nav-icon">
											<span class="icon-magnifying-glass"></span>
										</a>
									</li>
									<li class="aux-navigation hide">
										<!-- Aux Navigation -->
										<a href="#" class="navigation-show side-nav-show nav-icon">
											<span class="icon-menu"></span>
										</a>
									</li>
								</ul>
							</nav>
							<nav class="navigation nav-block primary-navigation nav-right">
								<ul>
									<li class="current">
										<a href="index.html">Demos</a>
										<ul class="sub-menu">
											<li>
												<a href="index-agency.html">Creative Agency</a>
											</li>
											<li>
												<a href="index-ecommerce.html">Ecommerce</a>
											</li>
											<li>
												<a href="index-small-business.html">Small Business</a>
											</li>
											<li>
												<a href="index-photography.html">Photography</a>
											</li>
											<li>
												<a href="index-corporate.html">Corporate</a>
											</li>
											<li>
												<a href="index-showcase.html">Showcase</a>
											</li>
											<li>
												<a href="index-personal.html">Personal</a>
											</li>
											<li>
												<a href="index-one-page.html">One Page</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="about-style-one.html">Pages</a>
										<ul class="sub-menu">
											<li>
												<a href="about-style-one.html">About Original</a>
											</li>
											<li>
												<a href="about-style-two.html">About Style 2</a>
											</li>
											<li>
												<a href="about-style-three.html">About Style 3</a>
											</li>
											<li>
												<a href="services-style-one.html">Services Original</a>
											</li>
											<li>
												<a href="services-style-two.html">Services Style 2</a>
											</li>
											<li>
												<a href="services-style-three.html">Services Style 3</a>
											</li>
											<li>
												<a href="contact-style-one.html">Contact Original</a>
											</li>
											<li>
												<a href="contact-style-two.html">Contact Style 2</a>
											</li>
											<li>
												<a href="contact-style-three.html">Contact Style 3</a>
											</li>
											<li>
												<a href="frequently-asked-questions.html">FAQ</a>
											</li>
											<li>
												<a href="404.html">404</a>
											</li>
											<li>
												<a href="500.html">500</a>
											</li>
											<li>
												<a href="maintenance.html">Maintenance</a>
											</li>
											<li>
												<a href="search-results.html">Search Results</a>
											</li>
										</ul>
									</li>
									<li class="contains-mega-sub-menu">
										<a href="portfolio-three-columns.html">Folio</a>
										<ul class="mega-sub-menu row">
											<li class="column width-4">
												<a href="portfolio-three-columns.html">3 Column Grids</a>
												<ul>
													<li>
														<a href="portfolio-three-columns.html">3 Column Grid Default</a>
													</li>
													<li>
														<a href="portfolio-three-columns-alternative.html">3 Column Grid Alt</a>
													</li>
													<li>
														<a href="portfolio-three-columns-full-width.html">3 Column Grid Full Width</a>
													</li>
													<li>
														<a href="portfolio-three-columns-full-width-no-margins.html">3 Column Grid Full Width No Margins</a>
													</li>
												</ul>
											</li>
											<li class="column width-4">
												<a href="portfolio-four-columns-full-width-alternative.html">4 Column Grids</a>
												<ul>
													<li>
														<a href="portfolio-four-columns-full-width-alternative.html">4 Column Grid Full Width Alt</a>
													</li>
													<li>
														<a href="portfolio-four-columns-full-width-no-margins.html">4 Column Grid Full Width No Margins</a>
													</li>
													<li>
														<a href="portfolio-masonry-grid.html">Full Width Masonry Grid</a>
													</li>
													<li>
														<a href="portfolio-masonry-grid-no-margins.html">Full Width Masonry Grid No Margins</a>
													</li>
												</ul>
											</li>
											<li class="column width-4">
												<a href="project-style-one.html">Project Pages</a>
												<ul>
													<li>
														<a href="project-style-one.html">Project Style One</a>
													</li>
													<li>
														<a href="project-style-two.html">Project Style Two</a>
													</li>
													<li>
														<a href="project-style-three.html">Project Style Three</a>
													</li>
													<li>
														<a href="project-style-four.html">Project Style Four</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li>
										<a href="blog.html">Blog</a>
										<ul class="sub-menu">
											<li>
												<a href="blog.html">3 Column Grid</a>
											</li>
											<li>
												<a href="blog-four-columns-full-width.html">4 Column Full Width Grid</a>
											</li>
											<li>
												<a href="blog-sidebar-right-with-media.html">Blog Index Sidebar Right</a>
											</li>
											<li>
												<a href="blog-sidebar-left-with-media.html">Blog Index Sidebar Left</a>
											</li>
											<li>
												<a href="blog-wide-no-sidebar.html">Blog Without Sidebar</a>
											</li>
											<li>
												<a href="blog-masonry-creative-with-parallax.html">Blog Creative</a>
											</li>
											<li>
												<a href="blog-single-post-sidebar-right.html">Single Post Sidebar Right</a>
											</li>
											<li>
												<a href="blog-single-post-sidebar-left.html">Single Post Sidebar Left</a>
											</li>
										</ul>
									</li>
									<li class="sub-menu-right">
										<a href="shop-grid.html">Shop</a>
										<ul class="sub-menu">
											<li class="contains-sub-menu">
												<a href="shop-grid.html">Shop Layouts</a>
												<ul class="sub-menu">
													<li>
														<a href="shop-grid.html">Shop Grid</a>
													</li>
													<li>
														<a href="shop-creative.html">Shop Creative</a>
													</li>
													<li>
														<a href="shop-sidebar-right.html">Shop Sidebar Right</a>
													</li>
												</ul>
											</li>
											<li class="contains-sub-menu">
												<a href="single-product.html">Single Product</a>
												<ul class="sub-menu">
													<li>
														<a href="single-product-with-gallery.html">Product With Gallery</a>
													</li>
													<li>
														<a href="single-product-with-header.html">Product With Header</a>
													</li>
													<li>
														<a href="single-product-with-parallax.html">Product With Parallax</a>
													</li>
													<li>
														<a href="single-product-on-sale.html">Product On Sale</a>
													</li>
													<li>
														<a href="single-product-no-stock.html">Product Out Of Stock</a>
													</li>
												</ul>
											</li>
											<li>
												<a href="cart.html">Cart</a>
											</li>
											<li>
												<a href="checkout.html">Checkout</a>
											</li>
										</ul>
									</li>
									<li class="contains-mega-sub-menu">
										<a href="elements-accordions.html">Elements</a>
										<ul class="mega-sub-menu">
											<li>
												<ul>
													<li>
														<a href="elements-accordions.html"><span class="icon-menu"></span> Accordions</a>
													</li>
													<li>
														<a href="elements-buttons.html"><span class="icon-grid"></span> Buttons</a>
													</li>
													<li>
														<a href="elements-feature-columns.html"><span class="icon-text"></span> Feature Columns</a>
													</li>
													<li>
														<a href="elements-footers.html"><span class="icon-document-landscape"></span> Footers</a>
													</li>
													<li>
														<a href="elements-forms.html"><span class="icon-email"></span> Forms</a>
													</li>
												</ul>
											</li>
											<li>
												<ul>
													<li>
														<a href="elements-lightbox.html"><span class="icon-images"></span> Lightbox</a>
													</li>
													<li>
														<a href="elements-maps.html"><span class="icon-map"></span> Maps</a>
													</li>
													<li>
														<a href="elements-pricing-tables.html"><span class="icon-credit"></span> Pricing Tables</a>
													</li>
													<li>
														<a href="elements-progress-bars.html"><span class="icon-progress-one"></span> Progress Bars</a>
													</li>
													<li>
														<a href="elements-rollovers.html"><span class="icon-mouse-pointer"></span> Rollovers</a>
													</li>
												</ul>
											</li>
											<li>
												<ul>
													<li>
														<a href="elements-signup-forms.html"><span class="icon-newsletter"></span> Subscribe Forms</a>
													</li>
													<li>
														<a href="elements-slider.html"><span class="icon-browser"></span> Slider</a>
													</li>
													<li>
														<a href="elements-tabs.html"><span class="icon-unread"></span> Tabs</a>
													</li>
													<li>
														<a href="elements-testimonials.html"><span class="icon-quote"></span> Testimonials</a>
													</li>
													<li>
														<a href="elements-video.html"><span class="icon-video"></span> Video</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</header>
			<!-- Header End -->