<?php $value = get_theme_mod( 'radio-buttonset', 'red' ); ?>
<?php printf( esc_attr__( 'Option Selected: %s', 'kirki-demo' ), esc_attr( $value ) ); ?>
<div style="display:inline-block;margin-left:.5rem;width:3rem;height:1rem;background-color:<?php echo esc_attr( $value ); ?>"></div>