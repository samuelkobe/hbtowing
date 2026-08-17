<?php /* Template Name: Services Page Template */ get_header(); ?>

	<main role="main">

		<section class="bg-secondary">
			<?php get_template_part('components/_hero-banner'); ?>
		</section>

		<section class="bg-secondary pb-8 lg:pb-24">
			<?php get_template_part('components/_services'); ?>
		</section>

		<section class="bg-tertiary-light py-8">
			<?php get_template_part('components/_estimate-cta-bar'); ?>
		</section>

		<section class="bg-lightest-gray text-tertiary">
			<?php get_template_part('components/_region'); ?>
		</section>

	</main>

<?php get_footer(); ?>
