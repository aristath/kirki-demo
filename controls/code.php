<?php

Kirki::add_field( 'kirki_demo', array(
	'type'        => 'code',
	'settings'    => 'code',
	'label'       => __( 'Code Control', 'my_textdomain' ),
	'section'     => 'code',
	'default'     => 'body { background: #fff; }',
	'priority'    => 10,
	'choices'     => array(
		'language' => 'css',
		'height'   => 550,
	),
) );
