<?php
/**
 * Template Name: Contato
 */
get_header();
?>

<main id="lwt-main-content">

	<?php get_template_part( 'template-parts/page-banner', null, array( 'title' => 'Fale Conosco', 'subtitle' => 'Estamos prontos para atender seu projeto industrial.' ) ); ?>

	<?php get_template_part( 'template-parts/section-contact' ); ?>

	<?php get_template_part( 'template-parts/section-stats' ); ?>

</main>

<?php get_footer(); ?>
