<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
$background = get_field('background_image', 'option');
$overlay = get_field('overlay', 'option');

$address_title = get_field( 'address_title', 'option' );
$address = get_field( 'address', 'option' );

$hours_title = get_field( 'hours_title', 'option' );
$hours = get_field( 'hours', 'option' );

$footer_logo = get_field( 'footer_logo', 'option' );


?>

	<?php get_sidebar( 'footerfull' ); ?>
	
	<div class="wrapper row no-gutters justify-content-sm-center" id="wrapper-footer" style="background-image: linear-gradient(rgba(68,68,68,0.<?php echo $overlay; ?>), rgba(68,68,68,0.<?php echo $overlay; ?>)), url('<?php echo $background; ?>');">
	
		<div class="col-sm-11">
	
			<footer class="site-footer row no-gutters justify-content-sm-center" id="colophon">
	
				<div class="site-info col-sm-4 col-xs-10">					
					<h4><?php echo $address_title; ?></h4>
					<address><?php echo $address; ?></address>
					<h4><?php echo $hours_title; ?></h4>
					<p><?php echo $hours; ?></p>							
				</div><!-- .site-info -->
	
				<div class="site-info col-sm-4 col-xs-10">					
					<img src="<?php echo $footer_logo; ?>" alt="Ribstone Creek Brewery" />
				</div><!-- .site-info -->
	
				<div class="site-info col-sm-4 col-xs-10">					
					<p>Newsletter sign up goes here</p>
				</div><!-- .site-info -->
	
			</footer><!-- #colophon -->
	
		</div><!--col end -->
	
	</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

