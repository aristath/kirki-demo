<?php

Kirki::add_field( 'kirki_demo', array(
	'type'        => 'color-palette',
	'settings'    => 'color-palette-0',
    'description' => esc_attr__( 'Custom-Defined array of colors with a large size.', 'kirki-demo' ),
	'label'       => __( 'Color-Palette control', 'kirki-demo' ),
	'section'     => 'color-palette',
	'default'     => '#ffffff',
	'priority'    => 10,
    'transport'   => 'auto',
    'choices'     => array(
        'colors' => array(
            '#ffffff',
            '#777777',
            '#000000',
        ),
        'size'  => 80,
    ),
    'output' => array(
        array(
            'element'  => '.control-section-demo.color-palette .section-0',
            'property' => 'background-color',
        ),
    ),
) );
Kirki::add_field( 'kirki_demo', array(
	'type'        => 'color-palette',
	'settings'    => 'color-palette-1',
    'description' => esc_attr__( 'When choices are not defined, the material-design primary palette is didplayed.', 'kirki-demo' ),
	'label'       => __( 'Color-Palette control', 'kirki-demo' ),
	'section'     => 'color-palette',
	'default'     => '#03A9F4',
	'priority'    => 10,
    'transport'   => 'auto',
    'output' => array(
        array(
            'element'  => '.control-section-demo.color-palette .section-1',
            'property' => 'background-color',
        ),
    ),
) );

Kirki::add_field( 'kirki_demo', array(
	'type'        => 'color-palette',
	'settings'    => 'color-palette-2',
    'description' => esc_attr__( 'Reds, small.', 'kirki-demo' ),
	'label'       => __( 'Color-Palette control', 'kirki-demo' ),
	'section'     => 'color-palette',
	'default'     => '#E57373',
	'priority'    => 10,
    'transport'   => 'auto',
    'choices'     => array(
        'colors' => Kirki_Helper::get_material_design_colors( 'red' ),
        'size'   => 30,
    ),
    'output' => array(
        array(
            'element'  => '.control-section-demo.color-palette .section-2',
            'property' => 'background-color',
        ),
    ),
) );

Kirki::add_field( 'kirki_demo', array(
	'type'        => 'color-palette',
	'settings'    => 'color-palette-3',
    'description' => esc_attr__( 'Light, tiny.', 'kirki-demo' ),
	'label'       => __( 'Color-Palette control', 'kirki-demo' ),
	'section'     => 'color-palette',
	'default'     => '#E8EAF6',
	'priority'    => 10,
    'transport'   => 'auto',
    'choices'     => array(
        'colors' => Kirki_Helper::get_material_design_colors( 'A100' ),
        'size'   => 20,
    ),
    'output' => array(
        array(
            'element'  => '.control-section-demo.color-palette .section-3',
            'property' => 'background-color',
        ),
    ),
) );