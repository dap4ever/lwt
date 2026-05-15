<?php get_header(); ?>

<main id="lwt-main-content">

	<?php
	get_template_part( 'template-parts/page-banner', null, array(
		'title'    => 'Pedir Orçamento',
		'subtitle' => 'Descreva o seu projeto ou necessidade. A nossa equipa responde em 24 horas úteis.',
	) );
	?>

	<section class="section-white section-pad">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 animate-on-scroll">

					<?php
					if ( function_exists( 'wpcf7_get_tag' ) || class_exists( 'WPCF7_ContactForm' ) ) {
						$forms = get_posts( array(
							'post_type'   => 'wpcf7_contact_form',
							'numberposts' => -1,
						) );
						if ( $forms ) {
							$quote_form = null;
							foreach ( $forms as $form ) {
								if ( stripos( $form->post_title, 'orcamento' ) !== false || stripos( $form->post_title, 'orçamento' ) !== false ) {
									$quote_form = $form;
									break;
								}
							}
							$quote_form = $quote_form ?: $forms[0];
							echo do_shortcode( '[contact-form-7 id="' . esc_attr( $quote_form->ID ) . '" title="' . esc_attr( $quote_form->post_title ) . '"]' );
						} else {
							echo '<p class="text-muted-lwt">Formulário em configuração. Por favor, envie o seu pedido por email ou telefone.</p>';
						}
					} else {
						?>
						<form class="quote-form" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post" novalidate>
							<input type="hidden" name="action" value="lwt_quote_request">
							<?php wp_nonce_field( 'lwt_quote_nonce', 'lwt_nonce' ); ?>
							<div class="row g-3">
								<div class="col-md-6">
									<label class="form-label" for="q-name">Nome completo *</label>
									<input type="text" id="q-name" name="nome" class="form-control" required placeholder="O seu nome">
								</div>
								<div class="col-md-6">
									<label class="form-label" for="q-empresa">Empresa</label>
									<input type="text" id="q-empresa" name="empresa" class="form-control" placeholder="Nome da empresa">
								</div>
								<div class="col-md-6">
									<label class="form-label" for="q-email">Email *</label>
									<input type="email" id="q-email" name="email" class="form-control" required placeholder="o.seu@email.com">
								</div>
								<div class="col-md-6">
									<label class="form-label" for="q-telefone">Telefone</label>
									<input type="tel" id="q-telefone" name="telefone" class="form-control" placeholder="+351 000 000 000">
								</div>
								<div class="col-12">
									<label class="form-label" for="q-servico">Serviço pretendido</label>
									<select id="q-servico" name="servico" class="form-select">
										<option value="">Selecionar serviço...</option>
										<option>Engenharia de Automação</option>
										<option>Sistemas de Controle</option>
										<option>Projetos Industriais</option>
										<option>Mão de Obra Especializada</option>
										<option>Painéis Elétricos</option>
										<option>Instrumentação Industrial</option>
										<option>Manutenção Preditiva</option>
										<option>Outro</option>
									</select>
								</div>
								<div class="col-12">
									<label class="form-label" for="q-mensagem">Descrição do projeto *</label>
									<textarea id="q-mensagem" name="mensagem" class="form-control" rows="6" required placeholder="Descreva o seu projeto, localização, prazo estimado e qualquer outro detalhe relevante..."></textarea>
								</div>
								<div class="col-12">
									<button type="submit" class="btn-lwt">Enviar Pedido de Orçamento →</button>
								</div>
							</div>
						</form>
						<?php
					}
					?>

				</div>

				<div class="col-lg-4 animate-on-scroll animate-delay-2">
					<div class="quote-info-box">
						<h4>Como funciona?</h4>
						<ul class="quote-steps">
							<li>
								<span class="step-num">01</span>
								<div>
									<strong>Envie o seu pedido</strong>
									<p>Preencha o formulário com os detalhes do projeto.</p>
								</div>
							</li>
							<li>
								<span class="step-num">02</span>
								<div>
									<strong>Análise técnica</strong>
									<p>A nossa equipa avalia e contacta-o em 24h úteis.</p>
								</div>
							</li>
							<li>
								<span class="step-num">03</span>
								<div>
									<strong>Proposta personalizada</strong>
									<p>Recebe uma proposta detalhada e adequada ao seu projeto.</p>
								</div>
							</li>
						</ul>

						<?php
						$lwt_phone = get_theme_mod( 'lwt_phone', '+55 (00) 00000-0000' );
						$lwt_email = get_theme_mod( 'lwt_email', 'contato@lwtservice.com.br' );
						?>
						<div class="quote-contact-alt">
							<p>Prefere falar diretamente?</p>
							<?php if ( $lwt_phone ) : ?>
								<a href="tel:<?php echo esc_attr( preg_replace( '/\s+/', '', $lwt_phone ) ); ?>" class="btn-lwt-outline d-block text-center mb-2">
									<?php echo esc_html( $lwt_phone ); ?>
								</a>
							<?php endif; ?>
							<?php if ( $lwt_email ) : ?>
								<a href="mailto:<?php echo esc_attr( $lwt_email ); ?>" class="btn-lwt-outline d-block text-center">
									<?php echo esc_html( $lwt_email ); ?>
								</a>
							<?php endif; ?>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>
