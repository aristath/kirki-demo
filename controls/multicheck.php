<?php

Kirki::add_field( 'kirki_demo', array(
	'type'        => 'multicheck',
	'settings'    => 'multicheck',
	'label'       => esc_attr__( 'My Control', 'kirki-demo' ),
	'section'     => 'multicheck',
	'default'     => array('option-1', 'option-3', 'option-4'),
	'priority'    => 10,
	'choices'     => array(
		'option-1' => esc_attr__( 'Option 1', 'kirki-demo' ),
		'option-2' => esc_attr__( 'Option 2', 'kirki-demo' ),
		'option-3' => esc_attr__( 'Option 3', 'kirki-demo' ),
		'option-4' => esc_attr__( 'Option 4', 'kirki-demo' ),
		'option-5' => esc_attr__( 'Option 5', 'kirki-demo' ),
	),
	'transport'       => 'postMessage',
	'partial_refresh' => array(
		'image_wrapper' => array(
			'selector'        => '.control-section-demo.multicheck-control td',
			'render_callback' => function() {
				get_template_part( 'templates/multicheck' );
			},
		),
	),
) );