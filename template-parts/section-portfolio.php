<section class="section-white section-pad" id="portfolio">
	<div class="container">
		<div class="row justify-content-between align-items-end mb-5">
			<div class="col-lg-7 animate-on-scroll">
				<span class="section-label">PROJETOS</span>
				<h2 class="section-title mb-0">Conheça alguns dos nossos projetos industriais</h2>
			</div>
			<div class="col-lg-auto mt-3 mt-lg-0 animate-on-scroll animate-delay-1">
				<a href="<?php echo esc_url( home_url( '/portfolio/' ) ); ?>" class="btn-lwt-outline">
					Ver portfólio completo →
				</a>
			</div>
		</div>

		<?php
		$portfolio_query = new WP_Query( array(
			'post_type'      => 'lwt_project',
			'posts_per_page' => 6,
			'post_status'    => 'publish',
			'orderby'        => 'date',
			'order'          => 'DESC',
		) );
		?>

		<?php if ( $portfolio_query->have_posts() ) : ?>
			<div class="row g-3">
				<?php
				$delay = 0;
				while ( $portfolio_query->have_posts() ) :
					$portfolio_query->the_post();
					$terms = get_the_terms( get_the_ID(), 'project_category' );
					$category_name = ( $terms && ! is_wp_error( $terms ) ) ? $terms[0]->name : '';
					$delay_class = $delay > 0 ? ' animate-delay-' . min( $delay, 4 ) : '';
				?>
					<div class="col-lg-4 col-md-6 animate-on-scroll<?php echo esc_attr( $delay_class ); ?>">
						<div class="portfolio-card">
							<div class="portfolio-img">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'large', array( 'loading' => 'lazy' ) ); ?>
								<?php endif; ?>
								<div class="portfolio-overlay">
									<div class="overlay-content">
										<?php if ( $category_name ) : ?>
											<span class="overlay-cat"><?php echo esc_html( $category_name ); ?></span>
										<?php endif; ?>
										<h4><?php the_title(); ?></h4>
										<a href="<?php the_permalink(); ?>" class="overlay-link">Ver Projeto →</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
					$delay++;
				endwhile;
				wp_reset_postdata();
				?>
			</div>
		<?php else : ?>
			<div class="row g-3">
				<?php for ( $i = 1; $i <= 6; $i++ ) : ?>
					<div class="col-lg-4 col-md-6 animate-on-scroll">
						<div class="portfolio-card">
							<div class="portfolio-img">
								<div class="portfolio-overlay">
									<div class="overlay-content">
										<span class="overlay-cat">AUTOMAÇÃO</span>
										<h4>Projeto Industrial <?php echo esc_html( $i ); ?></h4>
										<a href="#" class="overlay-link">Ver Projeto →</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endfor; ?>
			</div>
		<?php endif; ?>

	</div>
</section>
