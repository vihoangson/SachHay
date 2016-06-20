
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
		<!-- <script src="<?= TEMPLATE_PATH; ?>master/style-switcher/style.switcher.js"></script> -->
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

		<script src="/assets/js/book_homepage.js"></script>
		
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
		<script>
				$('body').prepend('<div id="flash" style="display:none"></div>');
				
				$(".ajax_link").click(function(event) {
					$.post($(this).attr("href"), {data:$(this).data()}, function(data, textStatus, xhr) {
						showFlash(data);
					});
					return false;
				});
				function showFlash (message) {
					$('#flash').html(message);
					$('#flash').fadeIn("slow");
					$('#flash').toggleClass('cssClassHere');
					$('#flash').slideDown('slow');
				};
				$('#flash').click(function () { $(this).fadeOut('slow'); $(this).html("");});
		</script>
		<?php

		foreach ($footer_script as $key => $value) {
			echo $value;
		}

		?>
	</body>
</html>
