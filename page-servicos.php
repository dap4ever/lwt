<?php get_header(); ?>

<main id="lwt-main-content">

	<?php
	get_template_part( 'template-parts/page-banner', null, array(
		'title'    => 'Nossos Serviços',
		'subtitle' => 'Soluções técnicas especializadas para os maiores desafios da automação e engenharia industrial.',
	) );
	?>

	<?php get_template_part( 'template-parts/section-services' ); ?>

	<!-- Extended services detail -->
	<section class="section-light section-pad">
		<div class="container">
			<div class="row justify-content-center text-center mb-5">
				<div class="col-lg-8 animate-on-scroll">
					<span class="section-label">CAPACIDADES TÉCNICAS</span>
					<h2 class="section-title">Mais serviços que oferecemos</h2>
				</div>
			</div>
			<div class="row g-4">

				<div class="col-lg-4 col-md-6 animate-on-scroll animate-delay-1">
					<div class="service-card">
						<div class="service-icon" aria-hidden="true">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#00AAFF" viewBox="0 0 16 16"><path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zM4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5zM10 8H6a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1m0 3H6a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1"/></svg>
						</div>
						<h3>Painéis Elétricos</h3>
						<p>Projeto, fabrico e instalação de painéis elétricos industriais conforme normas IEC e NEC.</p>
						<a href="<?php echo esc_url( home_url( '/orcamento/' ) ); ?>" class="service-link">Solicitar orçamento →</a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 animate-on-scroll animate-delay-2">
					<div class="service-card">
						<div class="service-icon" aria-hidden="true">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#00AAFF" viewBox="0 0 16 16"><path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2"/></svg>
						</div>
						<h3>Instrumentação Industrial</h3>
						<p>Calibração, instalação e manutenção de instrumentos de medição e controlo de processo.</p>
						<a href="<?php echo esc_url( home_url( '/orcamento/' ) ); ?>" class="service-link">Solicitar orçamento →</a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 animate-on-scroll animate-delay-3">
					<div class="service-card">
						<div class="service-icon" aria-hidden="true">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#00AAFF" viewBox="0 0 16 16"><path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/></svg>
						</div>
						<h3>Manutenção Preditiva</h3>
						<p>Programas de manutenção preditiva e preventiva para maximizar a disponibilidade dos equipamentos.</p>
						<a href="<?php echo esc_url( home_url( '/orcamento/' ) ); ?>" class="service-link">Solicitar orçamento →</a>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- CTA -->
	<section class="cta-section section-pad">
		<div class="circuit-overlay" aria-hidden="true"></div>
		<div class="container position-relative text-center animate-on-scroll">
			<h2 class="section-title text-white mb-3">Precisa de um serviço específico?</h2>
			<p class="cta-subtitle">Conte o que você precisa. Nossa equipe analisa e prepara uma proposta personalizada.</p>
			<a href="<?php echo esc_url( home_url( '/orcamento/' ) ); ?>" class="btn-lwt mt-4">Pedir Orçamento →</a>
		</div>
	</section>

</main>

<?php get_footer(); ?>
