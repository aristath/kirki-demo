<?php

Kirki::add_field( 'kirki_demo', array(
	'type'        => 'radio',
	'settings'    => 'radio',
	'label'       => esc_attr__( 'Radio Control', 'kirki-demo' ),
    'description' => esc_attr__( 'Select a color', 'kirki-demo' ),
	'section'     => 'radio',
	'default'     => 'red',
	'priority'    => 10,
	'choices'     => array(
		'red'   => esc_attr__( 'Red', 'kirki-demo' ),
		'green' => esc_attr__( 'Green', 'kirki-demo' ),
		'blue'  => esc_attr__( 'Blue', 'kirki-demo' ),
	),
    'partial_refresh' => array(
        'radio_partial_refresh_id' => array(
            'selector'        => '.control-section-demo.radio-control td',
            'render_callback' => function() {
                get_template_part( 'templates/radio' );
            },
        ),
    ),
) );