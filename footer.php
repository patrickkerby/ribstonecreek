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
	
	<div class="wrapper row no-gutters justify-content-center" id="wrapper-footer">	
		<div class="col-sm-12">
			<!-- Logo -->
			<img src="<?php echo $footer_logo; ?>" alt="Ribstone Creek Brewery" />
			
			<!-- Mail Chimp Signup -->
			<div class="row justify-content-center no-gutters">
				<h3 class="col-10">Brewery updates, early beer releases, special deals!</h3>
				<form action="https://ribstonecreekbrewery.us10.list-manage.com/subscribe/post?u=b37fcbb9a8b522a708b0ac9e9&amp;id=3daedac886" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate col-sm-12" target="_blank" novalidate>
					<div id="mc_embed_signup_scroll" class="row no-gutters">						
						<div class="col-sm-5">
							<input type="text" value="" name="FNAME" class="" placeholder="Your Name" id="mce-FNAME">
						</div>
						<div class="col-sm-5">
							<input type="email" value="" name="EMAIL" placeholder="Your Email" class="required email" id="mce-EMAIL">
						</div>
						<div class="col-sm-2">
							<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
						</div>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    
						<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b37fcbb9a8b522a708b0ac9e9_3daedac886" tabindex="-1" value=""></div>
					</div>
				</form>
			</div>

			<!-- Contant and address info -->
			<div class="row justify-content-center no-gutters contact">
					<div class="col-sm-4 col-md">
						<p><strong>(780) 755-3008</strong></p>
						<p>4924 51 Street, <br>Edgerton, AB, T0B 1K0</p>
					</div>
					<div class="col-sm-4 col-md">
						<p><strong>Direct Delivery</strong></p>
						<p>Thursdays: 11am - 7pm <br>(Edmonton, Calgary, Wainwright)</p>
					</div>
					<div class="d-none d-md-flex col-md">
						<img width="99px" src="/app/themes/ribstonecreek/img/rsc-logo-badge.png" alt="Ribstone Creek Brewery" />
					</div>
					<div class="col-sm-4 col-md">
						<p><strong>Taproom:</strong></p>
						<p>Fridays: 3 - 7pm<br >Saturdays 11 - 6pm</p>
					</div>
					<div class="col-sm-6 col-md">
						<a href="/contact" class="email"><span>&#xf1d8;</span> Email</a>
						<div class="connect">
							<a href="https://facebook.com/RibstoneCreekBrewery" target="_blank">&#xf09a;</a>
							<a href="https://twitter.com/RibstoneCreek" target="_blank">&#xf099;</a>
							<a href="https://www.instagram.com/ribstonecreek/" target="_blank">&#xf16d;</a>
						</div>
					</div>
			</div>						
			
		</div>
	</div><!-- wrapper end -->
</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>
</html>