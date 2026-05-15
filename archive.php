<?php
/**
 * The Template for displaying Archive pages.
 */
get_header();

$archive_title = '';
if ( is_day() ) {
	$archive_title = sprintf( esc_html__( 'Arquivo: %s', 'ltw' ), get_the_date() );
} elseif ( is_month() ) {
	$archive_title = sprintf( esc_html__( 'Arquivo: %s', 'ltw' ), get_the_date( 'F Y' ) );
} elseif ( is_year() ) {
	$archive_title = sprintf( esc_html__( 'Arquivo: %s', 'ltw' ), get_the_date( 'Y' ) );
} elseif ( is_category() ) {
	$archive_title = single_cat_title( '', false );
} elseif ( is_tag() ) {
	$archive_title = single_tag_title( '', false );
} elseif ( is_author() ) {
	$archive_title = get_the_author();
} else {
	$archive_title = esc_html__( 'Notícias', 'ltw' );
}
?>

<main id="lwt-main-content">

	<?php get_template_part( 'template-parts/page-banner', null, array( 'title' => $archive_title, 'subtitle' => esc_html__( 'Últimas novidades do setor industrial', 'ltw' ) ) ); ?>

	<section class="section-white section-pad">
		<div class="container">

			<?php if ( have_posts() ) : ?>
				<div class="row g-4">
					<?php
					$delay = 0;
					while ( have_posts() ) :
						the_post();
						$categories = get_the_category();
						$cat_name   = ! empty( $categories ) ? $categories[0]->name : '';
						$delay_cls  = $delay > 0 ? ' animate-delay-' . min( $delay, 4 ) : '';
					?>
						<div class="col-lg-4 col-md-6 animate-on-scroll<?php echo esc_attr( $delay_cls ); ?>">
							<div class="blog-card">
								<div class="blog-img">
									<?php if ( has_post_thumbnail() ) : ?>
										<?php the_post_thumbnail( 'medium_large', array( 'loading' => 'lazy' ) ); ?>
									<?php endif; ?>
								</div>
								<div class="blog-body">
									<div class="blog-meta">
										<?php if ( $cat_name ) : ?>
											<span class="blog-category"><?php echo esc_html( $cat_name ); ?></span>
										<?php endif; ?>
										<span><?php echo esc_html( get_the_date( 'd/m/Y' ) ); ?></span>
									</div>
									<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
									<p class="blog-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?></p>
									<a href="<?php the_permalink(); ?>" class="blog-link">Ler mais →</a>
								</div>
							</div>
						</div>
					<?php
						$delay++;
					endwhile;
					?>
				</div>

				<div class="d-flex justify-content-center mt-5">
					<?php
					the_posts_pagination( array(
						'prev_text'          => '← Anterior',
						'next_text'          => 'Próximo →',
						'before_page_number' => '<span class="meta-nav sr-only">Página </span>',
					) );
					?>
				</div>

			<?php else : ?>
				<div class="text-center py-5">
					<p class="text-muted-lwt">Nenhuma publicação encontrada.</p>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-lwt mt-3">Voltar ao Início</a>
				</div>
			<?php endif; ?>

		</div>
	</section>

</main>

<?php get_footer(); ?>
