<?php get_header(); ?>

<main id="lwt-main-content">

	<?php
	get_template_part( 'template-parts/page-banner', null, array(
		'title'    => 'Contacto',
		'subtitle' => 'Estamos disponíveis para responder às suas questões e analisar o seu próximo projeto.',
	) );
	?>

	<?php get_template_part( 'template-parts/section-contact' ); ?>

	<?php
	$maps_embed = get_theme_mod( 'lwt_maps_embed', '' );
	if ( $maps_embed ) :
	?>
		<div class="maps-embed">
			<iframe
				src="<?php echo esc_url( $maps_embed ); ?>"
				width="100%"
				height="450"
				loading="lazy"
				referrerpolicy="no-referrer-when-downgrade"
				title="Localização LWT Service"
				allowfullscreen>
			</iframe>
		</div>
	<?php endif; ?>

</main>

<?php get_footer(); ?>
