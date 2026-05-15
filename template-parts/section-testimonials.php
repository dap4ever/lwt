<section class="testimonials-section section-light section-pad" id="testemunhos">
	<div class="container">
		<div class="row justify-content-center text-center mb-5">
			<div class="col-lg-7 animate-on-scroll">
				<span class="section-label">TESTEMUNHOS</span>
				<h2 class="section-title">O que dizem nossos clientes</h2>
			</div>
		</div>

		<?php
		$testimonial_query = new WP_Query( array(
			'post_type'      => 'lwt_testimonial',
			'posts_per_page' => -1,
			'post_status'    => 'publish',
		) );
		?>

		<?php if ( $testimonial_query->have_posts() ) : ?>
			<div id="lwt-testimonials-carousel" class="carousel slide animate-on-scroll" data-bs-ride="carousel" data-bs-interval="6000">
				<div class="carousel-inner">
					<?php
					$first = true;
					while ( $testimonial_query->have_posts() ) :
						$testimonial_query->the_post();
						$company = get_post_meta( get_the_ID(), 'testimonial_company', true );
						$role    = get_post_meta( get_the_ID(), 'testimonial_role', true );
					?>
						<div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
							<div class="testimonial-slide text-center">
								<span class="testimonial-quote-icon" aria-hidden="true">"</span>
								<p class="testimonial-text"><?php echo wp_kses_post( get_the_content() ); ?></p>
								<div class="testimonial-author d-flex flex-column align-items-center">
									<div class="testimonial-avatar">
										<?php if ( has_post_thumbnail() ) : ?>
											<?php the_post_thumbnail( 'thumbnail', array( 'loading' => 'lazy' ) ); ?>
										<?php else : ?>
											<div class="avatar-placeholder"><?php echo esc_html( mb_substr( get_the_title(), 0, 1 ) ); ?></div>
										<?php endif; ?>
									</div>
									<div class="testimonial-meta">
										<strong><?php the_title(); ?></strong>
										<span>
											<?php echo esc_html( $role ); ?>
											<?php if ( $role && $company ) echo ', '; ?>
											<?php echo esc_html( $company ); ?>
										</span>
									</div>
								</div>
							</div>
						</div>
					<?php
						$first = false;
					endwhile;
					wp_reset_postdata();
					?>
				</div>
				<div class="carousel-indicators mt-4">
					<?php
					$testimonial_query2 = new WP_Query( array( 'post_type' => 'lwt_testimonial', 'posts_per_page' => -1 ) );
					$idx = 0;
					while ( $testimonial_query2->have_posts() ) :
						$testimonial_query2->the_post();
					?>
						<button type="button" data-bs-target="#lwt-testimonials-carousel" data-bs-slide-to="<?php echo $idx; ?>" <?php echo $idx === 0 ? 'class="active" aria-current="true"' : ''; ?> aria-label="Testemunho <?php echo $idx + 1; ?>"></button>
					<?php
						$idx++;
					endwhile;
					wp_reset_postdata();
					?>
				</div>
			</div>
		<?php else : ?>
			<div class="row justify-content-center">
				<div class="col-lg-8 animate-on-scroll">
					<div class="text-center">
						<span class="testimonial-quote-icon" aria-hidden="true">"</span>
						<p class="testimonial-text">A LWT Service foi essencial no nosso projeto de automação. Equipe extremamente qualificada e comprometida com os resultados.</p>
						<div class="d-flex flex-column align-items-center">
							<div class="testimonial-avatar">
								<div class="avatar-placeholder">J</div>
							</div>
							<div class="testimonial-meta">
								<strong>João Silva</strong>
								<span>Gerente de Produção, Indústria XYZ</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>

	</div>
</section>
