<?php

defined( 'ABSPATH' ) || exit;

function lwt_register_cpt_testimonials() {
	$labels = array(
		'name'               => 'Testemunhos',
		'singular_name'      => 'Testemunho',
		'menu_name'          => 'Testemunhos',
		'add_new'            => 'Adicionar Novo',
		'add_new_item'       => 'Adicionar Novo Testemunho',
		'edit_item'          => 'Editar Testemunho',
		'new_item'           => 'Novo Testemunho',
		'view_item'          => 'Ver Testemunho',
		'search_items'       => 'Pesquisar Testemunhos',
		'not_found'          => 'Nenhum testemunho encontrado',
		'not_found_in_trash' => 'Nenhum testemunho no lixo',
	);

	register_post_type(
		'lwt_testimonial',
		array(
			'labels'      => $labels,
			'public'      => true,
			'has_archive' => false,
			'supports'    => array( 'title', 'editor', 'thumbnail' ),
			'menu_icon'   => 'dashicons-format-quote',
			'rewrite'     => array( 'slug' => 'testemunho' ),
		)
	);

	$meta_fields = array( 'testimonial_company', 'testimonial_role', 'testimonial_rating' );
	foreach ( $meta_fields as $field ) {
		register_meta(
			'post',
			$field,
			array(
				'object_subtype' => 'lwt_testimonial',
				'type'           => 'string',
				'single'         => true,
				'show_in_rest'   => true,
			)
		);
	}
}
add_action( 'init', 'lwt_register_cpt_testimonials' );
