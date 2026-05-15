<?php get_header(); ?>

<main id="lwt-main-content">

	<?php
	get_template_part( 'template-parts/page-banner', null, array(
		'title'    => 'Portfólio',
		'subtitle' => 'Projetos industriais concluídos com sucesso em diversas áreas de automação e engenharia.',
	) );
	?>

	<section class="section-white section-pad">
		<div class="container">

			<?php
			$categories = get_terms( array(
				'taxonomy'   => 'project_category',
				'hide_empty' => true,
			) );
			?>

			<?php if ( ! is_wp_error( $categories ) && $categories ) : ?>
				<div class="portfolio-filters animate-on-scroll mb-5">
					<button class="filter-btn active" data-filter="all">Todos</button>
					<?php foreach ( $categories as $cat ) : ?>
						<button class="filter-btn" data-filter="<?php echo esc_attr( $cat->slug ); ?>"><?php echo esc_html( $cat->name ); ?></button>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>

			<?php
			$portfolio_query = new WP_Query( array(
				'post_type'      => 'lwt_project',
				'posts_per_page' => -1,
				'post_status'    => 'publish',
				'orderby'        => 'date',
				'order'          => 'DESC',
			) );
			?>

			<?php if ( $portfolio_query->have_posts() ) : ?>
				<div class="row g-4">
					<?php
					while ( $portfolio_query->have_posts() ) :
						$portfolio_query->the_post();
						$terms     = get_the_terms( get_the_ID(), 'project_category' );
						$cat_slug  = ( $terms && ! is_wp_error( $terms ) ) ? $terms[0]->slug : '';
						$cat_name  = ( $terms && ! is_wp_error( $terms ) ) ? $terms[0]->name : '';
					?>
						<div class="col-lg-4 col-md-6 portfolio-item animate-on-scroll" data-category="<?php echo esc_attr( $cat_slug ); ?>">
							<div class="portfolio-card">
								<div class="portfolio-img">
									<?php if ( has_post_thumbnail() ) : ?>
										<?php the_post_thumbnail( 'large', array( 'loading' => 'lazy' ) ); ?>
									<?php endif; ?>
									<div class="portfolio-overlay">
										<div class="overlay-content">
											<?php if ( $cat_name ) : ?>
												<span class="overlay-cat"><?php echo esc_html( $cat_name ); ?></span>
											<?php endif; ?>
											<h4><?php the_title(); ?></h4>
											<a href="<?php the_permalink(); ?>" class="overlay-link">Ver Projeto →</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php
					endwhile;
					wp_reset_postdata();
					?>
				</div>
			<?php else : ?>
				<div class="text-center py-5">
					<p class="text-muted-lwt">Nenhum projeto publicado ainda. Volte em breve.</p>
				</div>
			<?php endif; ?>

		</div>
	</section>

	<!-- CTA -->
	<section class="cta-section section-pad">
		<div class="circuit-overlay" aria-hidden="true"></div>
		<div class="container position-relative text-center animate-on-scroll">
			<h2 class="section-title text-white mb-3">O próximo projeto pode ser o seu</h2>
			<p class="cta-subtitle">Fale conosco e descubra como podemos trazer resultados ao seu projeto industrial.</p>
			<a href="<?php echo esc_url( home_url( '/orcamento/' ) ); ?>" class="btn-lwt mt-4">Pedir Orçamento →</a>
		</div>
	</section>

</main>

<?php get_footer(); ?>
