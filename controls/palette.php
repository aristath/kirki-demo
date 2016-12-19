<?php

Kirki::add_field( 'kirki_demo', array(
	'type'        => 'palette',
	'settings'    => 'palette',
	'label'       => __( 'Palette Control', 'kirki-demo' ),
	'section'     => 'palette',
	'default'     => 'light',
	'priority'    => 10,
	'choices'     => array(
		'light' => array(
			'#ECEFF1',
			'#333333',
			'#4DD0E1',
		),
		'dark' => array(
			'#37474F',
			'#FFFFFF',
			'#F9A825',
		),
	),
	'transport'       => 'postMessage',
	'partial_refresh' => array(
		'palette_wrapper_partial_refresh_id' => array(
			'selector'        => '.control-section-demo.palette-control td',
			'render_callback' => function() {
				get_template_part( 'templates/palette' );
			},
		),
	),
) );