<?php

Kirki::add_field( 'kirki_demo', array(
	'type'        => 'dimension',
	'settings'    => 'dimension',
	'label'       => esc_attr__( 'Dimension Control', 'kirki-demo' ),
    'description' => esc_attr__( 'Constrol Description', 'kirki-demo' ),
	'section'     => 'dimension',
	'default'     => '9px',
    'transport'   => 'auto',
    'output'      => array(
        array(
            'element'  => '.control-section-demo.dimension-control td',
            'property' => 'font-size',
        ),
    ),
) );