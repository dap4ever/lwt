<?php get_header(); ?>

<main id="lwt-main-content">

	<?php
	get_template_part( 'template-parts/page-banner', null, array(
		'title'    => 'Sobre Nós',
		'subtitle' => 'Conheça a equipe de especialistas que faz a diferença nos projetos industriais mais exigentes.',
	) );
	?>

	<?php get_template_part( 'template-parts/section-about' ); ?>

	<?php get_template_part( 'template-parts/section-stats' ); ?>

	<!-- Values section -->
	<section class="section-white section-pad">
		<div class="container">
			<div class="row justify-content-center text-center mb-5">
				<div class="col-lg-7 animate-on-scroll">
					<span class="section-label">OS NOSSOS VALORES</span>
					<h2 class="section-title">O que nos move todos os dias</h2>
				</div>
			</div>
			<div class="row g-4">

				<div class="col-lg-3 col-md-6 animate-on-scroll animate-delay-1">
					<div class="service-card text-center">
						<div class="service-icon mx-auto" aria-hidden="true">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#00AAFF" viewBox="0 0 16 16"><path d="M2.5 3.5a.5.5 0 0 1 1 0v9a.5.5 0 0 1-1 0zm2.945.275 9-5A.5.5 0 0 1 15 1.5v13a.5.5 0 0 1-.764.426L5.5 9.796V9.5L14 14.268V2.732L5.5 7.5v-.725z"/></svg>
						</div>
						<h3>Rigor Técnico</h3>
						<p>Cada projeto é executado com precisão e conformidade com as normas industriais internacionais.</p>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 animate-on-scroll animate-delay-2">
					<div class="service-card text-center">
						<div class="service-icon mx-auto" aria-hidden="true">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#00AAFF" viewBox="0 0 16 16"><path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/></svg>
						</div>
						<h3>Equipe Dedicada</h3>
						<p>Profissionais certificados com forte sentido de responsabilidade e comprometimento com resultados.</p>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 animate-on-scroll animate-delay-3">
					<div class="service-card text-center">
						<div class="service-icon mx-auto" aria-hidden="true">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#00AAFF" viewBox="0 0 16 16"><path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/></svg>
						</div>
						<h3>Entrega no Prazo</h3>
						<p>Cumprimos prazos e orçamentos com transparência e comunicação constante com o cliente.</p>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 animate-on-scroll animate-delay-4">
					<div class="service-card text-center">
						<div class="service-icon mx-auto" aria-hidden="true">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#00AAFF" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/><path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"/></svg>
						</div>
						<h3>Qualidade Garantida</h3>
						<p>Sistemas de controlo de qualidade em todas as fases do projeto, da conceção à entrega.</p>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- CTA -->
	<section class="cta-section section-pad">
		<div class="circuit-overlay" aria-hidden="true"></div>
		<div class="container position-relative text-center animate-on-scroll">
			<h2 class="section-title text-white mb-3">Pronto para trabalhar conosco?</h2>
			<p class="cta-subtitle">Contacte-nos e descubra como podemos impulsionar o seu próximo projeto industrial.</p>
			<div class="d-flex gap-3 justify-content-center flex-wrap mt-4">
				<a href="<?php echo esc_url( home_url( '/orcamento/' ) ); ?>" class="btn-lwt">Pedir Orçamento →</a>
				<a href="<?php echo esc_url( home_url( '/contato/' ) ); ?>" class="btn-lwt-outline">Falar conosco</a>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>
