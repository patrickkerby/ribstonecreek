<?php
/**
 * Single beer post partial template.
 *
 * @package understrap
 */

// ACF Variables:
$artwork = get_field("artwork");
$can = get_field("beer_can");
$beer_colour = get_field("beer_colour");
$container_type = get_field("container");
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>" class="row no-gutters">

	<div class="entry-content row justify-content-center no-gutters">

<?php

$taxonomy = 'beer-types';
$tax_terms = get_terms($taxonomy);
?>
<ul>
<?php
foreach ($tax_terms as $tax_term) {
echo '<li>' . '<a href="' . esc_attr(get_term_link($tax_term, $taxonomy)) . '" title="' . sprintf( __( "View all posts in %s" ), $tax_term->name ) . '" ' . '>' . $tax_term->name.'</a></li>';
}
?>
</ul>
		</div> <!-- .details -->
		
	</div><!-- .entry-content .row -->

</article><!-- #post-## -->

