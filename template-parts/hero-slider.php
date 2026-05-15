<?php
$slide1_label    = get_theme_mod( 'lwt_hero1_label', 'QUALIDADE & EXPERIÊNCIA' );
$slide1_title    = get_theme_mod( 'lwt_hero1_title', 'Precisão em Cada Projeto' );
$slide1_subtitle = get_theme_mod( 'lwt_hero1_subtitle', 'Mão de obra técnica especializada para automação industrial, sistemas de controle e implementação de soluções automatizadas.' );

$slide2_label    = get_theme_mod( 'lwt_hero2_label', 'AUTOMAÇÃO INDUSTRIAL' );
$slide2_title    = get_theme_mod( 'lwt_hero2_title', 'Performance em Campo' );
$slide2_subtitle = get_theme_mod( 'lwt_hero2_subtitle', 'Equipes técnicas certificadas, prontas para atuar em ambientes industriais exigentes com máxima eficiência e segurança.' );
?>
<section class="hero-section" id="hero">
	<div id="lwt-hero-carousel" class="carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

		<div class="carousel-inner">

			<!-- Slide 1 -->
			<div class="carousel-item hero-slide-one active">
				<div class="container h-100 d-flex align-items-center">
					<div class="col-xl-10">
						<span class="hero-label animate-on-scroll"><?php echo esc_html( $slide1_label ); ?></span>
						<h1 class="animate-on-scroll animate-delay-1">
							<?php echo esc_html( $slide1_title ); ?>
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
			<div class="carousel-item hero-slide-two">
				<div class="container h-100 d-flex align-items-center">
					<div class="col-xl-10">
						<span class="hero-label"><?php echo esc_html( $slide2_label ); ?></span>
						<h1>
							<?php echo esc_html( $slide2_title ); ?>
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

		<button class="carousel-control-prev" type="button" data-bs-target="#lwt-hero-carousel" data-bs-slide="prev" aria-label="Slide anterior">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#lwt-hero-carousel" data-bs-slide="next" aria-label="Próximo slide">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
		</button>

	</div><!-- /.carousel -->

	<!-- Scroll indicator -->
	<button class="scroll-indicator" aria-label="Rolar para baixo" type="button"><span>Role para baixo</span><i aria-hidden="true">↓</i></button>

</section>
