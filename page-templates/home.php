<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
?>

<?php
$container   = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="archive-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

			<?php if( have_rows('section') ): ?>
													
				<?php while( have_rows('section') ): the_row(); 
			
					$title = get_sub_field('title');
					$description = get_sub_field('description');
					$link = get_sub_field('link');
					$image = get_sub_field('image');
			
					?>
					
						<section class="row">
							<div class="col-md-12" style="background-image: url('<?php echo $image; ?>');">
							    <h2><?php echo( $title ); ?></h2>
							    <h3><?php echo( $description ); ?></h3>
							</div>
						</section>
			
				<?php endwhile; ?>
								
			<?php endif; ?>

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>

