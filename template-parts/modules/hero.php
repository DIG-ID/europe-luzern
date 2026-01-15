  <?php
  /**
   * Hero Module Section that appears on multiple page templates.
   *
   * @package grand-hotel-europe
   * @subpackage modules
   * @since 1.0.0
   */
  ?>

<section id="hero" class="hero-section relative overflow-hidden pt-72 pb-72 md:pt-96 md:pb-96 xl:pt-[22.13rem] xl:pb-48 text-center">
  <figure class="w-full">
    <?php
    $rb_id = get_field( 'hero_background_image' );
    if ( $rb_id ) :
      echo wp_get_attachment_image( $rb_id, 'full', false, array( 'class' => 'absolute inset-0 w-full h-full object-cover -z-10' ) );
    endif;
    ?>
  </figure>

  <div class="absolute inset-0 bg-[#222222] opacity-[0.59] -z-10"></div>

  <div class="theme-container relative z-10">
    <h1 class="title-main pb-5 xl:pb-6 text-white"><?php the_field('hero_title'); ?></h1>
        <div class="breadcrumbs text-white">
            <?php theme_breadcrumbs(); ?>
        </div>
  </div>

</section>