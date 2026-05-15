<?php
$banner_title    = isset( $args['title'] ) ? $args['title'] : get_the_title();
$banner_subtitle = isset( $args['subtitle'] ) ? $args['subtitle'] : '';
?>
<section class="page-banner">
	<div class="circuit-overlay" aria-hidden="true"></div>
	<div class="container text-center">
		<h1 class="page-banner-title"><?php echo esc_html( $banner_title ); ?></h1>
		<?php if ( $banner_subtitle ) : ?>
			<p class="page-banner-subtitle"><?php echo esc_html( $banner_subtitle ); ?></p>
		<?php endif; ?>
		<nav class="breadcrumb-nav" aria-label="breadcrumb">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Início</a>
			<span class="breadcrumb-sep" aria-hidden="true">→</span>
			<span><?php echo esc_html( $banner_title ); ?></span>
		</nav>
	</div>
</section>
