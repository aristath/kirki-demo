<?php

Kirki::add_field( 'kirki_demo', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'radio-buttonset',
	'label'       => __( 'Radio-Buttonset Control', 'my_textdomain' ),
	'section'     => 'radio-buttonset',
	'default'     => 'red',
	'priority'    => 10,
	'choices'     => array(
		'red'   => esc_attr__( 'Red', 'my_textdomain' ),
		'green' => esc_attr__( 'Green', 'my_textdomain' ),
		'blue'  => esc_attr__( 'Blue', 'my_textdomain' ),
	),
	'partial_refresh' => array(
		'radio_buttonset_partial_refresh_id' => array(
			'selector'        => '.control-section-demo.radio-buttonset-control td',
			'render_callback' => function() {
				get_template_part( 'templates/radio-buttonset' );
			},
		),
	),
) );