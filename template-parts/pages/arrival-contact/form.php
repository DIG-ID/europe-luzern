<?php
/**
 * Form Section in the Arrival & Contact Page Template.
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
                <p class="overtitle text-dark"><?php the_field('form_overtitle'); ?></p>
                <h2 class="title-secondary text-darker pt-5 "><?php the_field('form_title'); ?></h2>
            </div>
            <div class="col-start-1 col-span-2 md:col-span-6 xl:col-span-12 pt-12 md:pt-10 xl:pt-16">
                <?php echo do_shortcode('[contact-form-7 id="ef20abd" title="Arrival &amp; contact"]'); ?>
            </div>
        </div>
    </div>
</section>