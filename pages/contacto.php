<?php
add_filter(
	'body_class',
	function ( $classes ) {
		$classes[] = 'lwt-contact-page';
		return $classes;
	}
);

get_header();
?>

<main id="lwt-main-content" class="contact-page-main">

	<?php get_template_part( 'template-parts/section-contact', null, array( 'page_context' => true ) ); ?>

	<?php get_template_part( 'template-parts/section-stats' ); ?>

</main>

<?php get_footer(); ?>
