<?php
$default = array(
    'link'    => '#0088cc',
    'hover'   => '#00aaff',
    'active'  => '#00ffff',
);
$value      = get_theme_mod( 'multicolor', $default );
// Sanitize values and convert to valid HEX values.
$link_hex   = ariColor::newColor( $value['link'] )->toCSS( 'hex' );
$hover_hex  = ariColor::newColor( $value['hover'] )->toCSS( 'hex' );
$active_hex = ariColor::newColor( $value['active'] )->toCSS( 'hex' );
?>
<p><?php esc_attr_e( 'For the purposes of this demo colors are converted to HEX values', 'kirki-demo' ); ?></p>
<p class="link-color"><?php printf( esc_attr__( 'Link Color: %s', 'kirki-demo' ), '<span class="color">' . $link_hex . '<span>' ); ?></p>
<p class="hover-color"><?php printf( esc_attr__( 'Hover Color: %s', 'kirki-demo' ), '<span class="color">' . $hover_hex . '<span>' ); ?></p>
<p class="active-color"><?php printf( esc_attr__( 'Active Color: %s', 'kirki-demo' ), '<span class="color">' . $active_hex . '<span>' ); ?></p>

<a href="#"><?php esc_attr_e( 'Link Demo', 'kirki-demo' ); ?></a>
<?php
/**
 * Add styles
 */
echo '<style>';
// Link styles.
echo '.control-section-demo.multicolor-control a{color:' . $link_hex . ';}';
echo '.control-section-demo.multicolor-control a:hover{color:' . $hover_hex . ';}';
echo '.control-section-demo.multicolor-control a:active{color:' . $active_hex . ';}';
// background colors.
echo '.control-section-demo.multicolor-control .link-color .color{background:' . $link_hex . '}';
echo '.control-section-demo.multicolor-control .hover-color .color{background:' . $hover_hex . '}';
echo '.control-section-demo.multicolor-control .active-color .color{background:' . $active_hex . '}';
// Text colors.
// If background-color is too dark, change text-color to white so it's readable.
if ( 127 > ariColor::newColor( $link_hex )->luminance ) {
    echo '.control-section-demo.multicolor-control .link-color .color{color:#fff}';
}
if ( 127 > ariColor::newColor( $hover_hex )->luminance ) {
    echo '.control-section-demo.multicolor-control .hover-color .color{color:#fff}';
}
if ( 127 > ariColor::newColor( $active_hex )->luminance ) {
    echo '.control-section-demo.multicolor-control .active-color .color{color:#fff}';
}

echo '</style>';
