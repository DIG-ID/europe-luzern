<?php
/**
 * Form Section in the Arrival & Contact Page Template.
 *
 * @package grand-hotel-europe
 * @subpackage Section
 * @since 1.0.0
 */
?>
<section id="form-section" class="form-section bg-cream">
    <div class="theme-container">
        <div class="theme-grid">
            <div class="col-start-1 col-span-2 md:col-span-6 xl:col-span-12 pt-16 xl:pt-10 pb-16 xl:pb-11">
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