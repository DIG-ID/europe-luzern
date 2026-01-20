<?php
/**
 * The Archive Template for the Single Post Type Seminar
 *
 * @package grand-hotel-europe
 * @subpackage Template
 * @since 1.0.0
 */


get_header();
	do_action( 'before_main_content' );
			get_template_part( 'template-parts/modules/section-hero' );
			get_template_part( 'template-parts/posts/bankette-seminar/content' );
			get_template_part( 'template-parts/modules/section-outro' );
	do_action( 'after_main_content' );
get_footer();

?>