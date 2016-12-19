<?php 

Kirki::add_field( 'kirki_demo', array(
	'type'        => 'dashicons',
	'settings'    => 'dashicons0',
	'label'       => __( 'Dashicons Control', 'my_textdomain' ),
	'description' => esc_attr__( 'This control is using postMessage & js_vars', 'kirki-demo' ),
	'section'     => 'dashicons',
	'default'     => 'format-status',
	'priority'    => 10,
	'transport'   => 'postMessage',
	'js_vars'     => array(
		array(
			'element'       => '.control-section-demo.dashicons-control .dashicons0 .dashicons',
			'function'      => 'html',
			'attr'          => 'class',
			'value_pattern' => 'dashicons dashicons-$',
		),
	),
) );

Kirki::add_field( 'kirki_demo', array(
	'type'            => 'dashicons',
	'settings'        => 'dashicons1',
	'label'           => __( 'Dashicons Control', 'my_textdomain' ),
	'description'     => esc_attr__( 'This control is using postMessage & js_vars', 'kirki-demo' ),
	'section'         => 'dashicons',
	'default'         => 'format-status',
	'priority'        => 10,
	'transport'       => 'postMessage',
	'partial_refresh' => array(
		'dashicons1' => array(
			'selector'        => '.control-section-demo.dashicons-control .dashicons1',
			'render_callback' => function() {
				echo '<div class="dashicons1">';
				$icon1 = get_theme_mod( 'dashicons1', 'format-status' );
				printf(
					esc_attr__( 'Using partial_refresh: %s', 'kirki-demo' ),
					'<span class="dashicons dashicons-' . esc_attr( $icon1 ) . '"></span>'
				);
				echo '</div>';
			},
		),
	),
) );

