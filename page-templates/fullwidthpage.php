<?php
/**
 * Template Name: Full Width Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="full-width-page-wrapper">

		<div class="row no-gutters justify-content-center">

			<div class="col-md-8 col-10 content-area" id="primary">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'page' ); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :

							comments_template();

						endif;
						?>

					<?php endwhile; // end of the loop. ?>

			</div><!-- #primary -->

		</div><!-- .row end -->

		<?php if( is_page( 'contact' ) ) { ?>

<div id='map'></div>
<script>
mapboxgl.accessToken = 'pk.eyJ1IjoicGF0cmlja2tlcmJ5IiwiYSI6ImpxWDBaVFkifQ.t3gbX7-Sfy3Z9Nh14aLFow';
var map = new mapboxgl.Map({
    container: 'map', // container id
    style: 'mapbox://styles/patrickkerby/cj9yt9j2q7yp22sr5eesb4tsl'
});
</script>

		<?php } else {
			//no map
		}?>

</div><!-- Wrapper end -->

<?php get_footer(); ?>
