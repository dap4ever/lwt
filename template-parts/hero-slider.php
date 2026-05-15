<?php
$slide1_label    = get_theme_mod( 'lwt_hero1_label', 'ENGENHARIA DE AUTOMAÇÃO INDUSTRIAL' );
$slide1_title    = get_theme_mod( 'lwt_hero1_title', 'Especialistas em Automação Industrial' );
$slide1_subtitle = get_theme_mod( 'lwt_hero1_subtitle', 'Fornecemos mão de obra técnica especializada para projetos industriais, sistemas de controle e soluções automatizadas de alta performance.' );

$slide2_label    = get_theme_mod( 'lwt_hero2_label', 'EXCELÊNCIA TÉCNICA EM CAMPO' );
$slide2_title    = get_theme_mod( 'lwt_hero2_title', 'Do Projeto à Implementação' );
$slide2_subtitle = get_theme_mod( 'lwt_hero2_subtitle', 'Equipes técnicas certificadas, prontas para atuar em ambientes industriais exigentes com máxima eficiência e segurança.' );
?>
<section class="hero-section" id="hero">
	<div class="circuit-overlay" aria-hidden="true"></div>

	<div id="lwt-hero-carousel" class="carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

		<div class="carousel-inner">

			<!-- Slide 1 -->
			<div class="carousel-item active">
				<div class="container h-100 d-flex align-items-center">
					<div class="col-lg-8 col-xl-7">
						<span class="hero-label animate-on-scroll"><?php echo esc_html( $slide1_label ); ?></span>
						<h1 class="animate-on-scroll animate-delay-1">
							<?php
							$parts = explode( ' ', esc_html( $slide1_title ), 3 );
							if ( count( $parts ) >= 3 ) {
								echo esc_html( $parts[0] . ' ' . $parts[1] ) . '<br><span class="text-electric">' . esc_html( implode( ' ', array_slice( $parts, 2 ) ) ) . '</span>';
							} else {
								echo esc_html( $slide1_title );
							}
							?>
						</h1>
						<p class="hero-subtitle animate-on-scroll animate-delay-2"><?php echo esc_html( $slide1_subtitle ); ?></p>
						<div class="hero-btns animate-on-scroll animate-delay-3">
							<a href="<?php echo esc_url( home_url( '/servicos/' ) ); ?>" class="btn-lwt">
								Conhecer Serviços <span aria-hidden="true">→</span>
							</a>
							<a href="<?php echo esc_url( home_url( '/portifolio/' ) ); ?>" class="btn-lwt-outline">
								Ver Portfólio
							</a>
						</div>
					</div>
				</div>
			</div>

			<!-- Slide 2 -->
			<div class="carousel-item">
				<div class="container h-100 d-flex align-items-center">
					<div class="col-lg-8 col-xl-7">
						<span class="hero-label"><?php echo esc_html( $slide2_label ); ?></span>
						<h1>
							<?php
							$parts2 = explode( ' ', esc_html( $slide2_title ), 4 );
							if ( count( $parts2 ) >= 4 ) {
								echo esc_html( $parts2[0] . ' ' . $parts2[1] . ' ' . $parts2[2] ) . '<br><span class="text-electric">' . esc_html( $parts2[3] ) . '</span>';
							} else {
								echo esc_html( $slide2_title );
							}
							?>
						</h1>
						<p class="hero-subtitle"><?php echo esc_html( $slide2_subtitle ); ?></p>
						<div class="hero-btns">
							<a href="<?php echo esc_url( home_url( '/orcamento/' ) ); ?>" class="btn-lwt">
								Pedir Orçamento <span aria-hidden="true">→</span>
							</a>
							<a href="<?php echo esc_url( home_url( '/sobre-nos/' ) ); ?>" class="btn-lwt-outline">
								Sobre Nós
							</a>
						</div>
					</div>
				</div>
			</div>

		</div><!-- /.carousel-inner -->

		<!-- Indicators -->
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#lwt-hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#lwt-hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
		</div>

	</div><!-- /.carousel -->

	<!-- Scroll indicator -->
	<button class="scroll-indicator" aria-label="Scroll para baixo" type="button">↓</button>

</section>
