<?php
/**
 * Template Name: Pedir Orçamento
 */
get_header();
?>

<main id="lwt-main-content">

	<?php get_template_part( 'template-parts/page-banner', null, array( 'title' => 'Pedir Orçamento', 'subtitle' => 'Descreva seu projeto e nossa equipe entrará em contato.' ) ); ?>

	<section class="section-white section-pad">
		<div class="container">
			<div class="row g-5 justify-content-center">

				<!-- Quote form -->
				<div class="col-lg-7 animate-on-scroll">
					<div class="quote-form-wrapper">
						<h3 class="mb-1">Solicite seu orçamento</h3>
						<p class="text-muted-lwt mb-4">Preencha o formulário abaixo com os detalhes do seu projeto. Retornaremos em até 24 horas úteis.</p>

						<?php
						if ( shortcode_exists( 'contact-form-7' ) ) {
							$forms = get_posts( array(
								'post_type'   => 'wpcf7_contact_form',
								'numberposts' => 1,
							) );
							if ( $forms ) {
								echo do_shortcode( '[contact-form-7 id="' . $forms[0]->ID . '" title="' . esc_attr( $forms[0]->post_title ) . '"]' );
							} else {
								echo '<p class="text-muted-lwt">Configure um formulário no Contact Form 7 e ele aparecerá aqui.</p>';
							}
						} else {
						?>
						<form class="quote-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="post">
							<div class="row g-3">
								<div class="col-md-6">
									<input type="text" name="nome" placeholder="Nome completo *" required>
								</div>
								<div class="col-md-6">
									<input type="text" name="cargo" placeholder="Cargo / Função">
								</div>
								<div class="col-md-6">
									<input type="text" name="empresa" placeholder="Empresa *" required>
								</div>
								<div class="col-md-6">
									<input type="text" name="setor" placeholder="Setor Industrial">
								</div>
								<div class="col-md-6">
									<input type="email" name="email" placeholder="E-mail corporativo *" required>
								</div>
								<div class="col-md-6">
									<input type="tel" name="telefone" placeholder="Telefone / WhatsApp *" required>
								</div>
								<div class="col-12">
									<select name="servico">
										<option value="" disabled selected>Tipo de serviço desejado</option>
										<option value="automacao">Engenharia de Automação</option>
										<option value="controle">Sistemas de Controle</option>
										<option value="projetos">Projetos Industriais</option>
										<option value="maodeobra">Mão de Obra Especializada</option>
										<option value="paineis">Painéis Elétricos & Instrumentação</option>
										<option value="solucoes">Implementação de Soluções Automatizadas</option>
										<option value="outro">Outro</option>
									</select>
								</div>
								<div class="col-12">
									<textarea name="descricao" placeholder="Descreva seu projeto ou necessidade *" rows="6" required></textarea>
								</div>
								<div class="col-md-6">
									<input type="text" name="prazo" placeholder="Prazo desejado">
								</div>
								<div class="col-md-6">
									<input type="text" name="localizacao" placeholder="Localização do projeto">
								</div>
								<div class="col-12">
									<button type="submit" class="btn-lwt w-100 justify-content-center">Enviar Solicitação →</button>
								</div>
							</div>
						</form>
						<?php } ?>
					</div>
				</div>

				<!-- Side info -->
				<div class="col-lg-4 animate-on-scroll animate-delay-2">
					<div class="quote-sidebar">
						<h4>Por que escolher a LWT Service?</h4>
						<ul class="quote-benefits">
							<li>
								<span class="benefit-icon" aria-hidden="true">
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#00AAFF" viewBox="0 0 16 16"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/></svg>
								</span>
								<span>Mais de 10 anos de experiência em automação industrial</span>
							</li>
							<li>
								<span class="benefit-icon" aria-hidden="true">
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#00AAFF" viewBox="0 0 16 16"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/></svg>
								</span>
								<span>Equipe de técnicos e engenheiros certificados</span>
							</li>
							<li>
								<span class="benefit-icon" aria-hidden="true">
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#00AAFF" viewBox="0 0 16 16"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/></svg>
								</span>
								<span>Atendimento em todo o território nacional</span>
							</li>
							<li>
								<span class="benefit-icon" aria-hidden="true">
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#00AAFF" viewBox="0 0 16 16"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/></svg>
								</span>
								<span>Soluções personalizadas para cada demanda industrial</span>
							</li>
							<li>
								<span class="benefit-icon" aria-hidden="true">
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#00AAFF" viewBox="0 0 16 16"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/></svg>
								</span>
								<span>Suporte técnico pós-entrega garantido</span>
							</li>
							<li>
								<span class="benefit-icon" aria-hidden="true">
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#00AAFF" viewBox="0 0 16 16"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/></svg>
								</span>
								<span>Resposta em até 24 horas úteis</span>
							</li>
						</ul>

						<div class="quote-contact-quick mt-4">
							<p class="text-mid mb-2">Prefere falar diretamente?</p>
							<?php
							$lwt_phone = get_theme_mod( 'lwt_phone', '+55 (00) 00000-0000' );
							$lwt_email = get_theme_mod( 'lwt_email', 'contato@lwtservice.com.br' );
							?>
							<?php if ( $lwt_phone ) : ?>
								<a href="tel:<?php echo esc_attr( preg_replace( '/\s+/', '', $lwt_phone ) ); ?>" class="quick-contact-link">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#00AAFF" viewBox="0 0 16 16"><path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58z"/></svg>
									<?php echo esc_html( $lwt_phone ); ?>
								</a>
							<?php endif; ?>
							<?php if ( $lwt_email ) : ?>
								<a href="mailto:<?php echo esc_attr( $lwt_email ); ?>" class="quick-contact-link">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#00AAFF" viewBox="0 0 16 16"><path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/></svg>
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
