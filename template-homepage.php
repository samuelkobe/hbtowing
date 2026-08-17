<?php /* Template Name: Home Page Template */ get_header(); ?>

	<main role="main">

		<section class="min-h-screen lg:min-h-0 bg-secondary pb-8 lg:pb-24">
			<?php get_template_part('components/_hero-homepage'); ?>
		</section>

		<section class="bg-lightest-gray text-tertiary">
			<?php get_template_part('components/_region'); ?>
		</section>

		<section class="bg-secondary pb-0 lg:pb-4 overflow-hidden">
			<?php get_template_part('components/_testimonial'); ?>
		</section>

		<section class="bg-secondary pb-8 lg:pb-12 overflow-hidden">
			<?php get_template_part('components/_slider'); ?>
		</section>

		<section class="bg-secondary pb-8 lg:pb-12">
			<?php get_template_part('components/_accolade'); ?>
		</section>

	</main>

<?php get_footer(); ?>
