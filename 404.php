<?php get_header(); ?>

<main role="main" class="bg-tertiary-light relative top-0 pt-4 lg:pt-8">

		<section class="bg-secondary text-tertiary h-80 lg:h-96 mt-24 pt-16 lg:pt-24">

			<div class="container mx-auto text-center">

				<h1 class="text-5xl"><?php _e( 'Page not found', 'html5blank' ); ?></h1>
				<p class="">Whoops! Looks like this page does not exist.</p>
				<a class="button alt mt-8 inline-block hover:bg-tertiary hover:transition-colors duration-250" href="<?php echo home_url(); ?>"><?php _e( 'Return home', 'html5blank' ); ?></a>

			</div>

		</section>

</main>

<?php get_footer(); ?>
