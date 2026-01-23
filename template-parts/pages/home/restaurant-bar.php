<?php
/**
 * Restaurant & Bar Section in the Home Page Template.
 *
 * @package grand-hotel-europe
 * @subpackage Section
 * @since 1.0.0
 */

?>

<section id="section-restaurant-bar" class="section-restaurant-bar py-20 md:pt-28 md:pb-24 xl:py-44">
<div class="theme-container">
  <div class="theme-grid">
    <div class="col-span-2 md:col-span-3 xl:col-span-6">
      <h2 class="overtitle text-dark-2 mb-4"><?php the_field( 'restaurant_bar_overtitle' ); ?></h2>
      <h3 class="title-secondary text-dark-2"><?php the_field( 'restaurant_bar_title' ); ?></h3>
      <p class="text-dark-2 pt-5 pb-7 xl:py-7"><?php the_field( 'restaurant_bar_text' ); ?></p>
      <?php 
        $rb_button = get_field('restaurant_bar_button');
        if( $rb_button ): 
            $link_url = $rb_button['url'];
            $link_title = $rb_button['title'];
            $link_target = $rb_button['target'] ? $rb_button['target'] : '_self';
            ?>
            <a class="btn btn-transparent max-w-56" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
    </div>
    <div class="col-span-2 md:col-span-3 xl:col-span-5 col-start-1 xl:col-start-8 mt-12 md:mt-0">
      <figure class="framed__symmetric--top-right w-full">
        <?php
        $rb_id = get_field( 'restaurant_bar_image' );
        if ( $rb_id ) :
          echo wp_get_attachment_image( $rb_id, 'full', false, array( 'class' => 'w-full h-full object-cover' ) );
        endif;
        ?>
      </figure>
    </div>
  </div>
</div>
</section>