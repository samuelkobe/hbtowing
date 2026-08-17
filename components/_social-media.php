<?php // INSTAGRAM ?>
<?php if ( have_rows( 'instagram_group', 'option' ) ) : ?>
  <?php while ( have_rows( 'instagram_group', 'option' ) ) : the_row(); ?>
    <?php if ( get_sub_field( 'instagram_toggle' ) == 1 ) : ?>
      <a class="flex flex-row items-center text-tertiary-light text-base md:text-lg leading-normal w-full sm:w-1/2 lg:w-full pr-0 sm:pr-4 lg:pr-0 mb-4" href="<?php the_sub_field( 'url' ); ?>" target="_blank">
        <img class="max-w-full w-8 lg:w-12 h-8 lg:h-12 mr-8 sm:mr-2 lg:mr-8" src="<?php bloginfo('template_url'); ?>/img/icons/social-media-instagram.png" alt="Instagram Icon">
        <span class="whitespace-no-wrap"><?php the_sub_field( 'handle' ); ?></span>
      </a>
    <?php else : ?>
      <?php // echo 'false'; ?>
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>


<?php // FACEBOOK ?>
<?php if ( have_rows( 'facebook_group', 'option' ) ) : ?>
  <?php while ( have_rows( 'facebook_group', 'option' ) ) : the_row(); ?>
    <?php if ( get_sub_field( 'facebook_toggle' ) == 1 ) : ?>
      <a class="flex flex-row items-center text-tertiary-light text-base md:text-lg leading-normal w-full sm:w-1/2 lg:w-full pr-0 sm:pr-4 lg:pr-0 mb-4" href="<?php the_sub_field( 'url' ); ?>" target="_blank">
        <img class="max-w-full w-8 lg:w-12 h-8 lg:h-12 mr-8 sm:mr-2 lg:mr-8" src="<?php bloginfo('template_url'); ?>/img/icons/social-media-facebook.png" alt="Facebook Icon">
        <span class="whitespace-no-wrap"><?php the_sub_field( 'handle' ); ?></span>
      </a>
    <?php else : ?>
      <?php // echo 'false'; ?>
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>


<?php // TWITTER ?>
<?php if ( have_rows( 'twitter_group', 'option' ) ) : ?>
  <?php while ( have_rows( 'twitter_group', 'option' ) ) : the_row(); ?>
    <?php if ( get_sub_field( 'twitter_toggle' ) == 1 ) : ?>
      <a class="flex flex-row items-center text-tertiary-light text-base md:text-lg leading-normal w-full sm:w-1/2 lg:w-full pr-0 sm:pr-4 lg:pr-0 mb-4" href="<?php the_sub_field( 'url' ); ?>" target="_blank">
        <img class="max-w-full w-8 lg:w-12 h-8 lg:h-12 mr-8 sm:mr-2 lg:mr-8" src="<?php bloginfo('template_url'); ?>/img/icons/social-media-twitter.png" alt="Twitter Icon">
        <span class="whitespace-no-wrap"><?php the_sub_field( 'handle' ); ?></span>
      </a>
    <?php else : ?>
      <?php // echo 'false'; ?>
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>


<?php // LINKEDIN ?>
<?php if ( have_rows( 'linkedin_group', 'option' ) ) : ?>
  <?php while ( have_rows( 'linkedin_group', 'option' ) ) : the_row(); ?>
    <?php if ( get_sub_field( 'linkedin_toggle' ) == 1 ) : ?>
      <a class="flex flex-row items-center text-tertiary-light text-base md:text-lg leading-normal w-full sm:w-1/2 lg:w-full pr-0 sm:pr-4 lg:pr-0 mb-4" href="<?php the_sub_field( 'url' ); ?>" target="_blank">
        <img class="max-w-full w-8 lg:w-12 h-8 lg:h-12 mr-8 sm:mr-2 lg:mr-8" src="<?php bloginfo('template_url'); ?>/img/icons/social-media-linkedin.png" alt="LinkedIn Icon">
        <span class="whitespace-no-wrap"><?php the_sub_field( 'handle' ); ?></span>
      </a>
    <?php else : ?>
      <?php // echo 'false'; ?>
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>


<?php // PHONE ?>
<?php if ( have_rows( 'phone_group', 'option' ) ) : ?>
  <?php while ( have_rows( 'phone_group', 'option' ) ) : the_row(); ?>
    <?php if ( get_sub_field( 'phone_toggle' ) == 1 ) : ?>
      <a class="flex flex-row items-center text-tertiary-light text-base md:text-lg leading-normal w-full sm:w-1/2 lg:w-full pr-0 sm:pr-4 lg:pr-0 mb-4" href="tel:<?php the_field( 'menu_phone_number', 'option' ); ?>" target="_blank">
        <img class="max-w-full w-8 lg:w-12 h-8 lg:h-12 mr-8 sm:mr-2 lg:mr-8" src="<?php bloginfo('template_url'); ?>/img/icons/social-media-phone.png" alt="Phone Icon">
        <span class="whitespace-no-wrap"><?php the_field( 'menu_phone_number_text', 'option' ); ?></span>
      </a>
    <?php else : ?>
      <?php // echo 'false'; ?>
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>


<?php // EMAIL ?>
<?php if ( have_rows( 'email_group', 'option' ) ) : ?>
  <?php while ( have_rows( 'email_group', 'option' ) ) : the_row(); ?>
    <?php if ( get_sub_field( 'email_toggle' ) == 1 ) : ?>
      <a class="flex flex-row items-center text-tertiary-light text-base md:text-lg leading-normal w-full sm:w-1/2 lg:w-full pr-0 sm:pr-4 lg:pr-0 mb-4" href="mailto:<?php the_sub_field( 'email' ); ?>" target="_blank">
        <img class="max-w-full w-8 lg:w-12 h-8 lg:h-12 mr-8 sm:mr-2 lg:mr-8" src="<?php bloginfo('template_url'); ?>/img/icons/social-media-email.png" alt="Email Icon">
        <span class="whitespace-no-wrap"><?php the_sub_field( 'email' ); ?></span>
      </a>
    <?php else : ?>
      <?php // echo 'false'; ?>
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>
