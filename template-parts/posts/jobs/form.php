<?php
/**
 * Form Section in the jobs Archive Template.
 *
 * Form to apply to a Job.
 *
 * @package grand-hotel-europe
 * @subpackage Section
 * @since 1.0.0
 */
?>
<section id="jobs-form" class="jobs-form bg-cream pt-8 md:pt-10 xl:pt-12 pb-16 md:pb-28 xl:pb-10">
	<div class="theme-container theme-grid">
		<div class="col-span-2 md:col-span-6 xl:col-span-12">
			<?php echo do_shortcode( get_field( 'jobs_extras_job_form', 'options' ) ); ?>
		</div>
	</div>
</section>