<?php get_header(); ?>

<main id="lwt-main-content">

	<?php
	get_template_part( 'template-parts/page-banner', null, array(
		'title'    => 'Contato',
		'subtitle' => 'Estamos disponíveis para responder às suas dúvidas e analisar o seu próximo projeto.',
	) );
	?>

	<?php get_template_part( 'template-parts/section-contact' ); ?>

</main>

<?php get_footer(); ?>
