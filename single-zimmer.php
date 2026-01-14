<?php
/**
 * The Archive Template for the Single Post Type Zimmer
 *
 * @package ambassador-zermatt
 * @subpackage Template
 * @since 1.0.0
 */


get_header();
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/posts/zimmer-suiten/hero' );
	do_action( 'after_main_content' );
get_footer();


?>

