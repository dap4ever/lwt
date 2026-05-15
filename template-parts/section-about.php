<section class="about-section section-light section-pad" id="sobre">
	<div class="container">
		<div class="row align-items-center g-5">

			<!-- Image column -->
			<div class="col-lg-5 animate-on-scroll">
				<div class="about-img-wrap">
					<?php
					$about_image_id = get_theme_mod( 'lwt_about_image', 0 );
					if ( $about_image_id ) {
						echo wp_get_attachment_image( $about_image_id, 'large', false, array( 'alt' => 'LWT Service — Equipe técnica' ) );
					}
					?>
					<div class="about-badge">
						<span class="badge-number">10+</span>
						<span class="badge-text">Anos de Experiência</span>
					</div>
				</div>
			</div>

			<!-- Content column -->
			<div class="col-lg-7">
				<div class="animate-on-scroll">
					<span class="section-label">SOBRE A EMPRESA</span>
					<h2 class="section-title">Experiência técnica que transforma projetos em resultados</h2>
					<p class="text-muted-lwt mb-2">
						Com mais de uma década no setor industrial, a LWT Service especializou-se no fornecimento de profissionais técnicos altamente qualificados para os mais exigentes projetos de automação e engenharia industrial.
					</p>
				</div>

				<ul class="about-list animate-on-scroll animate-delay-1">
					<li>
						<span class="list-num">01.</span>
						<div class="list-content">
							<h5>Profissionais Certificados</h5>
							<p>Toda a equipe possui certificações técnicas reconhecidas no setor.</p>
						</div>
					</li>
					<li>
						<span class="list-num">02.</span>
						<div class="list-content">
							<h5>Experiência em Campo</h5>
							<p>Anos de atuação em ambientes industriais exigentes e complexos.</p>
						</div>
					</li>
					<li>
						<span class="list-num">03.</span>
						<div class="list-content">
							<h5>Soluções à Medida</h5>
							<p>Cada projeto é analisado individualmente para a melhor solução.</p>
						</div>
					</li>
					<li>
						<span class="list-num">04.</span>
						<div class="list-content">
							<h5>Suporte Contínuo</h5>
							<p>Acompanhamento pós-implementação para garantir o funcionamento ideal.</p>
						</div>
					</li>
				</ul>

				<a href="<?php echo esc_url( home_url( '/portifolio/' ) ); ?>" class="btn-lwt animate-on-scroll animate-delay-2">
					O nosso portfólio <span aria-hidden="true">→</span>
				</a>
			</div>

		</div>
	</div>
</section>
