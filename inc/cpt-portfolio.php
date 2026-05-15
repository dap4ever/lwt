<?php

defined( 'ABSPATH' ) || exit;

function lwt_register_cpt_portfolio() {
	$labels = array(
		'name'               => 'Projetos',
		'singular_name'      => 'Projeto',
		'menu_name'          => 'Portfólio',
		'add_new'            => 'Adicionar Novo',
		'add_new_item'       => 'Adicionar Novo Projeto',
		'edit_item'          => 'Editar Projeto',
		'new_item'           => 'Novo Projeto',
		'view_item'          => 'Ver Projeto',
		'search_items'       => 'Pesquisar Projetos',
		'not_found'          => 'Nenhum projeto encontrado',
		'not_found_in_trash' => 'Nenhum projeto no lixo',
	);

	register_post_type(
		'lwt_project',
		array(
			'labels'      => $labels,
			'public'      => true,
			'has_archive' => false,
			'supports'    => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
			'menu_icon'   => 'dashicons-portfolio',
			'rewrite'     => array( 'slug' => 'projeto' ),
		)
	);

	$tax_labels = array(
		'name'          => 'Categorias',
		'singular_name' => 'Categoria',
		'search_items'  => 'Pesquisar Categorias',
		'all_items'     => 'Todas as Categorias',
		'edit_item'     => 'Editar Categoria',
		'update_item'   => 'Atualizar Categoria',
		'add_new_item'  => 'Adicionar Nova Categoria',
		'menu_name'     => 'Categorias',
	);

	register_taxonomy(
		'project_category',
		'lwt_project',
		array(
			'labels'            => $tax_labels,
			'hierarchical'      => true,
			'show_admin_column' => true,
			'rewrite'           => array( 'slug' => 'categoria-projeto' ),
		)
	);
}
add_action( 'init', 'lwt_register_cpt_portfolio' );

function lwt_create_portfolio_terms() {
	$terms = array( 'Automação', 'Sistemas de Controle', 'Projetos Industriais', 'Elétrica', 'Instrumentação' );
	foreach ( $terms as $term ) {
		if ( ! term_exists( $term, 'project_category' ) ) {
			wp_insert_term( $term, 'project_category' );
		}
	}
}
add_action( 'init', 'lwt_create_portfolio_terms' );
