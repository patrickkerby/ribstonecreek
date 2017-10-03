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

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>" class="container">

	<header class="entry-header jumbotron-fluid paraxify" style="background-image: url('<?php echo $artwork; ?>');"></header>

	<div class="entry-content row">
		<div class="can col-md-4 col-sm-8 offset-sm-4">
			<img src="<?php echo $can; ?>" />
		</div>

		<div class="details col-md-6 col-sm-10 offset-lg-1 offset-sm-2">
			<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
		
			<div class="beer-meta" style="color: <?php echo $beer_colour; ?>;">
				<span class="alc"><?php the_field('alc-vol'); ?>%</span>
				<span class="ibu"><?php the_field('ibu'); ?> IBU</span>
				<span class="type"><?php the_field('beer_type'); ?></span>
				<span class="availability"><?php the_field('availability'); ?></span>
			</div>

			<?php the_field('beer_description'); ?>

			<?php if( have_rows('awards') ): ?>						
			<ul class="awards">			
				<?php while( have_rows('awards') ): the_row(); 
					$award = get_sub_field('award');
					?>
					<li><?php echo $award; ?></li>
				<?php endwhile; ?>
			</ul>
			<?php endif; ?>

		</div> <!-- .details -->
		
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php understrap_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

