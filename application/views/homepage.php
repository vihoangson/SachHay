<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Blog Timeline | Porto - Responsive HTML5 Template 4.4.0</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?= TEMPLATE_PATH; ?>img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?= TEMPLATE_PATH; ?>img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?= TEMPLATE_PATH; ?>vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?= TEMPLATE_PATH; ?>vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?= TEMPLATE_PATH; ?>vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="<?= TEMPLATE_PATH; ?>vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="<?= TEMPLATE_PATH; ?>vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?= TEMPLATE_PATH; ?>vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?= TEMPLATE_PATH; ?>css/theme.css">
		<link rel="stylesheet" href="<?= TEMPLATE_PATH; ?>css/theme-elements.css">
		<link rel="stylesheet" href="<?= TEMPLATE_PATH; ?>css/theme-blog.css">
		<link rel="stylesheet" href="<?= TEMPLATE_PATH; ?>css/theme-shop.css">
		<link rel="stylesheet" href="<?= TEMPLATE_PATH; ?>css/theme-animate.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?= TEMPLATE_PATH; ?>css/skins/default.css">		<script src="<?= TEMPLATE_PATH; ?>master/style-switcher/style.switcher.localstorage.js"></script>

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?= TEMPLATE_PATH; ?>css/custom.css">

		<!-- Head Libs -->
		<script src="<?= TEMPLATE_PATH; ?>vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body>

		<div class="body">
			<header id="header" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}'>
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-logo">
									<a href="<?= TEMPLATE_PATH; ?>index.html">
										<img alt="Porto" width="111" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="<?= TEMPLATE_PATH; ?>img/logo.png">
									</a>
								</div>
							</div>
							<div class="header-column">
								<div class="header-row">
									<div class="header-search hidden-xs">
										<form id="searchForm" action="page-search-results.html" method="get">
											<div class="input-group">
												<input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
												<span class="input-group-btn">
													<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
												</span>
											</div>
										</form>
									</div>
									<nav class="header-nav-top">
										<ul class="nav nav-pills">
											<li class="hidden-xs">
												<a href="<?= TEMPLATE_PATH; ?>about-us.html"><i class="fa fa-angle-right"></i> About Us</a>
											</li>
											<li class="hidden-xs">
												<a href="<?= TEMPLATE_PATH; ?>contact-us.html"><i class="fa fa-angle-right"></i> Contact Us</a>
											</li>
											<li>
												<span class="ws-nowrap"><i class="fa fa-phone"></i> (123) 456-789</span>
											</li>
										</ul>
									</nav>
								</div>
								<div class="header-row">
									<div class="header-nav">
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
											<i class="fa fa-bars"></i>
										</button>
										<ul class="header-social-icons social-icons hidden-xs">
											<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
											<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
											<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
										</ul>
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
											<nav>
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown">
														<a class="dropdown-toggle" href="<?= TEMPLATE_PATH; ?>index.html">
															Home
														</a>
														<ul class="dropdown-menu">
															<li>
																<a href="<?= TEMPLATE_PATH; ?>index-overview.html">
																	Overview
																</a>
															</li>
															<li>
																<a href="<?= TEMPLATE_PATH; ?>index.html">
																	Landing Page
																</a>
															</li>
															<li class="dropdown-submenu">
																<a href="<?= TEMPLATE_PATH; ?>index-classic.html">Classic</a>
																<ul class="dropdown-menu">
																	<li><a href="<?= TEMPLATE_PATH; ?>index-classic.html" data-thumb-preview="img/previews/preview-classic.jpg">Classic - Original</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>index-classic-color.html" data-thumb-preview="img/previews/preview-classic-color.jpg">Classic - Color</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>index-classic-light.html" data-thumb-preview="img/previews/preview-classic-light.jpg">Classic - Light</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>index-classic-video.html" data-thumb-preview="img/previews/preview-classic-video.jpg">Classic - Video</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>index-classic-video-light.html" data-thumb-preview="img/previews/preview-classic-video-light.jpg">Classic - Video - Light</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a href="<?= TEMPLATE_PATH; ?>index-corporate.html">Corporate <span class="tip">new</span></a>
																<ul class="dropdown-menu">
																	<li class="dropdown-submenu">
																		<a href="<?= TEMPLATE_PATH; ?>#">Corporate - Versions <span class="tip tip-dark">hot</span></a>
																		<ul class="dropdown-menu">
																			<li><a href="<?= TEMPLATE_PATH; ?>index-corporate.html" data-thumb-preview="img/previews/preview-corporate.jpg">Corporate - Version 1</a></li>
																			<li><a href="<?= TEMPLATE_PATH; ?>index-corporate-2.html" data-thumb-preview="img/previews/preview-corporate-version2.jpg">Corporate - Version 2</a></li>
																			<li><a href="<?= TEMPLATE_PATH; ?>index-corporate-3.html" data-thumb-preview="img/previews/preview-corporate-version3.jpg">Corporate - Version 3</a></li>
																			<li><a href="<?= TEMPLATE_PATH; ?>index-corporate-4.html" data-thumb-preview="img/previews/preview-corporate-version4.jpg">Corporate - Version 4</a></li>
																			<li><a href="<?= TEMPLATE_PATH; ?>index-corporate-5.html" data-thumb-preview="img/previews/preview-corporate-version5.jpg">Corporate - Version 5</a></li>
																			<li><a href="<?= TEMPLATE_PATH; ?>index-corporate-6.html" data-thumb-preview="img/previews/preview-corporate-version6.jpg">Corporate - Version 6</a></li>
																			<li><a href="<?= TEMPLATE_PATH; ?>index-corporate-7.html" data-thumb-preview="img/previews/preview-corporate-version7.jpg">Corporate - Version 7</a></li>
																			<li><a href="<?= TEMPLATE_PATH; ?>index-corporate-8.html" data-thumb-preview="img/previews/preview-corporate-version8.jpg">Corporate - Version 8</a></li>
																		</ul>
																	</li>
																	<li><a href="<?= TEMPLATE_PATH; ?>index-corporate-hosting.html" data-thumb-preview="img/previews/preview-corporate-hosting.jpg">Corporate - Hosting</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>index-corporate-digital-agency.html" data-thumb-preview="img/previews/preview-corporate-digital-agency.jpg">Corporate - Digital Agency</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>index-corporate-law-office.html" data-thumb-preview="img/previews/preview-corporate-law-office.jpg">Corporate - Law Office <span class="tip">new</span></a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a href="<?= TEMPLATE_PATH; ?>#">One Page</a>
																<ul class="dropdown-menu">
																	<li><a href="<?= TEMPLATE_PATH; ?>index-one-page.html" data-thumb-preview="img/previews/preview-one-page.jpg">One Page Original</a></li>
																</ul>
															</li>
														</ul>
													</li>
													<li class="dropdown dropdown-mega">
														<a class="dropdown-toggle" href="<?= TEMPLATE_PATH; ?>#">
															Shortcodes
														</a>
														<ul class="dropdown-menu">
															<li>
																<div class="dropdown-mega-content">
																	<div class="row">
																		<div class="col-md-3">
																			<span class="dropdown-mega-sub-title">Shortcodes 1</span>
																			<ul class="dropdown-mega-sub-nav">
																				<li><a href="<?= TEMPLATE_PATH; ?>shortcodes-accordions.html">Accordions</a></li>
																				<li><a href="<?= TEMPLATE_PATH; ?>shortcodes-toggles.html">Toggles</a></li>
																				<li><a href="<?= TEMPLATE_PATH; ?>shortcodes-tabs.html">Tabs</a></li>
																				<li><a href="<?= TEMPLATE_PATH; ?>shortcodes-icons.html">Icons</a></li>
																				<li><a href="<?= TEMPLATE_PATH; ?>shortcodes-icon-boxes.html">Icon Boxes</a></li>
																				<li><a href="<?= TEMPLATE_PATH; ?>shortcodes-carousels.html">Carousels</a></li>
																				<li><a href="<?= TEMPLATE_PATH; ?>shortcodes-modals.html">Modals</a></li>
																				<li><a href="<?= TEMPLATE_PATH; ?>shortcodes-lightboxes.html">Lightboxes</a></li>
																			</ul>
																		</div>
																		<div class="col-md-3">
																			<span class="dropdown-mega-sub-title">Shortcodes 2</span>
																			<ul class="dropdown-mega-sub-nav">
																				<li><a href="<?= TEMPLATE_PATH; ?>shortcodes-buttons.html">Buttons</a></li>
																				<li><a href="<?= TEMPLATE_PATH; ?>shortcodes-labels.html">Labels</a></li>
																				<li><a href="<?= TEMPLATE_PATH; ?>shortcodes-lists.html">Lists</a></li>
																				<li><a href="<?= TEMPLATE_PATH; ?>shortcodes-image-gallery.html">Image Gallery</a></li>
																				<li><a href="<?= TEMPLATE_PATH; ?>shortcodes-image-frames.html">Image Frames</a></li>
																				<li><a href="<?= TEMPLATE_PATH; ?>shortcodes-testimonials.html">Testimonials</a></li>
																				<li><a href="<?= TEMPLATE_PATH; ?>shortcodes-blockquotes.html">Blockquotes</a></li>
																				<li><a href="<?= TEMPLATE_PATH; ?>shortcodes-word-rotator.html">Word Rotator</a></li>
																			</ul>
																		</div>
																		<div class="col-md-3">
																			<span class="dropdown-mega-sub-title">Shortcodes 3</span>
																			<ul class="dropdown-mega-sub-nav">
																				<li><a href="<?= TEMPLATE_PATH; ?>shortcodes-call-to-action.html">Call to Action</a></li>
																				<li><a href="<?= TEMPLATE_PATH; ?>shortcodes-pricing-tables.html">Pricing Tables</a></li>
																				<li><a href="<?= TEMPLATE_PATH; ?>shortcodes-tables.html">Tables</a></li>
																				<li><a href="<?= TEMPLATE_PATH; ?>shortcodes-progressbars.html">Progress Bars</a></li>
																				<li><a href="<?= TEMPLATE_PATH; ?>shortcodes-counters.html">Counters</a></li>
																				<li><a href="<?= TEMPLATE_PATH; ?>shortcodes-sections-parallax.html">Sections &amp; Parallax</a></li>
																				<li><a href="<?= TEMPLATE_PATH; ?>shortcodes-tooltips-popovers.html">Tooltips &amp; Popovers</a></li>
																				<li><a href="<?= TEMPLATE_PATH; ?>shortcodes-sticky-elements.html">Sticky Elements</a></li>
																			</ul>
																		</div>
																		<div class="col-md-3">
																			<span class="dropdown-mega-sub-title">Shortcodes 4</span>
																			<ul class="dropdown-mega-sub-nav">
																				<li><a href="<?= TEMPLATE_PATH; ?>shortcodes-headings.html">Headings</a></li>
																				<li><a href="<?= TEMPLATE_PATH; ?>shortcodes-dividers.html">Dividers</a></li>
																				<li><a href="<?= TEMPLATE_PATH; ?>shortcodes-animations.html">Animations</a></li>
																				<li><a href="<?= TEMPLATE_PATH; ?>shortcodes-medias.html">Medias</a></li>
																				<li><a href="<?= TEMPLATE_PATH; ?>shortcodes-maps.html">Maps</a></li>
																				<li><a href="<?= TEMPLATE_PATH; ?>shortcodes-arrows.html">Arrows</a></li>
																				<li><a href="<?= TEMPLATE_PATH; ?>shortcodes-alerts.html">Alerts</a></li>
																				<li><a href="<?= TEMPLATE_PATH; ?>shortcodes-posts.html">Posts</a></li>
																			</ul>
																		</div>
																	</div>
																</div>
															</li>
														</ul>
													</li>
													<li class="dropdown">
														<a class="dropdown-toggle" href="<?= TEMPLATE_PATH; ?>#">
															Features
														</a>
													
														<ul class="dropdown-menu">
															<li class="dropdown-submenu">
																<a href="<?= TEMPLATE_PATH; ?>#">Headers</a>
																<ul class="dropdown-menu">
																	<li class="dropdown-submenu">
																		<a href="<?= TEMPLATE_PATH; ?>#">Default</a>
																		<ul class="dropdown-menu">
																			<li><a href="<?= TEMPLATE_PATH; ?>index-classic.html">Default</a></li>
																			<li><a href="<?= TEMPLATE_PATH; ?>index-header-language-dropdown.html">Default + Language Dropdown</a></li>
																			<li><a href="<?= TEMPLATE_PATH; ?>index-header-big-logo.html">Default + Big Logo</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a href="<?= TEMPLATE_PATH; ?>#">Flat</a>
																		<ul class="dropdown-menu">
																			<li><a href="<?= TEMPLATE_PATH; ?>index-header-flat.html">Flat</a></li>
																			<li><a href="<?= TEMPLATE_PATH; ?>index-header-flat-top-bar.html">Flat + Top Bar</a></li>
																			<li><a href="<?= TEMPLATE_PATH; ?>index-header-flat-colored-top-bar.html">Flat + Colored Top Bar</a></li>
																			<li><a href="<?= TEMPLATE_PATH; ?>index-header-flat-top-bar-search.html">Flat + Top Bar with Search</a></li>
																		</ul>
																	</li>
																	<li><a href="<?= TEMPLATE_PATH; ?>index-header-center.html">Center</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>index-header-below-slider.html">Below Slider</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>index-header-full-video.html">Full Video</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>index-header-narrow.html">Narrow</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>index-header-always-sticky.html">Always Sticky</a></li>
																	<li class="dropdown-submenu">
																		<a href="<?= TEMPLATE_PATH; ?>#">Transparent</a>
																		<ul class="dropdown-menu">
																			<li><a href="<?= TEMPLATE_PATH; ?>index-header-transparent.html">Transparent</a></li>
																			<li><a href="<?= TEMPLATE_PATH; ?>index-header-transparent-bottom-border.html">Transparent - Bottom Border</a></li>
																			<li><a href="<?= TEMPLATE_PATH; ?>index-header-semi-transparent.html">Semi Transparent</a></li>
																			<li><a href="<?= TEMPLATE_PATH; ?>index-header-semi-transparent-light.html">Semi Transparent - Light</a></li>
																		</ul>
																	</li>
																	<li><a href="<?= TEMPLATE_PATH; ?>index-header-full-width.html">Full-Width</a></li>
																	<li class="dropdown-submenu">
																		<a href="<?= TEMPLATE_PATH; ?>#">Navbar</a>
																		<ul class="dropdown-menu">
																			<li><a href="<?= TEMPLATE_PATH; ?>index-header-navbar.html">Navbar</a></li>
																			<li><a href="<?= TEMPLATE_PATH; ?>index-header-navbar-extra-info.html">Navbar + Extra Info</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a href="<?= TEMPLATE_PATH; ?>#">Side Header</a>
																		<ul class="dropdown-menu">
																			<li><a href="<?= TEMPLATE_PATH; ?>index-header-side-header-left.html">Side Header Left</a></li>
																			<li><a href="<?= TEMPLATE_PATH; ?>index-header-side-header-right.html">Side Header Right</a></li>
																			<li><a href="<?= TEMPLATE_PATH; ?>index-header-side-header-semi-transparent.html">Side Header Semi Transparent</a></li>
																		</ul>
																	</li>
																	<li><a href="<?= TEMPLATE_PATH; ?>index-header-signin.html">Sign In / Sign Up</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>index-header-logged.html">Logged</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a href="<?= TEMPLATE_PATH; ?>#">Navigations</a>
																<ul class="dropdown-menu">
																	<li><a href="<?= TEMPLATE_PATH; ?>index-classic.html">Default</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>index-navigation-stripe.html">Stripe</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>index-navigation-top-line.html">Top Line</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>index-navigation-dark-dropdown.html">Dark Dropdown</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>index-navigation-colors.html">Colors</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a href="<?= TEMPLATE_PATH; ?>#">Footers</a>
																<ul class="dropdown-menu">
																	<li><a href="<?= TEMPLATE_PATH; ?>index-classic.html#footer">Default</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>index-footer-advanced.html#footer">Advanced</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>index-footer-simple.html#footer">Simple</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>index-footer-light.html#footer">Light</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>index-footer-light-narrow.html#footer">Light Narrow</a></li>
																	<li class="dropdown-submenu">
																		<a href="<?= TEMPLATE_PATH; ?>#">Colors</a>
																		<ul class="dropdown-menu">
																			<li><a href="<?= TEMPLATE_PATH; ?>index-footer-color-primary.html#footer">Primary Color</a></li>
																			<li><a href="<?= TEMPLATE_PATH; ?>index-footer-color-secondary.html#footer">Secondary Color</a></li>
																			<li><a href="<?= TEMPLATE_PATH; ?>index-footer-color-tertiary.html#footer">Tertiary Color</a></li>
																			<li><a href="<?= TEMPLATE_PATH; ?>index-footer-color-quaternary.html#footer">Quaternary Color</a></li>
																		</ul>
																	</li>
																	<li><a href="<?= TEMPLATE_PATH; ?>index-footer-latest-work.html#footer">Latest Work</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>index-footer-contact-form.html#footer">Contact Form</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a href="<?= TEMPLATE_PATH; ?>#">Page Headers</a>
																<ul class="dropdown-menu">
																	<li><a href="<?= TEMPLATE_PATH; ?>index-page-header-default.html">Default</a></li>
																	<li class="dropdown-submenu">
																		<a href="<?= TEMPLATE_PATH; ?>#">Colors</a>
																		<ul class="dropdown-menu">
																			<li><a href="<?= TEMPLATE_PATH; ?>index-page-header-color-primary.html">Primary Color</a></li>
																			<li><a href="<?= TEMPLATE_PATH; ?>index-page-header-color-secondary.html">Secondary Color</a></li>
																			<li><a href="<?= TEMPLATE_PATH; ?>index-page-header-color-tertiary.html">Tertiary Color</a></li>
																			<li><a href="<?= TEMPLATE_PATH; ?>index-page-header-color-quaternary.html">Quaternary Color</a></li>
																		</ul>
																	</li>
																	<li><a href="<?= TEMPLATE_PATH; ?>index-page-header-light.html">Light</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>index-page-header-light-reverse.html">Light - Reverse</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>index-page-header-custom-background.html">Custom Background</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>index-page-header-parallax.html">Parallax</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>index-page-header-center.html">Center</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a href="<?= TEMPLATE_PATH; ?>#">Admin Extension <span class="tip tip-dark">hot</span> <em class="not-included">(Not Included)</em></a>
																<ul class="dropdown-menu">
																	<li><a href="<?= TEMPLATE_PATH; ?>feature-admin-forms-basic.html">Forms Basic</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>feature-admin-forms-advanced.html">Forms Advanced</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>feature-admin-forms-wizard.html">Forms Wizard</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>feature-admin-forms-code-editor.html">Code Editor</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>feature-admin-tables-advanced.html">Tables Advanced</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>feature-admin-tables-responsive.html">Tables Responsive</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>feature-admin-tables-editable.html">Tables Editable</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>feature-admin-tables-ajax.html">Tables Ajax</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>feature-admin-charts.html">Charts</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a href="<?= TEMPLATE_PATH; ?>#">Sliders</a>
																<ul class="dropdown-menu">
																	<li><a href="<?= TEMPLATE_PATH; ?>index-classic.html">Revolution Slider</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>index-slider-2.html">Nivo Slider</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a href="<?= TEMPLATE_PATH; ?>#">Layout Options</a>
																<ul class="dropdown-menu">
																	<li><a href="<?= TEMPLATE_PATH; ?>feature-layout-boxed.html">Boxed</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>feature-layout-dark.html">Dark</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>feature-layout-rtl.html">RTL</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a href="<?= TEMPLATE_PATH; ?>#">Extra</a>
																<ul class="dropdown-menu">
																	<li><a href="<?= TEMPLATE_PATH; ?>feature-typography.html">Typography</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>feature-grid-system.html">Grid System</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>feature-page-loading.html">Page Loading</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>feature-lazy-load.html">Lazy Load</a></li>
																</ul>
															</li>
														</ul>
													</li>
													<li class="dropdown active">
														<a class="dropdown-toggle" href="<?= TEMPLATE_PATH; ?>#">
															Pages
														</a>
														<ul class="dropdown-menu">
															<li class="dropdown-submenu">
																<a href="<?= TEMPLATE_PATH; ?>#">Shop</a>
																<ul class="dropdown-menu">
																	<li><a href="<?= TEMPLATE_PATH; ?>shop-full-width.html">Shop - Full Width</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>shop-sidebar.html">Shop - Sidebar</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>shop-product-full-width.html">Shop - Product Full Width</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>shop-product-sidebar.html">Shop - Product Sidebar</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>shop-cart.html">Shop - Cart</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>shop-login.html">Shop - Login</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>shop-checkout.html">Shop - Checkout</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a href="<?= TEMPLATE_PATH; ?>#">Blog</a>
																<ul class="dropdown-menu">
																	<li><a href="<?= TEMPLATE_PATH; ?>blog-full-width.html">Blog Full Width</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>blog-large-image.html">Blog Large Image</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>blog-medium-image.html">Blog Medium Image</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>blog-timeline.html">Blog Timeline</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>blog-post.html">Single Post</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a href="<?= TEMPLATE_PATH; ?>#">Layouts</a>
																<ul class="dropdown-menu">
																	<li><a href="<?= TEMPLATE_PATH; ?>page-full-width.html">Full Width</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>page-left-sidebar.html">Left Sidebar</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>page-right-sidebar.html">Right Sidebar</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>page-left-and-right-sidebars.html">Left and Right Sidebars</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>page-sticky-sidebar.html">Sticky Sidebar</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>page-secondary-navbar.html">Secondary Navbar</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a href="<?= TEMPLATE_PATH; ?>#">Extra</a>
																<ul class="dropdown-menu">
																	<li><a href="<?= TEMPLATE_PATH; ?>page-404.html">404 Error</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>page-coming-soon.html">Coming Soon</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>page-maintenance-mode.html">Maintenance Mode</a></li>
																	<li><a href="<?= TEMPLATE_PATH; ?>sitemap.html">Sitemap</a></li>
																</ul>
															</li>
															<li><a href="<?= TEMPLATE_PATH; ?>page-custom-header.html">Custom Header</a></li>
															<li><a href="<?= TEMPLATE_PATH; ?>page-team.html">Team</a></li>
															<li><a href="<?= TEMPLATE_PATH; ?>page-services.html">Services</a></li>
															<li><a href="<?= TEMPLATE_PATH; ?>page-careers.html">Careers</a></li>
															<li><a href="<?= TEMPLATE_PATH; ?>page-our-office.html">Our Office</a></li>
															<li><a href="<?= TEMPLATE_PATH; ?>page-faq.html">FAQ</a></li>
															<li><a href="<?= TEMPLATE_PATH; ?>page-login.html">Login / Register</a></li>
														</ul>
													</li>
													<li class="dropdown">
														<a class="dropdown-toggle" href="<?= TEMPLATE_PATH; ?>#">
															Portfolio
														</a>
														<ul class="dropdown-menu">
															<li><a href="<?= TEMPLATE_PATH; ?>portfolio-4-columns.html">4 Columns</a></li>
															<li><a href="<?= TEMPLATE_PATH; ?>portfolio-3-columns.html">3 Columns</a></li>
															<li><a href="<?= TEMPLATE_PATH; ?>portfolio-2-columns.html">2 Columns</a></li>
															<li><a href="<?= TEMPLATE_PATH; ?>portfolio-lightbox.html">Portfolio Lightbox</a></li>
															<li><a href="<?= TEMPLATE_PATH; ?>portfolio-timeline.html">Portfolio Timeline</a></li>
															<li><a href="<?= TEMPLATE_PATH; ?>portfolio-full-width.html">Portfolio Full Width</a></li>
															<li><a href="<?= TEMPLATE_PATH; ?>portfolio-single-project.html">Single Project</a></li>
														</ul>
													</li>
													<li class="dropdown">
														<a class="dropdown-toggle" href="<?= TEMPLATE_PATH; ?>#">
															About Us
														</a>
														<ul class="dropdown-menu">
															<li><a href="<?= TEMPLATE_PATH; ?>about-us.html">About Us</a></li>
															<li><a href="<?= TEMPLATE_PATH; ?>about-us-basic.html">About Us - Basic</a></li>
															<li><a href="<?= TEMPLATE_PATH; ?>about-me.html">About Me</a></li>
														</ul>
													</li>
													<li class="dropdown">
														<a class="dropdown-toggle" href="<?= TEMPLATE_PATH; ?>#">
															Contact Us
														</a>
														<ul class="dropdown-menu">
															<li><a href="<?= TEMPLATE_PATH; ?>contact-us.html">Contact Us - Basic</a></li>
															<li><a href="<?= TEMPLATE_PATH; ?>contact-us-advanced.php">Contact Us - Advanced</a></li>
														</ul>
													</li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main shop">

				<div class="container">

					<div class="row">
						<div class="col-md-12">
							<hr class="tall">
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<h1 class="mb-none"><strong>Shop</strong></h1>
							<p>Showing 1–12 of 25 results.</p>
						</div>
					</div>

					<div class="row">

						<ul class="products product-thumb-info-list" data-plugin-masonry="" style="position: relative; height: 8090px;">
							<?php 
							foreach ($rs as $key => $value) {
								?>
								<li class="col-md-3 col-sm-6 col-xs-12 product" style="position: absolute; left: 0px; top: 25px;">
									<a href="shop-product-sidebar.html">
										<span class="onsale">Sale!</span>
									</a>
									<span class="product-thumb-info">
										<a href="shop-cart.html" class="add-to-cart-product">
											<span><i class="fa fa-shopping-cart"></i> Add to Cart</span>
										</a>
										<a href="shop-product-sidebar.html">
											<span class="product-thumb-info-image">
												<span class="product-thumb-info-act">
													<span class="product-thumb-info-act-left"><em>View</em></span>
													<span class="product-thumb-info-act-right"><em><i class="fa fa-plus"></i> Details</em></span>
												</span>
												<img alt="" class="img-responsive" src="<?= PATH_IMAGE; ?><?= $value->getImage(); ?>">
											</span>
										</a>
										<span class="product-thumb-info-content">
											<a href="shop-product-sidebar.html">
												<h4><?= $value->getName(); ?></h4>
												<span class="price">
													<del><span class="amount">$325</span></del>
													<ins><span class="amount">$299</span></ins>
												</span>
											</a>
										</span>
									</span>
								</li>
								<?php
							}
							?>
						</ul>

					</div>

					<div class="row">
						<div class="col-md-12">
							<ul class="pagination pull-right">
								<li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
							</ul>
						</div>
					</div>

				</div>

			</div>

			<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="footer-ribbon">
							<span>Get in Touch</span>
						</div>
						<div class="col-md-3">
							<div class="newsletter">
								<h4>Newsletter</h4>
								<p>Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</p>
			
								<div class="alert alert-success hidden" id="newsletterSuccess">
									<strong>Success!</strong> You've been added to our email list.
								</div>
			
								<div class="alert alert-danger hidden" id="newsletterError"></div>
			
								<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
									<div class="input-group">
										<input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
										<span class="input-group-btn">
											<button class="btn btn-default" type="submit">Go!</button>
										</span>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-3">
							<h4>Latest Tweets</h4>
							<div id="tweet" class="twitter" data-plugin-tweets data-plugin-options='{"username": "oklerthemes", "count": 2}'>
								<p>Please wait...</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="contact-details">
								<h4>Contact Us</h4>
								<ul class="contact">
									<li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</p></li>
									<li><p><i class="fa fa-phone"></i> <strong>Phone:</strong> (123) 456-789</p></li>
									<li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="<?= TEMPLATE_PATH; ?>mailto:mail@example.com">mail@example.com</a></p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<h4>Follow Us</h4>
							<ul class="social-icons">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-1">
								<a href="<?= TEMPLATE_PATH; ?>index.html" class="logo">
									<img alt="Porto Website Template" class="img-responsive" src="<?= TEMPLATE_PATH; ?>img/logo-footer.png">
								</a>
							</div>
							<div class="col-md-7">
								<p>© Copyright 2015. All Rights Reserved.</p>
							</div>
							<div class="col-md-4">
								<nav id="sub-menu">
									<ul>
										<li><a href="<?= TEMPLATE_PATH; ?>page-faq.html">FAQ's</a></li>
										<li><a href="<?= TEMPLATE_PATH; ?>sitemap.html">Sitemap</a></li>
										<li><a href="<?= TEMPLATE_PATH; ?>contact-us.html">Contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="<?= TEMPLATE_PATH; ?>vendor/jquery/jquery.min.js"></script>
		<script src="<?= TEMPLATE_PATH; ?>vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="<?= TEMPLATE_PATH; ?>vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="<?= TEMPLATE_PATH; ?>vendor/jquery-cookie/jquery-cookie.min.js"></script>
		<script src="<?= TEMPLATE_PATH; ?>master/style-switcher/style.switcher.js"></script>
		<script src="<?= TEMPLATE_PATH; ?>vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?= TEMPLATE_PATH; ?>vendor/common/common.min.js"></script>
		<script src="<?= TEMPLATE_PATH; ?>vendor/jquery.validation/jquery.validation.min.js"></script>
		<script src="<?= TEMPLATE_PATH; ?>vendor/jquery.stellar/jquery.stellar.min.js"></script>
		<script src="<?= TEMPLATE_PATH; ?>vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
		<script src="<?= TEMPLATE_PATH; ?>vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="<?= TEMPLATE_PATH; ?>vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="<?= TEMPLATE_PATH; ?>vendor/isotope/jquery.isotope.min.js"></script>
		<script src="<?= TEMPLATE_PATH; ?>vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="<?= TEMPLATE_PATH; ?>vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="<?= TEMPLATE_PATH; ?>vendor/vide/vide.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?= TEMPLATE_PATH; ?>js/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?= TEMPLATE_PATH; ?>js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?= TEMPLATE_PATH; ?>js/theme.init.js"></script>

		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-42715764-5', 'auto');
			ga('send', 'pageview');
		</script>
		<script src="<?= TEMPLATE_PATH; ?>master/analytics/analytics.js"></script>

	</body>
</html>
