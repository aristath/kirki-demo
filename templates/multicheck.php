<?php $values = get_theme_mod( 'multicheck', array('option-1', 'option-3', 'option-4') ); ?>

<?php if ( empty( $values ) ) : ?>
    <p><?php esc_attr_e( 'No Values Selected.' ); ?></p>
<?php else : ?>
    <p><?php esc_attr_e( 'Values Selected:' ); ?></p>
    <ul>
        <?php foreach ( $values as $value ) : ?>
            <li><?php echo esc_attr( $value ); ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif;