<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="hfeed">
        <?php foreach ( kirki_demo_control_types() as $control_type => $title ) : ?>
            <div class="control-section-demo <?php echo sanitize_key( $control_type ); ?>" id="kirki-<?php echo sanitize_key( $control_type ); ?>">
                <?php if ( '' !== locate_template( 'templates/' . $control_type . '.php' ) ) : ?>
                    <?php get_template_part( 'templates/' . $control_type ); ?>
                <?php else : ?>
                    <p class="no-demo-found">
                        <?php printf( esc_attr__( 'No demo found for the %s control', 'kirki-demo' ), '<code>' . $control_type . '</code>' ); ?>
                    </p>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
    <?php wp_footer(); ?>
</body>