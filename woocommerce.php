<?php
/**
 * The template for displaying all woocommerce pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

?>

<div class="wrapper" id="full-width-page-wrapper">

		<div class="row no-gutters justify-content-center">

			<div class="col-md-8 col-10 content-area" id="primary">

			<?php 
				$template_name = '\archive-product.php'; 
				$args = array(); 
				$template_path = ''; 
				$default_path = untrailingslashit( plugin_dir_path(__FILE__) ) . '\woocommerce';

					if ( is_singular( 'product' ) ) {

						woocommerce_content();

			//For ANY product archive, Product taxonomy, product search or /shop landing page etc Fetch the template override;
				} 	elseif ( file_exists( $default_path . $template_name ) )
					{
					wc_get_template( $template_name, $args, $template_path, $default_path );

			//If no archive-product.php template exists, default to catchall;
				}	else  {
					woocommerce_content( );
				}

			;?>

			</div>
		
		</div>
		
		<!-- Do the right sidebar check -->
		<?php if ( 'right' === $sidebar_pos || 'both' === $sidebar_pos ) : ?>

			<?php get_sidebar( 'right' ); ?>

		<?php endif; ?>

</div><!-- Wrapper end -->

<?php get_footer(); ?>
