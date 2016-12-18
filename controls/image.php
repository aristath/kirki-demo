<?php

Kirki::add_field( 'kirki_demo', array(
	'type'            => 'image',
	'settings'        => 'image',
	'label'           => __( 'This is the label', 'kirki-demo' ),
	'description'     => __( 'This is the control description', 'kirki-demo' ),
	'tooltip'         => __( 'This is some extra help text.', 'kirki-demo' ),
	'section'         => 'image',
	'default'         => '',
    'transport'       => 'postMessage',
    'partial_refresh' => array(
        'image_wrapper' => array(
            'selector'        => '.control-section-demo.image-control td',
            'render_callback' => function() {
                get_template_part( 'templates/image' );
            },
        )
    )
) );