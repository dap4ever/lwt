<?php

defined( 'ABSPATH' ) || exit;

function lwt_customize( $wp_customize ) {

	$wp_customize->add_section(
		'lwt_company_section',
		array(
			'title'    => 'LWT Service — Empresa',
			'priority' => 10,
		)
	);

	$wp_customize->add_section(
		'lwt_social_section',
		array(
			'title'    => 'LWT Service — Redes Sociais',
			'priority' => 20,
		)
	);

	$wp_customize->add_section(
		'lwt_hero_section',
		array(
			'title'    => 'LWT Service — Hero Slider',
			'priority' => 30,
		)
	);

	$wp_customize->add_section(
		'lwt_logo_section',
		array(
			'title'    => 'LWT Service — Logo',
			'priority' => 5,
		)
	);

	$wp_customize->add_section(
		'lwt_maps_section',
		array(
			'title'    => 'LWT Service — Google Maps',
			'priority' => 40,
		)
	);

	// --- Logo ---
	$wp_customize->add_setting( 'lwt_logo', array( 'default' => '', 'sanitize_callback' => 'esc_url_raw' ) );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'lwt_logo',
			array( 'label' => 'Logo do Site', 'section' => 'lwt_logo_section' )
		)
	);

	// --- Company Info ---
	$company_fields = array(
		'lwt_phone'   => 'Telefone',
		'lwt_email'   => 'Email',
		'lwt_hours'   => 'Horário',
	);
	foreach ( $company_fields as $id => $label ) {
		$wp_customize->add_setting( $id, array( 'default' => '', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control( $id, array( 'type' => 'text', 'label' => $label, 'section' => 'lwt_company_section' ) );
	}

	$wp_customize->add_setting( 'lwt_address', array( 'default' => '', 'sanitize_callback' => 'sanitize_textarea_field' ) );
	$wp_customize->add_control( 'lwt_address', array( 'type' => 'textarea', 'label' => 'Endereço', 'section' => 'lwt_company_section' ) );

	// --- Social ---
	$social_fields = array(
		'lwt_linkedin'  => 'LinkedIn URL',
		'lwt_facebook'  => 'Facebook URL',
		'lwt_instagram' => 'Instagram URL',
	);
	foreach ( $social_fields as $id => $label ) {
		$wp_customize->add_setting( $id, array( 'default' => '', 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( $id, array( 'type' => 'url', 'label' => $label, 'section' => 'lwt_social_section' ) );
	}

	// --- Hero Slide 1 ---
	$hero1_fields = array(
		'lwt_hero1_label'    => array( 'label' => 'Slide 1 — Label', 'default' => 'QUALIDADE & EXPERIÊNCIA', 'type' => 'text' ),
		'lwt_hero1_title'    => array( 'label' => 'Slide 1 — Título', 'default' => 'Precisão em Cada Projeto', 'type' => 'text' ),
		'lwt_hero1_subtitle' => array( 'label' => 'Slide 1 — Subtítulo', 'default' => 'Mão de obra técnica especializada para automação industrial, sistemas de controle e implementação de soluções automatizadas.', 'type' => 'textarea' ),
	);
	foreach ( $hero1_fields as $id => $args ) {
		$sanitize = ( 'textarea' === $args['type'] ) ? 'sanitize_textarea_field' : 'sanitize_text_field';
		$wp_customize->add_setting( $id, array( 'default' => $args['default'], 'sanitize_callback' => $sanitize ) );
		$wp_customize->add_control( $id, array( 'type' => $args['type'], 'label' => $args['label'], 'section' => 'lwt_hero_section' ) );
	}

	// --- Hero Slide 2 ---
	$hero2_fields = array(
		'lwt_hero2_label'    => array( 'label' => 'Slide 2 — Label', 'default' => 'AUTOMAÇÃO INDUSTRIAL', 'type' => 'text' ),
		'lwt_hero2_title'    => array( 'label' => 'Slide 2 — Título', 'default' => 'Performance em Campo', 'type' => 'text' ),
		'lwt_hero2_subtitle' => array( 'label' => 'Slide 2 — Subtítulo', 'default' => 'Equipes técnicas certificadas, prontas para atuar em ambientes industriais exigentes com máxima eficiência e segurança.', 'type' => 'textarea' ),
	);
	foreach ( $hero2_fields as $id => $args ) {
		$sanitize = ( 'textarea' === $args['type'] ) ? 'sanitize_textarea_field' : 'sanitize_text_field';
		$wp_customize->add_setting( $id, array( 'default' => $args['default'], 'sanitize_callback' => $sanitize ) );
		$wp_customize->add_control( $id, array( 'type' => $args['type'], 'label' => $args['label'], 'section' => 'lwt_hero_section' ) );
	}

	// --- Google Maps ---
	$wp_customize->add_setting( 'lwt_maps_embed', array( 'default' => '', 'sanitize_callback' => 'sanitize_text_field' ) );
	$wp_customize->add_control(
		'lwt_maps_embed',
		array(
			'type'        => 'url',
			'label'       => 'URL do Google Maps (embed src)',
			'description' => 'Cole o URL do src do iframe do Google Maps',
			'section'     => 'lwt_maps_section',
		)
	);
}
add_action( 'customize_register', 'lwt_customize' );
