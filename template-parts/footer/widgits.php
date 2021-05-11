<?php
/**
 * Displays the footer widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

if ( is_active_sidebar( 'footer-sidebar' ) ) : ?>
    <?php dynamic_sidebar( 'footer-sidebar' ); ?> 
<?php endif; ?>