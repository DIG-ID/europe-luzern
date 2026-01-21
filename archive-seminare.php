<?php
/**
 * The Archive Template for the Custom Post Type seminare.
 *
 * @package grand-hotel-europe
 * @subpackage Template
 * @since 1.0.0
 */

get_header();
	do_action( 'before_main_content' );
			set_query_var('hero_options_prefix', 'seminare');
			get_template_part( 'template-parts/modules/section-hero' );
			set_query_var('options_prefix', 'seminare');
			get_template_part( 'template-parts/modules/section-intro' );
			get_template_part( 'template-parts/archives/seminare/content' );
			set_query_var('outro_options_prefix', 'seminare');
			get_template_part( 'template-parts/modules/section-outro' );
	do_action( 'after_main_content' );
get_footer();