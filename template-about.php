<?php /* Template Name: About Page Template */ get_header(); ?>

	<main role="main">

		<section class="bg-secondary">
			<?php get_template_part('components/_hero-banner'); ?>
		</section>

		<section class="bg-tertiary text-secondary p-8 lg:p-16 lg:py-24">
			<?php get_template_part('components/_mission'); ?>
		</section>

		<section class="bg-lightest-gray text-tertiary">
			<?php get_template_part('components/_region'); ?>
		</section>

		<?php if ( get_field( 'team_toggle' ) == 1 ) : ?>
			<section class="bg-secondary relative text-tertiary p-8 sm:p-16 lg:p-32">
				<?php get_template_part('components/_team'); ?>
			</section>
		<?php else : ?>

		<?php endif; ?>


	</main>

<?php get_footer(); ?>
