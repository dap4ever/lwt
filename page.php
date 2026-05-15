<?php
/**
 * Template Name: Page (Default)
 * Description: Default page template with banner and content area.
 */

get_header();
the_post();
?>

<main id="lwt-main-content">
	<?php
	get_template_part( 'template-parts/page-banner', null, array(
		'title'    => get_the_title(),
		'subtitle' => '',
	) );
	?>

	<section class="section-white section-pad">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-9">
					<div id="post-<?php the_ID(); ?>" <?php post_class( 'lwt-page-content' ); ?>>
						<?php
						the_content();
						wp_link_pages( array(
							'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'ltw' ) . '">',
							'after'    => '</nav>',
							'pagelink' => esc_html__( 'Page %', 'ltw' ),
						) );
						edit_post_link(
							esc_attr__( 'Edit', 'ltw' ),
							'<span class="edit-link">',
							'</span>'
						);
						?>
					</div>

					<?php if ( comments_open() || get_comments_number() ) : ?>
						<?php comments_template(); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
