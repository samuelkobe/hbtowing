			<!-- footer -->
			<footer class="bg-tertiary-light" role="contentinfo">

				<div class="container mx-auto lg:px-8">

					<div class="flex flex-row flex-wrap items-center justify-between py-16 lg:py-32">
						<div class="flex flex-col w-full lg:w-2/5 px-8 sm:px-4 lg:px-0 pb-16 lg:pb-0">
							<a href="<?php echo home_url(); ?>" class="flex items-start mb-5">
								<?php if ( get_field( 'footer_logo', 'option' ) ) : ?>
									<img src="<?php the_field( 'footer_logo', 'option' ); ?>" alt="<?php bloginfo('name'); ?>" class="h-16 pr-2" />
								<?php endif ?>
								<div class="flex flex-col items-left pl-3">
									<h2 class="text-white text-2xl font-bold leading-less"><?php bloginfo('name'); ?></h2>
									<p class="block text-white leading-more"><?php bloginfo('description'); ?></p>
								</div>
							</a>
							<h3 class="text-secondary text-2.5xl font-bold leading-relaxed max-w-full lg:max-w-md mb-10">Help Us Help You <br> <span class="text-primary text-2xl">Call, text or email us</span></h3>
							<div class="flex flex-col sm:flex-row">
								<a class="button w-48 xl:w-1/2 mr-0 mb-4 sm:mr-4 sm:mb-0 xl:mr-8" href="/contact">Email Us</a>
								<a class="button w-48 xl:w-1/2" href="tel:<?php the_field( 'menu_phone_number', 'option' ); ?>"><?php the_field( 'menu_phone_number_text', 'option' ); ?></a>
							</div>
						</div>

						<div class="flex flex-col w-full md:w-1/3 lg:w-1/5 text-secondary px-8 pb-8 md:pb-0 sm:px-4 lg:p-0">
							<h3 class="text-xl font-bold mb-4">Pages</h3>
							<ul class="text-sm">
								<li class="mb-2"><a class="hover:opacity-75 hover:transition-colors duration-250" href="/why-us">Why Us</a></li>
								<li class="mb-2"><a class="hover:opacity-75 hover:transition-colors duration-250" href="/about">About</a></li>
								<li class="mb-2"><a class="hover:opacity-75 hover:transition-colors duration-250" href="/services">Services</a></li>
								<li class="mb-2"><a class="hover:opacity-75 hover:transition-colors duration-250" href="/contact">Contact</a></li>
							</ul>
						</div>

						<div class="flex flex-col w-full md:w-1/3 lg:w-1/5 text-secondary px-8 pb-8 md:pb-0 sm:px-4 lg:p-0">
							<h3 class="text-xl font-bold mb-4">Contact</h3>
							<ul class="text-sm">
								<li class="mb-2"><a class="hover:opacity-75 hover:transition-colors duration-250" href="tel:<?php the_field( 'menu_phone_number', 'option' ); ?>"><?php the_field( 'menu_phone_number_text', 'option' ); ?></a></li>
								<li class="mb-6"><a class="hover:opacity-75 hover:transition-colors duration-250" href="mailto:hbtowing@shaw.ca">hbtowing@shaw.ca</a></li>
								<li>V9T 5P8</li>
								<li>Nanaimo, British Columbia</li>
							</ul>
						</div>

						<div class="flex flex-col w-full md:w-1/3 lg:w-1/5 text-secondary px-8 sm:px-4 lg:px-0">
							<h3 class="text-xl font-bold mb-4">Signature Services</h3>
							<ul class="text-sm whitespace-no-wrap">
								<li class="mb-2">Small, Medium &amp; Heavy Machinery</li>
								<li class="mb-2">Boat &amp; Exotic Car Hauling</li>
								<li class="mb-2">Cross Ferry Towing</li>
								<li class="mb-2">Local &amp; Long Distance Hauling</li>
							</ul>
						</div>

					</div>
				</div>


				<!-- copyright -->
				<div class="flex flex-col md:flex-row items-start md:items-center justify-start md:justify-between w-full bg-tertiary text-sm text-secondary p-7">
					<p class="py-2 text-lg md:text-base">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
					<p class="py-2"> All Rights Reserved. <?php if ( get_field( 'copyright_text', 'option' ) ) { the_field( 'copyright_text', 'option' ); } ?>
						<span class="text-xs inline lg:block"><?php _e('Powered by', 'web-ok-starter'); ?> <a href="https://webok.ca" target="_blank" class="text-xs hover:text-primary transition-colors duration-200">Web Ok Solutions Inc.</a></span>
					</p>
					<span class="text-lg md:text-base flex flex-row text-secondary items-center justify-start md:justify-between w-full md:w-32 py-2">
						<a class="hover:opacity-75 hover:transition-colors duration-250 pr-4" href="/privacy">Privacy</a>
						<a class="hover:opacity-75 hover:transition-colors duration-250 pr-4" href="/terms">Terms</a>
					</span>
				</div>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
