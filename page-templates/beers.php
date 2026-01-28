<?php
/**
 * Template Name: Beers Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
?>

<?php
	$container = get_theme_mod( 'understrap_container_type' );
	$tax_terms = get_terms( array(
		'taxonomy' => 'beer-types',
		'meta_key' => 'order_by',
	    'orderby' => 'order_by',
	    'exclude' => '37, 32, 29' //@TODO: have ACF field grid_hide set these exclusions
	) );			
?>

<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

	<div class="row">

		<div class="thecontent" class="col-lg-12">
			<?php the_content(); ?>
		</div>

	</div>

	<div class="container">
		
		<div class="row d-flex align-items-end flex-wrap row-eq-height beergrid">
			
			<?php
			
			foreach ($tax_terms as $tax_term) {

				$thumbnail = get_field('lineup_main_image', $tax_term);
				$size = get_field('lineup_type', $tax_term);

				echo '<div class="col-md-4 col-sm-6">' . '<a href="' . esc_attr(get_term_link($tax_term, 'beer-types')) . '" title="' . sprintf( __( "View all posts in %s" ), $tax_term->name ) . '" ' . '>' . '<img class="' . $size . '" src="' . $thumbnail . '" /><span>' . $tax_term->name.'</span></a></div>';			
	
			}

			?>

		</div>
		
		<div class="row d-flex align-items-center">
			<a href="all/" class="btn btn-primary">View 'em all</a>
		</div>
		
	</div> <!-- Row end -->

</div><!-- Container end -->

<?php get_footer(); ?>

