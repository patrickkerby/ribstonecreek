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
					$link_text = get_sub_field('link_text');
					$image = get_sub_field('image');
			
					?>
					
						<section class="row site-section justify-content-md-center paraxify" style="background-image: url('<?php echo $image; ?>');">
							<div class="col-md-10">
							    <h2><?php echo( $title ); ?></h2>
							    <h3><?php echo( $description ); ?></h3>
							    <a class="cta" href="<?php echo( $link ); ?>"><?php echo( $link_text ); ?></a>
							</div>
						</section>
			
				<?php endwhile; ?>
								
			<?php endif; ?>

	</div><!-- Container end -->

</div><!-- Wrapper end -->
<script>

  	var myParaxify = paraxify('.paraxify', {
		speed: 0.8,
		boost: 0.7
	});
	
	
    var vhFix = new VHChromeFix([
      {
        selector: '.site-section',
        vh: 100
      }
    ]);
  

</script>
<?php get_footer(); ?>
