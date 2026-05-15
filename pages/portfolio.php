<?php
get_header();
?>

<main id="lwt-main-content">

	<?php get_template_part( 'template-parts/page-banner', null, array( 'title' => 'Portfólio', 'subtitle' => 'Conheça os projetos que transformaram indústrias.' ) ); ?>

	<section class="section-white section-pad" id="portfolio-full">
		<div class="container">
			<div class="row justify-content-center text-center mb-5">
				<div class="col-lg-7 animate-on-scroll">
					<span class="section-label">PROJETOS REALIZADOS</span>
					<h2 class="section-title">Soluções que fazem a indústria evoluir</h2>
				</div>
			</div>

			<?php
			$all_terms = get_terms( array(
				'taxonomy'   => 'project_category',
				'hide_empty' => true,
			) );
			?>

			<?php if ( ! empty( $all_terms ) && ! is_wp_error( $all_terms ) ) : ?>
				<div class="portfolio-filters mb-5 animate-on-scroll">
					<button class="filter-btn active" data-filter="all">Todos</button>
					<?php foreach ( $all_terms as $term ) : ?>
						<button class="filter-btn" data-filter="<?php echo esc_attr( $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></button>
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
				<div class="row g-3" id="portfolio-grid">
					<?php
					while ( $portfolio_query->have_posts() ) :
						$portfolio_query->the_post();
						$terms      = get_the_terms( get_the_ID(), 'project_category' );
						$cat_slug   = ( $terms && ! is_wp_error( $terms ) ) ? $terms[0]->slug : '';
						$cat_name   = ( $terms && ! is_wp_error( $terms ) ) ? $terms[0]->name : '';
					?>
						<div class="col-lg-4 col-md-6 animate-on-scroll portfolio-item" data-category="<?php echo esc_attr( $cat_slug ); ?>">
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
				<div class="row g-3" id="portfolio-grid">
					<?php
					$placeholder_items = array(
						array( 'cat' => 'automacao', 'label' => 'AUTOMAÇÃO', 'title' => 'Sistema SCADA Planta Química' ),
						array( 'cat' => 'controle', 'label' => 'CONTROLE', 'title' => 'Painel DCS Refinaria' ),
						array( 'cat' => 'projetos', 'label' => 'PROJETOS', 'title' => 'Modernização Linha de Produção' ),
						array( 'cat' => 'automacao', 'label' => 'AUTOMAÇÃO', 'title' => 'Integração PLC Indústria Alimentícia' ),
						array( 'cat' => 'eletrica', 'label' => 'ELÉTRICA', 'title' => 'Painéis Elétricos Siderúrgica' ),
						array( 'cat' => 'instrumentacao', 'label' => 'INSTRUMENTAÇÃO', 'title' => 'Calibração Petroquímica' ),
						array( 'cat' => 'controle', 'label' => 'CONTROLE', 'title' => 'Sistema de Controle Têxtil' ),
						array( 'cat' => 'projetos', 'label' => 'PROJETOS', 'title' => 'Automação Mineração' ),
						array( 'cat' => 'automacao', 'label' => 'AUTOMAÇÃO', 'title' => 'Robótica Industrial Automotivo' ),
					);
					foreach ( $placeholder_items as $item ) :
					?>
						<div class="col-lg-4 col-md-6 animate-on-scroll portfolio-item" data-category="<?php echo esc_attr( $item['cat'] ); ?>">
							<div class="portfolio-card">
								<div class="portfolio-img">
									<div class="portfolio-overlay">
										<div class="overlay-content">
											<span class="overlay-cat"><?php echo esc_html( $item['label'] ); ?></span>
											<h4><?php echo esc_html( $item['title'] ); ?></h4>
											<a href="#" class="overlay-link">Ver Projeto →</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>

		</div>
	</section>

	<!-- CTA -->
	<section class="section-dark section-pad-sm">
		<div class="container">
			<div class="row align-items-center justify-content-between g-4">
				<div class="col-lg-7 animate-on-scroll">
					<h2 class="section-title mb-2">Vamos trabalhar juntos?</h2>
					<p class="text-mid mb-0">Conte-nos sobre o seu projeto e veja como a LWT Service pode ajudá-lo.</p>
				</div>
				<div class="col-lg-auto animate-on-scroll animate-delay-1">
					<a href="<?php echo esc_url( home_url( '/orcamento/' ) ); ?>" class="btn-lwt">Solicitar Orçamento →</a>
				</div>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>
