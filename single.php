<?php
/**
 * The Template for displaying all single posts.
 */
get_header();
?>

<main id="lwt-main-content">

	<?php
	if ( have_posts() ) :
		the_post();
	?>

	<?php
	get_template_part( 'template-parts/page-banner', null, array(
		'title'    => get_the_title(),
		'subtitle' => get_the_date( 'd/m/Y' ) . ' · ' . get_the_category_list( ', ' ),
	) );
	?>

	<section class="section-white section-pad">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">

					<article id="post-<?php the_ID(); ?>" <?php post_class( 'lwt-single-post' ); ?>>

						<?php if ( has_post_thumbnail() ) : ?>
							<div class="single-featured-img mb-4">
								<?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid rounded', 'loading' => 'eager' ) ); ?>
							</div>
						<?php endif; ?>

						<div class="single-content">
							<?php the_content(); ?>
						</div>

						<?php
						wp_link_pages( array(
							'before' => '<nav class="page-links" aria-label="' . esc_attr__( 'Páginas', 'ltw' ) . '">',
							'after'  => '</nav>',
						) );
						?>

						<footer class="single-post-footer mt-4">
							<?php
							$tags = get_the_tags();
							if ( $tags ) :
							?>
								<div class="post-tags mb-3">
									<?php foreach ( $tags as $tag ) : ?>
										<a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" class="tag-pill"><?php echo esc_html( $tag->name ); ?></a>
									<?php endforeach; ?>
								</div>
							<?php endif; ?>

							<?php edit_post_link( esc_html__( 'Editar', 'ltw' ), '<span class="edit-link">', '</span>' ); ?>
						</footer>

					</article>

					<nav class="post-navigation mt-5" aria-label="<?php esc_attr_e( 'Navegação entre posts', 'ltw' ); ?>">
						<div class="row g-3">
							<?php
							$prev_post = get_previous_post();
							$next_post = get_next_post();
							?>
							<?php if ( $prev_post ) : ?>
								<div class="col-6">
									<a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>" class="post-nav-link post-nav-prev">
										<span class="nav-label">← Anterior</span>
										<span class="nav-title"><?php echo esc_html( get_the_title( $prev_post->ID ) ); ?></span>
									</a>
								</div>
							<?php endif; ?>
							<?php if ( $next_post ) : ?>
								<div class="col-6 text-end">
									<a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" class="post-nav-link post-nav-next">
										<span class="nav-label">Próximo →</span>
										<span class="nav-title"><?php echo esc_html( get_the_title( $next_post->ID ) ); ?></span>
									</a>
								</div>
							<?php endif; ?>
						</div>
					</nav>

					<?php if ( comments_open() || get_comments_number() ) : ?>
						<?php comments_template(); ?>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>

</main>

<?php get_footer(); ?>
