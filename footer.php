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
					<div class="connect">
						<a href="https://facebook.com/RibstoneCreekBrewery" target="_blank">&#xf09a;</a>
						<a href="https://twitter.com/RibstoneCreek" target="_blank">&#xf099;</a>
						<a href="https://www.instagram.com/ribstonecreek/" target="_blank">&#xf16d;</a>
					</div>							
				</div><!-- .site-info -->
	
				<div class="site-info col-sm-4 col-xs-10">					
					<img src="<?php echo $footer_logo; ?>" alt="Ribstone Creek Brewery" />
				</div><!-- .site-info -->
	
				<div class="site-info col-sm-4 col-xs-10">					
					<!-- <?php gravity_form(2, false, false, false, '', true, 12); ?> -->
					<!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">

<div id="mc_embed_signup">
<form action="https://ribstonecreekbrewery.us10.list-manage.com/subscribe/post?u=b37fcbb9a8b522a708b0ac9e9&amp;id=3daedac886" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<label for="mce-EMAIL">Be in the know! Sign up to our newsletter:</label>
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b37fcbb9a8b522a708b0ac9e9_3daedac886" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->
				</div><!-- .site-info -->
	
			</footer><!-- #colophon -->
	
		</div><!--col end -->
	
	</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

