<?php /* Template Name: Why Us Page Template */ get_header(); ?>

	<main role="main">

		<section class="bg-secondary">
			<?php get_template_part('components/_hero-banner'); ?>
		</section>

		<section class="bg-lightest-gray pb-8 lg:pb-12 pt-12">
			<?php get_template_part('components/_accolade'); ?>
		</section>

		<section class="bg-secondary pb-0 lg:pb-4">
			<?php get_template_part('components/_testimonial'); ?>
		</section>

		<section class="bg-lightest-gray text-tertiary p-4">
			<?php get_template_part('components/_question-cta-bar'); ?>
		</section>

	</main>

<?php get_footer(); ?>
