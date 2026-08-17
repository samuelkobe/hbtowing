<?php if ( have_rows( 'hero' ) ) : ?>
  <?php while ( have_rows( 'hero' ) ) : the_row(); ?>
    <div class="lg:container lg:mx-auto px-8 lg:px-0">

      <div class="absolute z-0 top-0 left-0 h-auto w-full bg-tertiary">
        <?php if ( get_sub_field( 'hero_background_image' ) ) : ?>
          <img src="<?php the_sub_field( 'hero_background_image' ); ?>" alt="<?php the_sub_field( 'hero_title' ); ?>" class="max-h-full h-192 object-cover w-full opacity-50" />
        <?php endif ?>
      </div>

      <div class="relative flex flex-col z-10 pt-32 md:pt-40 lg:pt-64 px-4 sm:px-8 md:px-16 lg:px-16">

        <div class="flex flex-col lg:flex-row">

          <div class="flex flex-col w-full lg:w-1/2 xl:w-3/8">
            <h2 class="w-full text-2xl lg:text-3xl text-white font-bold leading-normal"><?php echo get_sub_field( 'hero_title' ); ?></h2>
            <h3 class="w-full text-2xl lg:text-3xl text-primary font-bold leading-normal"><?php echo get_sub_field( 'hero_subtitle' ); ?></h3>

            <p class="w-full text-lg lg:text-xl text-white mt-4 leading-relaxed font-medium "><?php echo get_sub_field( 'hero_content' ); ?></p>

            <?php $hero_cta = get_sub_field( 'hero_cta' ); ?>
            <?php if ( $hero_cta ) : ?>
              <a class="button mt-8" href="<?php echo esc_url( $hero_cta['url'] ); ?>" target="<?php echo esc_attr( $hero_cta['target'] ); ?>"><?php echo esc_html( $hero_cta['title'] ); ?></a>
            <?php endif; ?>
          </div>

          <div class="flex flex-row justify-center mt-16 md:mt-0 xl:-mt-16 w-full lg:w-1/2 xl:w-5/8">
            <?php $hero_image = get_sub_field( 'hero_image' ); ?>
        		<?php if ( $hero_image ) : ?>
        			<img class="w-auto max-w-full lg:max-w-full lg:max-w-xl xl:max-w-2xl h-48 md:h-64 lg:h-80 xl:h-104" src="<?php echo esc_url( $hero_image['url'] ); ?>" alt="<?php echo esc_attr( $hero_image['alt'] ); ?>" />
        		<?php endif; ?>
          </div>
        </div>

      </div>

    </div>

    <div class="lg:container lg:mx-auto px-8 md:px-16 lg:px-8 overflow-hidden">
        <div class="swiper-container swiper-hero flex flex-row flex-wrap mt-8 lg:mt-4 overflow-visible pr-16">
          <?php if ( have_rows( 'hero_repeater' ) ) : ?>
             <div class="swiper-wrapper m-4 sm:m-8">
              <?php while ( have_rows( 'hero_repeater' ) ) : the_row(); ?>
                <div class="swiper-slide shadow-xl">
                  <div class="flex flex-row items-center bg-primary px-5 py-3 leading-tight min-h-12">
                    <h3 class="text-xl md:text-2xl font-bold text-tertiary leading-tight w-full text-center"><?php echo get_sub_field( 'card_title' ); ?></h3>
                  </div>
                  <div class="bg-white">
                    <?php if ( have_rows( 'card_list' ) ) : ?>
                      <?php $counter = 1; ?>
                      <ul class="text-tertiary font-light text-sm min-h-full min-h-32 px-5 py-4">
              					<?php while ( have_rows( 'card_list' ) ) : the_row(); ?>
              						<li class="flex flex-row items-center pb-2 last:pb-0">
                            <span class="flex flex-col items-center justify-center bg-lightest-gray inline-block text-tertiary w-2 h-2 rounded-full p-4 mr-4"><?php echo $counter; ?></span>
                            <?php echo get_sub_field( 'list_item' ); ?>
                          </li>
                          <?php $counter++ ?>
              					<?php endwhile; ?>
                      </ul>
            				<?php else : ?>
            					<?php // no rows found ?>
            				<?php endif; ?>
                    <?php $card_cta_url = get_sub_field( 'card_cta_url' ); ?>
                    <?php if ( $card_cta_url ) : ?>
                      <div class="flex flex-col items justify-center bg-tertiary-bright text-white w-full text-center text-lg leading-normal h-12 hover:bg-tertiary hover:transition-colors duration-250">
                        <a href="<?php echo esc_url( $card_cta_url['url'] ); ?>" target="<?php echo esc_attr( $card_cta_url['target'] ); ?>"><?php echo esc_html( $card_cta_url['title'] ); ?></a>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
              <?php endwhile; ?>
            </div>
          <?php else : ?>
            <?php // no rows found ?>
          <?php endif; ?>
        </div>

        <?php $hero_cards_cta = get_sub_field( 'hero_cards_cta' ); ?>
        <?php if ( $hero_cards_cta ) : ?>
          <div class="mt-4 pt-4 m-4 sm:mx-8 text-lg inline-block">
            <a class="flex flex-row items-center text-light-gray hover:text-tertiary hover:transition-colors duration-250" href="<?php echo esc_url( $hero_cards_cta['url'] ); ?>" target="<?php echo esc_attr( $hero_cards_cta['target'] ); ?>">
              <?php echo esc_html( $hero_cards_cta['title'] ); ?>
              <span class="w-5 ml-4 block">
                <svg class="fill-current" viewBox="0 0 31.49 31.49">
                   <path d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111,C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587,c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/>
                </svg>
              </span>
            </a>
          </div>
        <?php endif; ?>

    </div>
  <?php endwhile; ?>
<?php endif; ?>
