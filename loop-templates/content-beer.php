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
	<header class="entry-header lazy wow fadeIn col-lg-12" data-src="<?php echo $artwork; ?>" data-wow-duration="1s" style="background-image: url('<?php echo $artwork; ?>');"></header>

	<div class="entry-content row justify-content-center no-gutters">

		<div class="can <?php echo $container_type; ?> col-md-3 col-sm-4 col-10">
			<img data-src="<?php echo $can; ?>" src="<?php echo $can; ?>" class="lazy wow fadeIn" data-wow-duration="1.4s" /> 
		</div>

		<div class="details col-md-6 col-sm-6 wow fadeIn" data-wow-duration="2.75s">
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

			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-<?php echo($post->post_name); ?>">
			  Where can I buy this beer?
			</button>
			
			<!-- Modal -->
			<div class="modal fade" id="modal-<?php echo($post->post_name); ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo($post->post_title); ?>" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title">I wanna get my hands on this!</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <?php
				        gravity_form( 'Beer Finder', false, false, false, '', true );	
					?>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			      </div>
			    </div>
			  </div>
			</div>
			
			<?php understrap_entry_footer(); ?>

		</div> <!-- .details -->
		
	</div><!-- .entry-content .row -->

</article><!-- #post-## -->

