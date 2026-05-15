<section class="contact-section section-pad" id="contato">
	<div class="container">
		<div class="row justify-content-center text-center mb-5">
			<div class="col-lg-7 animate-on-scroll">
				<span class="section-label">FALE CONOSCO</span>
				<h2 class="section-title">Entre em contacto com a nossa equipa</h2>
			</div>
		</div>

		<div class="row g-5">

			<!-- Form column -->
			<div class="col-lg-7 animate-on-scroll">
				<?php
				if ( shortcode_exists( 'contact-form-7' ) ) {
					$forms = get_posts( array(
						'post_type'   => 'wpcf7_contact_form',
						'numberposts' => 1,
					) );
					if ( $forms ) {
						echo do_shortcode( '[contact-form-7 id="' . $forms[0]->ID . '" title="' . esc_attr( $forms[0]->post_title ) . '"]' );
					} else {
						echo '<p class="contact-notice">Configure um formulário no Contact Form 7 e ele aparecerá aqui.</p>';
					}
				} else {
					// Fallback HTML form
					?>
					<form class="quote-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="post">
						<div class="row g-3">
							<div class="col-md-6">
								<input type="text" name="nome" placeholder="Nome completo *" required>
							</div>
							<div class="col-md-6">
								<input type="text" name="empresa" placeholder="Empresa">
							</div>
							<div class="col-md-6">
								<input type="email" name="email" placeholder="E-mail *" required>
							</div>
							<div class="col-md-6">
								<input type="tel" name="telefone" placeholder="Telefone">
							</div>
							<div class="col-12">
								<textarea name="mensagem" placeholder="Mensagem *" rows="5" required></textarea>
							</div>
							<div class="col-12">
								<button type="submit" class="btn-lwt w-100 justify-content-center">Enviar Mensagem →</button>
							</div>
						</div>
					</form>
					<?php
				}
				?>
			</div>

			<!-- Info column -->
			<div class="col-lg-5 animate-on-scroll animate-delay-2">
				<?php
				$lwt_phone   = get_theme_mod( 'lwt_phone', '+55 (00) 00000-0000' );
				$lwt_email   = get_theme_mod( 'lwt_email', 'contato@lwtservice.com.br' );
				$lwt_address = get_theme_mod( 'lwt_address', 'Brasil' );
				$lwt_hours   = get_theme_mod( 'lwt_hours', 'Seg–Sex: 08h00–18h00' );
				?>

				<?php if ( $lwt_phone ) : ?>
					<div class="contact-info-item">
						<div class="contact-icon" aria-hidden="true">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16"><path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58z"/></svg>
						</div>
						<div class="contact-detail">
							<strong>Telefone</strong>
							<a href="tel:<?php echo esc_attr( preg_replace( '/\s+/', '', $lwt_phone ) ); ?>"><?php echo esc_html( $lwt_phone ); ?></a>
						</div>
					</div>
				<?php endif; ?>

				<?php if ( $lwt_email ) : ?>
					<div class="contact-info-item">
						<div class="contact-icon" aria-hidden="true">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16"><path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/></svg>
						</div>
						<div class="contact-detail">
							<strong>E-mail</strong>
							<a href="mailto:<?php echo esc_attr( $lwt_email ); ?>"><?php echo esc_html( $lwt_email ); ?></a>
						</div>
					</div>
				<?php endif; ?>

				<?php if ( $lwt_address ) : ?>
					<div class="contact-info-item">
						<div class="contact-icon" aria-hidden="true">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16"><path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/></svg>
						</div>
						<div class="contact-detail">
							<strong>Endereço</strong>
							<span><?php echo nl2br( esc_html( $lwt_address ) ); ?></span>
						</div>
					</div>
				<?php endif; ?>

				<div class="contact-info-item">
					<div class="contact-icon" aria-hidden="true">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16"><path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/><path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/></svg>
					</div>
					<div class="contact-detail">
						<strong>Horário</strong>
						<span><?php echo esc_html( $lwt_hours ); ?></span>
					</div>
				</div>

			</div>
		</div>
	</div>

	<?php
	$maps_embed = get_theme_mod( 'lwt_maps_embed', '' );
	if ( $maps_embed ) :
	?>
		<div class="maps-embed mt-5">
			<iframe
				src="<?php echo esc_url( $maps_embed ); ?>"
				width="100%"
				height="450"
				loading="lazy"
				referrerpolicy="no-referrer-when-downgrade"
				title="Localização LWT Service"
				allowfullscreen>
			</iframe>
		</div>
	<?php endif; ?>

</section>
