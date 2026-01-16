<?php
/**
 * Gastronomie Section in the Restaurant & Bar Page Template.
 *
 * @package grand-hotel-europe
 * @subpackage Section
 * @since 1.0.0
 */
?>
<section id="gastronomie-section" class="gastronomie-section bg-white pt-20 md:pt-32 xl:pt-44 pb-20 md:pb-24 xl:pb-36">
    <div class="theme-container">
        <div class="theme-grid">
            <div class="col-start-1 col-span-2 md:col-start-1 md:col-span-3 xl:col-start-1 xl:col-span-5">
                <h2 class="title-secondary text-darker"><?php the_field( 'gastronomie_title' ); ?></h2>
                <p class="body text-darker pt-5"><?php the_field( 'gastronomie_text' ); ?></p>
            </div>
            <div class="col-start-1 col-span-2 md:col-start-4 md:col-span-3 xl:col-start-8 xl:col-span-6 pt-11 md:pt-0">
                <?php
                $bg_id = get_field( 'gastronomie_image' );
                if ($bg_id) :
                    echo wp_get_attachment_image(
                    $bg_id,
                    'full',
                    false,
                    [
                        'class'    => ' relative w-full h-full object-cover z-10',
                        'loading'  => 'eager',
                        'decoding' => 'async',
                    ]
                    );
                endif;
                ?>
        </div>
    </div>
</section>