<?php
/**
 * Template Name: Serviços
 */
get_header();
?>

<main id="lwt-main-content">

	<?php get_template_part( 'template-parts/page-banner', null, array( 'title' => 'Nossos Serviços', 'subtitle' => 'Soluções técnicas especializadas para a indústria.' ) ); ?>

	<!-- All services detailed -->
	<section class="section-white section-pad">
		<div class="container">
			<div class="row justify-content-center text-center mb-5">
				<div class="col-lg-7 animate-on-scroll">
					<span class="section-label">O QUE OFERECEMOS</span>
					<h2 class="section-title">Especialização técnica em cada área da automação industrial</h2>
					<p class="section-subtitle">Da programação de PLCs à gestão de projetos completos, a LWT Service tem a solução certa para cada desafio da sua indústria.</p>
				</div>
			</div>

			<div class="row g-4">

				<div class="col-lg-4 col-md-6 animate-on-scroll animate-delay-1">
					<div class="service-card service-card--large">
						<div class="service-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#00AAFF" viewBox="0 0 16 16"><path d="M6 0a.5.5 0 0 1 .5.5V3h3V.5a.5.5 0 0 1 1 0V3h1a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H11v1a.5.5 0 0 1-.5.5H9.5v.5a.5.5 0 0 1-.146.354L7.5 11.207V14.5a.5.5 0 0 1-1 0v-3.293L4.646 9.354A.5.5 0 0 1 4.5 9V8.5H3.5A.5.5 0 0 1 3 8V4.5a.5.5 0 0 1 .5-.5h1V.5A.5.5 0 0 1 5 0z"/></svg>
						</div>
						<h3>Engenharia de Automação</h3>
						<p>Projetos completos de automação industrial: programação de CLPs/PLCs, redes industriais (Profibus, DeviceNet, Ethernet/IP), sistemas SCADA e integração de processos.</p>
						<ul class="service-features">
							<li>Programação de CLP (Allen Bradley, Siemens, Schneider)</li>
							<li>Sistemas SCADA e HMI</li>
							<li>Redes industriais Profibus e Ethernet/IP</li>
							<li>Integração com MES e ERP</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 animate-on-scroll animate-delay-2">
					<div class="service-card service-card--large">
						<div class="service-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#00AAFF" viewBox="0 0 16 16"><path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/></svg>
						</div>
						<h3>Sistemas de Controle</h3>
						<p>Instalação, parametrização e manutenção de sistemas DCS, painéis de controle industrial e sistemas de supervisão de alto desempenho.</p>
						<ul class="service-features">
							<li>Sistemas DCS (ABB, Emerson, Honeywell)</li>
							<li>Painéis de controle industrial</li>
							<li>Parametrização de drives e inversores</li>
							<li>Manutenção preditiva e corretiva</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 animate-on-scroll animate-delay-3">
					<div class="service-card service-card--large">
						<div class="service-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#00AAFF" viewBox="0 0 16 16"><path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3q0-.405-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814z"/></svg>
						</div>
						<h3>Projetos Industriais</h3>
						<p>Gestão e execução de projetos industriais completos, desde o levantamento de requisitos até o comissionamento e entrega final ao cliente.</p>
						<ul class="service-features">
							<li>Gerenciamento de projetos (PMI/PMBOK)</li>
							<li>Elaboração de documentação técnica</li>
							<li>Comissionamento e start-up</li>
							<li>Treinamento das equipes operacionais</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 animate-on-scroll animate-delay-1">
					<div class="service-card service-card--large">
						<div class="service-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#00AAFF" viewBox="0 0 16 16"><path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/></svg>
						</div>
						<h3>Mão de Obra Especializada</h3>
						<p>Fornecimento de técnicos e engenheiros especializados para alocação em projetos industriais de curto, médio ou longo prazo.</p>
						<ul class="service-features">
							<li>Técnicos de automação e instrumentação</li>
							<li>Engenheiros de controle e automação</li>
							<li>Eletricistas industriais certificados</li>
							<li>Alocação por projeto ou contrato</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 animate-on-scroll animate-delay-2">
					<div class="service-card service-card--large">
						<div class="service-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#00AAFF" viewBox="0 0 16 16"><path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/></svg>
						</div>
						<h3>Painéis Elétricos & Instrumentação</h3>
						<p>Projeto, montagem e instalação de painéis elétricos industriais e sistemas de instrumentação para ambientes de alta exigência.</p>
						<ul class="service-features">
							<li>Painéis de comando e força</li>
							<li>Cabines elétricas industriais</li>
							<li>Calibração de instrumentos</li>
							<li>Instalação de sensores e transmissores</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 animate-on-scroll animate-delay-3">
					<div class="service-card service-card--large">
						<div class="service-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#00AAFF" viewBox="0 0 16 16"><path d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H5zm-4 2a4 4 0 0 1 4-4h6a4 4 0 0 1 4 4v6a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4V5zm7.5 1.5a.5.5 0 0 0-1 0v2H6a.5.5 0 0 0 0 1h2V12a.5.5 0 0 0 1 0V9.5h2a.5.5 0 0 0 0-1h-2V6.5z"/></svg>
						</div>
						<h3>Implementação de Soluções Automatizadas</h3>
						<p>Desenvolvimento e implantação de soluções de automação personalizadas para otimizar processos produtivos e aumentar a eficiência operacional.</p>
						<ul class="service-features">
							<li>Análise e mapeamento de processos</li>
							<li>Desenvolvimento de soluções customizadas</li>
							<li>Integração de sistemas legados</li>
							<li>Suporte e manutenção continuada</li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- How we work -->
	<section class="section-darker section-pad">
		<div class="circuit-overlay" aria-hidden="true"></div>
		<div class="container position-relative">
			<div class="row justify-content-center text-center mb-5">
				<div class="col-lg-7 animate-on-scroll">
					<span class="section-label">METODOLOGIA</span>
					<h2 class="section-title text-white">Como trabalhamos</h2>
					<p class="text-mid">Nosso processo garante qualidade e eficiência em cada etapa do projeto.</p>
				</div>
			</div>
			<div class="row g-4">
				<div class="col-md-6 col-lg-3 animate-on-scroll">
					<div class="work-step">
						<span class="step-num">01.</span>
						<h4>Levantamento de Necessidades</h4>
						<p>Análise detalhada do projeto e dos requisitos técnicos específicos do cliente.</p>
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
						<p>Implementação com acompanhamento constante e controle de qualidade rigoroso.</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 animate-on-scroll animate-delay-3">
					<div class="work-step">
						<span class="step-num">04.</span>
						<h4>Suporte Pós-Entrega</h4>
						<p>Acompanhamento pós-projeto para garantir o funcionamento ideal da solução.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- CTA -->
	<section class="section-dark section-pad-sm">
		<div class="container">
			<div class="row align-items-center justify-content-between g-4">
				<div class="col-lg-7 animate-on-scroll">
					<h2 class="section-title mb-2">Precisa de especialistas em automação?</h2>
					<p class="text-mid mb-0">Entre em contato e descubra como a LWT Service pode otimizar seus processos industriais.</p>
				</div>
				<div class="col-lg-auto animate-on-scroll animate-delay-1">
					<a href="<?php echo esc_url( home_url( '/orcamento/' ) ); ?>" class="btn-lwt">Pedir Orçamento →</a>
				</div>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>
