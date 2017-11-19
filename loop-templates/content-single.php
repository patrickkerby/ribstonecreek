<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article class="row no-gutters justify-content-center" id="post-<?php the_ID(); ?>">

	<header class="entry-header wow fadeIn col-8" data-wow-duration="1s" >

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">

			<?php understrap_posted_on(); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<div class="entry-content col-8">

		<?php the_content(); ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
