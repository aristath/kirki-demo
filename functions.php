<?php

if ( ! class_exists( 'Kirki' ) ) {
    return;
}

/**
 * Add config.
 */
Kirki::add_config( 'kirki_demo', array(
    'capability'    => 'edit_theme_options',
    'option_type'   => 'theme_mod',
) );

function kirki_demo_control_types() {
    return array(
        'checkbox'        => esc_attr__( 'Checkbox', 'kirki-demo' ),
        'code'            => esc_attr__( 'Code', 'kirki-demo' ),
        'color-palette'   => esc_attr__( 'Color Palette', 'kirki-demo' ),
        'color'           => esc_attr__( 'Color', 'kirki-demo' ),
        'custom'          => esc_attr__( 'Custom', 'kirki-demo' ),
        'dashicons'       => esc_attr__( 'Dashicons', 'kirki-demo' ),
        'dimension'       => esc_attr__( 'Dimension', 'kirki-demo' ),
        'dropdown-pages'  => esc_attr__( 'Dropdown Pages', 'kirki-demo' ),
        'image'           => esc_attr__( 'Image', 'kirki-demo' ),
        'multicheck'      => esc_attr__( 'Multicheck', 'kirki-demo' ),
        'multicolor'      => esc_attr__( 'Multi-Color', 'kirki-demo' ),
        'number'          => esc_attr__( 'Number', 'kirki-demo' ),
        'palette'         => esc_attr__( 'Palette', 'kirki-demo' ),
        'radio-buttonset' => esc_attr__( 'Radio-Buttonset', 'kirki-demo' ),
        'radio-image'     => esc_attr__( 'Radio-Image', 'kirki-demo' ),
        'radio'           => esc_attr__( 'Radio', 'kirki-demo' ),
        'repeater'        => esc_attr__( 'Repeater', 'kirki-demo' ),
        'select'          => esc_attr__( 'Select', 'kirki-demo' ),
        'slider'          => esc_attr__( 'Slider', 'kirki-demo' ),
        'sortable'        => esc_attr__( 'Sortable', 'kirki-demo' ),
        'spacing'         => esc_attr__( 'Spacing', 'kirki-demo' ),
        'switch'          => esc_attr__( 'Switch', 'kirki-demo' ),
        'text'            => esc_attr__( 'Text', 'kirki-demo' ),
        'textarea'        => esc_attr__( 'Textarea', 'kirki-demo' ),
        'toggle'          => esc_attr__( 'Toggle', 'kirki-demo' ),
        'typography'      => esc_attr__( 'Typography', 'kirki-demo' ),
        'upload'          => esc_attr__( 'Upload', 'kirki-demo' ),
    );
}
foreach ( kirki_demo_control_types() as $control_type => $title ) {
    /**
     * Add Sections.
     */
    Kirki::add_section( $control_type, array(
        'title'      => $title,
        'capability' => 'edit_theme_options',
    ) );
    /**
     * Include control-demos files.
     */
    include_once wp_normalize_path( get_template_directory() . '/controls/' . $control_type . '.php' );
}