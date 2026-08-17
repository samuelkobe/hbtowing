  <div class="swiper-container swiper-testimonial flex items-center justify-center">

    <div class="swiper-wrapper">
      <?php if ( have_rows( 'testimonials' ) ) : ?>
      	<?php while ( have_rows( 'testimonials' ) ) : the_row(); ?>
          <div class="swiper-slide h-96 md:h-128 lg:h-144 swiper-slide--height-fix flex items-center justify-center bg-secondary">
            <div class="container flex flex-col text-center items-center justify-center absolute mx-auto pb-4">
              <div class="max-w-3xl px-8 lg:px-0">
                <h4 class="text-2xl lg:text-4xl font-bold mb-4 md:mb-12"><?php the_sub_field( 'testimonial_title' ); ?></h4>
                <p class="text-lg lg:text-2.5xl font-medium leading-snug lg:leading-relaxed">“<?php the_sub_field( 'testimonial_paragraph' ); ?>”</p>
                <h5 class="text-base lg:text-2xl font-bold mt-8"><?php the_sub_field( 'testimonial_author' ); ?></h4>
              </div>
            </div>
          </div>
      	<?php endwhile; ?>
      <?php else : ?>
      	<?php // no rows found ?>
      <?php endif; ?>
    </div>
    <!-- Add Arrows -->
    <div class="container swiper-button-custom-arrow flex justify-between absolute mx-auto h-full lg:px-8 xl:px-4">
      <div class="swiper-button-prev swiper-button-black invisible lg:visible"></div>
      <div class="swiper-button-next swiper-button-black invisible lg:visible"></div>
    </div>

  </div>
