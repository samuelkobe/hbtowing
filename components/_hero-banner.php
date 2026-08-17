<?php if ( have_rows( 'hero_banner' ) ) : ?>
  <?php while ( have_rows( 'hero_banner' ) ) : the_row(); ?>
    <div class="flex items-end mx-auto w-full h-80 md:h-112 pb-40 lg:pb-48">
      <div class="absolute z-0 top-0 left-0 h-auto w-full">
        <?php if ( get_sub_field( 'hero_banner_image' ) ) : ?>
          <img src="<?php the_sub_field( 'hero_banner_image' ); ?>" alt="<?php the_title(); ?> image" class="max-h-full h-80 md:h-112 object-cover w-full" />
        <?php endif ?>
        <div class="absolute bg-tertiary opacity-75 top-0 left-0 w-full h-full"></div>
      </div>

      <div class="container mx-auto px-4 relative text-secondary z-2">
        <h1 class="text-4xl md:text-6xl font-bold"><?php the_title(); ?></h1>
      </div>
    </div>

    <?php if ( get_sub_field( 'sub_banner_option' ) == 1 ) : ?>

      <div class="flex flex-col relative w-full h-auto bg-secondary pb-12 lg:pb-16">

        <div class="bg-secondary w-full h-48 -mt-24 transform skew-y-3 relative z-10"></div>

        <div class="container mx-auto -mt-32 lg:-mt-24 relative z-20">
          <div class="w-full px-8">
            <?php if ( have_rows( 'sub_banner_horizontal' ) ) : ?>
            	<?php while ( have_rows( 'sub_banner_horizontal' ) ) : the_row(); ?>
                <div class="flex flex-row flex-wrap">
                  <p class="w-full lg:w-3/8 px-0 py-4 sm:px-8 text-lg font-bold xl:text-xl leading-loose text-tertiary">
                    <?php echo get_sub_field( 'sub_banner_title' ); ?>
                    <span class="block bg-tertiary h-1 w-24 mt-4 lg:mt-12"></span>
                  </p>
                  <p class="w-full lg:w-5/8 px-0 py-4 sm:px-8 text-base xl:text-lg leading-loose text-tertiary"><?php echo get_sub_field( 'sub_banner_content' ); ?></p>
                </div>
            	<?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>

		<?php else : ?>

      <div class="flex flex-col relative w-full h-auto bg-secondary pb-12 md:pb-16">

        <div class="bg-secondary w-full h-48 -mt-24 transform skew-y-3 relative z-10"></div>

        <div class="container mx-auto -mt-32 lg:-mt-24 relative z-20">
          <div class="flex flex-col justify-center lg:justify-start w-full h-32 text-center px-8">
            <?php if ( have_rows( 'sub_banner_vertical' ) ) : ?>
            	<?php while ( have_rows( 'sub_banner_vertical' ) ) : the_row(); ?>
                  <h2 class="text-tertiary text-2xl lg:text-3xl pb-4"><?php echo get_sub_field( 'sub_banner_title' ); ?></h2>
                  <h3 class="text-light-gray text-base lg:text-xl"><?php echo get_sub_field( 'sub_banner_content' ); ?></h3>
            	<?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>

		<?php endif; ?>

  <?php endwhile; ?>
<?php endif; ?>
