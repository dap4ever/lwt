<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a href="#lwt-main" class="visually-hidden-focusable"><?php esc_html_e( 'Ir para conteúdo principal', 'ltw' ); ?></a>

<?php
$lwt_logo  = get_theme_mod( 'lwt_logo', '' );
$lwt_phone = get_theme_mod( 'lwt_phone', '+55 (00) 00000-0000' );
$lwt_email = get_theme_mod( 'lwt_email', 'contato@lwtservice.com.br' );
$lwt_li    = get_theme_mod( 'lwt_linkedin', '' );
$lwt_fb    = get_theme_mod( 'lwt_facebook', '' );
$lwt_ig    = get_theme_mod( 'lwt_instagram', '' );
?>

<nav id="lwt-navbar" class="navbar navbar-expand-lg fixed-top" aria-label="Navegação principal">
	<div class="container">

		<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php echo esc_url( $lwt_logo ? $lwt_logo : get_template_directory_uri() . '/assets/image/logo2.png' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
		</a>

		<div class="d-flex align-items-center gap-2 d-lg-none">
			<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#lwt-offcanvas" aria-controls="lwt-offcanvas" aria-label="Abrir menu">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="lwt-navbar-collapse">
			<ul class="navbar-nav mx-auto gap-1">
				<li class="nav-item">
					<a class="nav-link<?php echo ( is_front_page() ) ? ' active' : ''; ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>">Início</a>
				</li>
				<li class="nav-item">
					<a class="nav-link<?php echo ( is_page( 'sobre-nos' ) ) ? ' active' : ''; ?>" href="<?php echo esc_url( home_url( '/sobre-nos/' ) ); ?>">Sobre Nós</a>
				</li>
				<li class="nav-item">
					<a class="nav-link<?php echo ( is_page( 'servicos' ) ) ? ' active' : ''; ?>" href="<?php echo esc_url( home_url( '/servicos/' ) ); ?>">Serviços</a>
				</li>
				<li class="nav-item">
					<a class="nav-link<?php echo ( is_page( array( 'portfolio', 'portifolio' ) ) ) ? ' active' : ''; ?>" href="<?php echo esc_url( home_url( '/portifolio/' ) ); ?>">Portfólio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link<?php echo ( is_page( array( 'contacto', 'contato' ) ) ) ? ' active' : ''; ?>" href="<?php echo esc_url( home_url( '/contato/' ) ); ?>">Contato</a>
				</li>
			</ul>
			<a class="btn-lwt nav-cta" href="<?php echo esc_url( home_url( '/orcamento/' ) ); ?>">
				Pedir Orçamento <span aria-hidden="true">→</span>
			</a>
		</div>

	</div>
</nav>

<div class="offcanvas offcanvas-end" tabindex="-1" id="lwt-offcanvas" aria-labelledby="lwt-offcanvas-label">
	<div class="offcanvas-header">
		<div id="lwt-offcanvas-label">
			<?php if ( $lwt_logo ) : ?>
				<img src="<?php echo esc_url( $lwt_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" height="36">
			<?php else : ?>
				<span class="brand-text">LWT <span>SERVICE</span></span>
			<?php endif; ?>
		</div>
		<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Fechar"></button>
	</div>

	<div class="offcanvas-body p-0 d-flex flex-column">
		<ul class="offcanvas-nav">
			<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Início</a></li>
			<li><a href="<?php echo esc_url( home_url( '/sobre-nos/' ) ); ?>">Sobre Nós</a></li>
			<li><a href="<?php echo esc_url( home_url( '/servicos/' ) ); ?>">Serviços</a></li>
			<li><a href="<?php echo esc_url( home_url( '/portifolio/' ) ); ?>">Portfólio</a></li>
			<li><a href="<?php echo esc_url( home_url( '/contato/' ) ); ?>">Contato</a></li>
		</ul>

		<div class="mt-auto">
			<div class="offcanvas-contact px-4 py-3">
				<?php if ( $lwt_phone ) : ?>
				<a href="tel:<?php echo esc_attr( preg_replace( '/\s+/', '', $lwt_phone ) ); ?>">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="16" height="16" aria-hidden="true"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24c1.12.37 2.33.57 3.58.57a1 1 0 011 1V20a1 1 0 01-1 1C10.39 21 3 13.61 3 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.25.2 2.46.57 3.58a1 1 0 01-.25 1.01l-2.2 2.2z"/></svg>
					<?php echo esc_html( $lwt_phone ); ?>
				</a>
				<?php endif; ?>
				<?php if ( $lwt_email ) : ?>
				<a href="mailto:<?php echo esc_attr( $lwt_email ); ?>">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="16" height="16" aria-hidden="true"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
					<?php echo esc_html( $lwt_email ); ?>
				</a>
				<?php endif; ?>
			</div>

			<div class="offcanvas-social px-4">
				<?php if ( $lwt_li ) : ?>
				<a href="<?php echo esc_url( $lwt_li ); ?>" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="16" height="16" aria-hidden="true"><path d="M19 3a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h14m-.5 15.5v-5.3a3.26 3.26 0 00-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 011.4 1.4v4.93h2.79M6.88 8.56a1.68 1.68 0 001.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 00-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/></svg>
				</a>
				<?php endif; ?>
				<?php if ( $lwt_fb ) : ?>
				<a href="<?php echo esc_url( $lwt_fb ); ?>" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="16" height="16" aria-hidden="true"><path d="M17 2v3h-2c-.55 0-1 .45-1 1v2h3l-.5 3H14v9h-3v-9H9V8h2V6a4 4 0 014-4h2z"/></svg>
				</a>
				<?php endif; ?>
				<?php if ( $lwt_ig ) : ?>
				<a href="<?php echo esc_url( $lwt_ig ); ?>" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="16" height="16" aria-hidden="true"><path d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 01-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 017.8 2m-.2 2A3.6 3.6 0 004 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 003.6-3.6V7.6C20 5.61 18.39 4 16.4 4H7.6m9.65 1.5a1.25 1.25 0 011.25 1.25A1.25 1.25 0 0117.25 8 1.25 1.25 0 0116 6.75a1.25 1.25 0 011.25-1.25M12 7a5 5 0 015 5 5 5 0 01-5 5 5 5 0 01-5-5 5 5 0 015-5m0 2a3 3 0 00-3 3 3 3 0 003 3 3 3 0 003-3 3 3 0 00-3-3z"/></svg>
				</a>
				<?php endif; ?>
			</div>

			<div class="px-4 pb-4 pt-2">
				<a href="<?php echo esc_url( home_url( '/orcamento/' ) ); ?>" class="btn-lwt d-flex justify-content-center">
					Pedir Orçamento <span aria-hidden="true">→</span>
				</a>
			</div>
		</div>
	</div>
</div>

<div id="lwt-main">
