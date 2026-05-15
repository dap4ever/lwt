<?php
/**
 * Template Name: Sobre Nós
 */
get_header();
?>

<main id="lwt-main-content">

	<?php get_template_part( 'template-parts/page-banner', null, array( 'title' => 'Sobre Nós', 'subtitle' => 'Conheça a nossa história e equipa técnica.' ) ); ?>

	<?php get_template_part( 'template-parts/section-about' ); ?>

	<?php get_template_part( 'template-parts/section-stats' ); ?>

	<!-- How we work -->
	<section class="section-darker section-pad">
		<div class="circuit-overlay" aria-hidden="true"></div>
		<div class="container position-relative">
			<div class="row justify-content-center text-center mb-5">
				<div class="col-lg-7 animate-on-scroll">
					<span class="section-label">METODOLOGIA</span>
					<h2 class="section-title" style="color:#fff;">Como trabalhamos</h2>
				</div>
			</div>
			<div class="row g-4">
				<div class="col-md-6 col-lg-3 animate-on-scroll">
					<div class="work-step">
						<span class="step-num">01.</span>
						<h4>Levantamento de Necessidades</h4>
						<p>Análise detalhada do projeto e requisitos técnicos específicos do cliente.</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 animate-on-scroll animate-delay-1">
					<div class="work-step">
						<span class="step-num">02.</span>
						<h4>Seleção de Profissionais</h4>
						<p>Escolha criteriosa dos técnicos mais qualificados para cada demanda.</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 animate-on-scroll animate-delay-2">
					<div class="work-step">
						<span class="step-num">03.</span>
						<h4>Execução do Projeto</h4>
						<p>Implementação com acompanhamento constante e controlo de qualidade.</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 animate-on-scroll animate-delay-3">
					<div class="work-step">
						<span class="step-num">04.</span>
						<h4>Suporte Pós-Entrega</h4>
						<p>Acompanhamento pós-projeto para garantir o funcionamento ideal.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/section-testimonials' ); ?>

</main>

<?php get_footer(); ?>
