<?php

defined( 'ABSPATH' ) || exit;

function lwt_register_cpt_services() {
	$labels = array(
		'name'               => 'Serviços',
		'singular_name'      => 'Serviço',
		'menu_name'          => 'Serviços',
		'add_new'            => 'Adicionar Novo',
		'add_new_item'       => 'Adicionar Novo Serviço',
		'edit_item'          => 'Editar Serviço',
		'new_item'           => 'Novo Serviço',
		'view_item'          => 'Ver Serviço',
		'search_items'       => 'Pesquisar Serviços',
		'not_found'          => 'Nenhum serviço encontrado',
		'not_found_in_trash' => 'Nenhum serviço no lixo',
	);

	register_post_type(
		'lwt_service',
		array(
			'labels'      => $labels,
			'public'      => true,
			'has_archive' => false,
			'supports'    => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
			'menu_icon'   => 'dashicons-admin-tools',
			'rewrite'     => array( 'slug' => 'servico' ),
		)
	);

	register_meta(
		'post',
		'service_icon',
		array(
			'object_subtype' => 'lwt_service',
			'type'           => 'string',
			'single'         => true,
			'show_in_rest'   => true,
		)
	);
}
add_action( 'init', 'lwt_register_cpt_services' );
