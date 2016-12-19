<?php

Kirki::add_field( 'kirki_demo', array(
	'type'        => 'multicolor',
	'settings'    => 'multicolor',
	'label'       => esc_attr__( 'Label', 'kirki-demo' ),
	'section'     => 'multicolor',
	'priority'    => 10,
	'choices'     => array(
		'link'    => esc_attr__( 'Color', 'kirki-demo' ),
		'hover'   => esc_attr__( 'Hover', 'kirki-demo' ),
		'active'  => esc_attr__( 'Active', 'kirki-demo' ),
	),
	'default'     => array(
		'link'    => '#0088cc',
		'hover'   => '#00aaff',
		'active'  => '#00ffff',
	),
	'transport'       => 'postMessage',
	'partial_refresh' => array(
		'multicolor_wrapper' => array(
			'selector'        => '.control-section-demo.multicolor-control td',
			'render_callback' => function() {
				get_template_part( 'templates/multicolor' );
			},
		),
	),
) );