<?php

Kirki::add_field( 'kirki_demo', array(
	'type'        => 'number',
	'settings'    => 'number',
	'label'       => esc_attr__( 'This is the label', 'kirki-demo' ),
    'description' => esc_attr__( 'minimum value: 0, maximum value: 100, step: 2', 'kirki-demo' ),
	'section'     => 'number',
	'default'     => 42,
	'choices'     => array(
		'min'  => 0,
		'max'  => 100,
		'step' => 1,
	),
    'transport'       => 'postMessage',
    'partial_refresh' => array(
        'number_wrapper' => array(
            'selector'        => '.control-section-demo.number-control td',
            'render_callback' => function() {
                get_template_part( 'templates/number' );
            },
        ),
    ),
) );