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
?>

<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

	<div class="row">

		<div class="thecontent" class="col-lg-12"><?php the_content(); ?></div>

		<?php
		    $args = array( 'post_type' => 'beer' );
		    $beers = new WP_Query( $args );
		    if( $beers->have_posts() ) {
		      while( $beers->have_posts() ) {
		        $beers->the_post();
		        ?>

				<?php

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'loop-templates/content-beer', get_post_format() );
				
		      }
		    }
		    else {
				get_template_part( 'loop-templates/content', 'none' );
		    }
		?>

	</div> <!-- Row end -->

</div><!-- Container end -->

<?php get_footer(); ?>

