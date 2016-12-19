<?php

Kirki::add_field( 'kirki_demo', array(
	'type'        => 'radio-image',
	'settings'    => 'radio-image',
	'label'       => esc_attr__( 'Radio-Image Control', 'kirki-demo' ),
	'description' => esc_attr__( 'Select your favorite Wapuu. Images from http://jawordpressorg.github.io/wapuu/', 'kirki-demo' ),
	'section'     => 'radio-image',
	'default'     => 'Socrates',
	'priority'    => 10,
	'choices'     => array(
		'R2-Wapuu'  => 'https://jawordpressorg.github.io/wapuu/wapuu-archive/r2wapuu.png',
		'Socrates'  => 'https://raw.githubusercontent.com/wpgreece/wapuu/master/wapuu.png',
		'Nashville' => 'https://github.com/christinablust/wapuu/blob/gh-pages/wapuu-archive/WapuuNashville-01.png?raw=true',
	),
	'input_attrs' => array(
		'style' => 'max-width:30%;height:auto',
	),
	'partial_refresh' => array(
		'radio_image_partial_refresh_id' => array(
			'selector'        => '.control-section-demo.radio-image-control td',
			'render_callback' => function() {
				get_template_part( 'templates/radio-image' );
			},
		),
	),
) );