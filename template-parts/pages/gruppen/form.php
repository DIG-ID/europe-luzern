<?php
/**
 * Form Section in the Gruppen Page Template.
 *
 * @package grand-hotel-europe
 * @subpackage Section
 * @since 1.0.0
 */
?>
<section id="form-section" class="form-section bg-cream pt-24 md:pt-28 xl:pt-32 pb-20 md:pb-24 xl:pb-28">
    <div class="theme-container">
        <div class="theme-grid">
            <div class="col-start-1 col-span-2 md:col-span-5 xl:col-span-12">
                <h2 class="overtitle text-dark"><?php the_field('form_overtitle'); ?></h2>
                <h3 class="title-secondary text-darker pt-5 "><?php the_field('form_title'); ?></h3>
            </div>
            <div class="col-start-1 col-span-2 md:col-span-6 xl:col-span-12 pt-12 md:pt-10 xl:pt-16">
                <?php
                $form = get_field( 'form_shortcode' );
                if ( $form ) :
                    echo do_shortcode( $form );
                endif;
                ?>
            </div>
        </div>
    </div>
</section>