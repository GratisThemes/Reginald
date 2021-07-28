<?php
/**
 * Template for displaying the Site's header image
 *
 * @package Reginald
 * @since   Reginald 2.0
 */

?>
<?php if ( has_header_image() && ! is_singular() ) : ?>
  <img src="<?php esc_url( header_image() ); ?>"
    width="<?php echo esc_attr( get_custom_header()->width ); ?>"
    height="<?php echo esc_attr( get_custom_header()->height ); ?>" 
    alt="<?php esc_attr_e( 'Header Image', 'reginald' ); ?>"
    class="header-image" />
<?php endif; ?>
