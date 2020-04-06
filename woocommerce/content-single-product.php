<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}

//Get ACF variables
$artwork = get_field("artwork", $id);
$can = get_field("beer_can");
$beer_colour = get_field("beer_colour");
$container_type = get_field("container");
$availability = get_field("availability");
$beer_description = get_field("beer_description");
$ibu = get_field('ibu');
$delivery_notice = get_field('delivery_notice', 'option');

?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
        
        ?>
		<div class="details wow fadeIn" data-wow-duration="1.75s">
			<div class="beer-meta" style="color: <?php echo $beer_colour; ?>;">
				<?php if (the_field('badge')): ?><span><?php the_field('badge'); ?></span><?php endif ?>
				<span class="alc"><?php the_field('alc-vol'); ?>%</span>
				<?php if($ibu): ?><span class="ibu"><?php echo($ibu); ?> IBU</span><?php endif; ?>
				<span class="type"><?php the_field('beer_type'); ?></span>
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
		</div>
		<div class="delivery-notice details wow fadeIn" id="delivery-notice" data-wow-duration="1.75s">
				<?php echo($delivery_notice); ?>
				<button class="close" id="close-notice">&times;</button>
		</div>
	</div>

	<section class="gallery row no-gutters">
		<div class="grid-layout col-md-12">
			<?php 

			$images = get_field('photo_gallery');
			
			if( $images ): ?>
					<?php foreach( $images as $image ): ?>
						<div class="grid-item image">
							<a href="<?php echo $image['url']; ?>" target="_blank" style="background-image: url('<?php echo $image['sizes']['large']; ?>');"></a>
						</div>
					<?php endforeach; ?>
			<?php endif; ?>
		</div>  
	</section>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>
<script>
window.onload = () => {
  // Get the button, and when the user clicks on it, execute myFunction
  document.getElementById("close-notice").onclick = function() {myFunction()};

  /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
  function myFunction() {
    document.getElementById("delivery-notice").classList.toggle("hidden");
  }
}	
</script>