<?php
/**
 * Template Name: Notícias
 */

get_header();

$paged = max( 1, get_query_var( 'paged' ), get_query_var( 'page' ) );

$noticias_query = new WP_Query( array(
	'post_type'      => 'post',
	'posts_per_page' => 9,
	'post_status'    => 'publish',
	'orderby'        => 'date',
	'order'          => 'DESC',
	'paged'          => $paged,
) );
?>

<main id="lwt-main-content">

	<?php
	get_template_part( 'template-parts/page-banner', null, array(
		'title'    => 'Notícias',
		'subtitle' => 'Acompanhe novidades, atualizações e conteúdos sobre automação industrial.',
	) );
	?>

	<section class="section-white section-pad" id="noticias">
		<div class="container">
			<?php if ( $noticias_query->have_posts() ) : ?>
				<div class="row g-4">
					<?php
					while ( $noticias_query->have_posts() ) :
						$noticias_query->the_post();
						$categories = get_the_category();
						$cat_name   = ! empty( $categories ) ? $categories[0]->name : '';
					?>
						<div class="col-lg-4 col-md-6">
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-card' ); ?>>
								<div class="blog-img">
									<a href="<?php the_permalink(); ?>" aria-label="<?php echo esc_attr( get_the_title() ); ?>">
										<?php if ( has_post_thumbnail() ) : ?>
											<?php the_post_thumbnail( 'medium_large', array( 'loading' => 'lazy' ) ); ?>
										<?php else : ?>
											<span class="blog-img-placeholder">LWT</span>
										<?php endif; ?>
									</a>
								</div>
								<div class="blog-body">
									<div class="blog-meta">
										<?php if ( $cat_name ) : ?>
											<span class="blog-category"><?php echo esc_html( $cat_name ); ?></span>
										<?php endif; ?>
										<span><?php echo esc_html( get_the_date( 'd/m/Y' ) ); ?></span>
									</div>
									<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
									<p class="blog-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 22, '...' ) ); ?></p>
									<a href="<?php the_permalink(); ?>" class="blog-link">Ler mais →</a>
								</div>
							</article>
						</div>
					<?php
					endwhile;
					?>
				</div>

				<?php
				$pagination = paginate_links( array(
					'total'     => $noticias_query->max_num_pages,
					'current'   => $paged,
					'mid_size'  => 1,
					'prev_text' => 'Anterior',
					'next_text' => 'Próxima',
				) );
				?>

				<?php if ( $pagination ) : ?>
					<nav class="pagination mt-5" aria-label="Paginação de notícias">
						<div class="nav-links">
							<?php echo wp_kses_post( $pagination ); ?>
						</div>
					</nav>
				<?php endif; ?>

				<?php wp_reset_postdata(); ?>
			<?php else : ?>
				<div class="text-center py-5">
					<p class="text-muted-lwt">Nenhuma notícia publicada ainda. Volte em breve.</p>
				</div>
			<?php endif; ?>
		</div>
	</section>

</main>

<?php get_footer(); ?>
