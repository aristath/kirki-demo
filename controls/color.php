<?php

Kirki::add_field( 'kirki_demo', array(
	'type'        => 'color',
	'settings'    => 'color',
    'description' => esc_attr__( 'Description.', 'kirki-demo' ),
	'label'       => __( 'ColorC ontrol', 'kirki-demo' ),
	'section'     => 'color',
	'default'     => '#333333',
	'priority'    => 10,
    'transport'   => 'auto',
    'choices'     => array(
        'alpha' => true,
    ),
    'output' => array(
        array(
            'element'  => '.control-section-demo.color > .demo-color-container',
            'property' => 'background-color',
        ),
    ),
) );
