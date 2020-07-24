<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package understrap
 */

add_filter( 'body_class', 'understrap_body_classes' );

if ( ! function_exists( 'understrap_body_classes' ) ) {
	/**
	 * Adds custom classes to the array of body classes.
	 *
	 * @param array $classes Classes for the body element.
	 *
	 * @return array
	 */
	function understrap_body_classes( $classes ) {
		// Adds a class of group-blog to blogs with more than 1 published author.
		if ( is_multi_author() ) {
			$classes[] = 'group-blog';
		}
		// Adds a class of hfeed to non-singular pages.
		if ( ! is_singular() ) {
			$classes[] = 'hfeed';
		}

		return $classes;
	}
}

// Removes tag class from the body_class array to avoid Bootstrap markup styling issues.
add_filter( 'body_class', 'understrap_adjust_body_class' );

if ( ! function_exists( 'understrap_adjust_body_class' ) ) {
	/**
	 * Setup body classes.
	 *
	 * @param string $classes CSS classes.
	 *
	 * @return mixed
	 */
	function understrap_adjust_body_class( $classes ) {

		foreach ( $classes as $key => $value ) {
			if ( 'tag' == $value ) {
				unset( $classes[ $key ] );
			}
		}

		return $classes;

	}
}

// Filter custom logo with correct classes.
add_filter( 'get_custom_logo', 'understrap_change_logo_class' );

if ( ! function_exists( 'understrap_change_logo_class' ) ) {
	/**
	 * Replaces logo CSS class.
	 *
	 * @param string $html Markup.
	 *
	 * @return mixed
	 */
	function understrap_change_logo_class( $html ) {

		$html = str_replace( 'class="custom-logo"', 'class="img-fluid"', $html );
		$html = str_replace( 'class="custom-logo-link"', 'class="navbar-brand custom-logo-link"', $html );
		$html = str_replace( 'alt=""', 'title="Home" alt="logo"' , $html );

		return $html;
	}
}

/**
 * Display navigation to next/previous post when applicable.
 */

if ( ! function_exists ( 'understrap_post_nav' ) ) {
	function understrap_post_nav() {
		// Don't print empty markup if there's nowhere to navigate.
		$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
		$next     = get_adjacent_post( false, '', false );

		if ( ! $next && ! $previous ) {
			return;
		}
		?>
				<nav class="container navigation post-navigation">
					<h2 class="sr-only"><?php _e( 'Post navigation', 'understrap' ); ?></h2>
					<div class="row nav-links justify-content-between">
						<?php

							if ( get_previous_post_link() ) {
								previous_post_link( '<span class="nav-previous">%link</span>', _x( '<i class="fa fa-angle-left"></i>&nbsp;%title', 'Previous post link', 'understrap' ) );
							}
							if ( get_next_post_link() ) {
								next_post_link( '<span class="nav-next">%link</span>',     _x( '%title&nbsp;<i class="fa fa-angle-right"></i>', 'Next post link', 'understrap' ) );
							}
						?>
					</div><!-- .nav-links -->
				</nav><!-- .navigation -->

		<?php
	}
}

// Redirect Beer Single Pages to Beer Archive

/*
add_action( 'template_redirect', 'rsc_redirect_post' );

function rsc_redirect_post() {
  $queried_post_type = get_query_var('post_type');
  if ( is_single() && 'beer' ==  $queried_post_type ) {
    wp_redirect( home_url( 'beer', 'relative' ), 301 );
    exit;
  }
}
*/

// Add ACF Options Page
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

register_nav_menus( array(
	'mobile_menu' => 'Mobile Menu',
	'footer_menu' => 'Footer Menu',
) );


// Make SVGs Work
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

//  ---------------

// remove default sorting dropdown
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );

// remove default sorting dropdown
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

// remove shop page title
add_filter( 'woocommerce_show_page_title' , 'woo_hide_page_title' );

/**
 * woo_hide_page_title
 *
 * Removes the "shop" title on the main shop page
 *
 * @access      public
 * @since       1.0 
 * @return      void
*/
function woo_hide_page_title() {
	
	return false;
	}


/*
Disable Variable Product Price Range completely:
*/
 
add_filter( 'woocommerce_variable_sale_price_html', 'my_remove_variation_price', 10, 2 );
add_filter( 'woocommerce_variable_price_html', 'my_remove_variation_price', 10, 2 );
 
function my_remove_variation_price( $price ) {
$price = '';
return $price;
}

add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );
function woo_remove_product_tabs( $tabs ) {
 
    unset( $tabs['additional_information'] );   // Remove the additional information tab
 
    return $tabs;
}



// First, remove Add to Cart Button
 
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
 
// Second, add View Product Button
 
add_action( 'woocommerce_after_shop_loop_item', 'bbloomer_view_product_button', 10);
 
function bbloomer_view_product_button() {
global $product;
$link = $product->get_permalink();
echo do_shortcode('<a href="'.$link.'" class="add_to_cart_button">View Product</a>');
}

function cptui_register_my_cpts() {

	/**
	 * Post Type: Beers.
	 */

	$labels = array(
		"name" => __( "Beers", "ribstonecreek" ),
		"singular_name" => __( "Beer", "ribstonecreek" ),
	);

	$args = array(
		"label" => __( "Beers", "ribstonecreek" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"query_var" => true,
		"menu_icon" => "dashicons-star-empty",
		"supports" => array( "title", "editor" ),
	);

	register_post_type( "beer", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Beer Lineups.
	 */

	$labels = array(
		"name" => __( "Beer Lineups", "ribstonecreek" ),
		"singular_name" => __( "Beer Lineup", "ribstonecreek" ),
		"all_items" => __( "All Lineups", "ribstonecreek" ),
		"edit_item" => __( "Edit Lineup", "ribstonecreek" ),
	);

	$args = array(
		"label" => __( "Beer Lineups", "ribstonecreek" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => true,
		"label" => "Beer Lineups",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => true,
		"rewrite" => array( 'slug' => 'beer' )
	);
		register_taxonomy( "beer-types", array( "beer" ), $args );
}

add_action( 'init', 'cptui_register_my_taxes' );

/*
 * Replace Taxonomy slug with Post Type slug in url
 * Version: 1.1
 */
function taxonomy_slug_rewrite($wp_rewrite) {
    $rules = array();
    // get all custom taxonomies
    $taxonomies = get_taxonomies(array('_builtin' => false), 'objects');
    // get all custom post types
    $post_types = get_post_types(array('public' => true, '_builtin' => false), 'objects');
    
    foreach ($post_types as $post_type) {
        foreach ($taxonomies as $taxonomy) {
	    
            // go through all post types which this taxonomy is assigned to
            foreach ($taxonomy->object_type as $object_type) {
                
                // check if taxonomy is registered for this custom type
                if ($object_type == $post_type->rewrite['slug']) {
		    
                    // get category objects
                    $terms = get_categories(array('type' => $object_type, 'taxonomy' => $taxonomy->name, 'hide_empty' => 0));
		    
                    // make rules
                    foreach ($terms as $term) {
                        $rules[$object_type . '/' . $term->slug . '/?$'] = 'index.php?' . $term->taxonomy . '=' . $term->slug;
                    }
                }
            }
        }
    }
    // merge with global rules
    $wp_rewrite->rules = $rules + $wp_rewrite->rules;
}
add_filter('generate_rewrite_rules', 'taxonomy_slug_rewrite');

// Populate GForm data for beer listing modal
add_filter( 'gform_field_value_beername', 'populate_beername' );
function populate_beername( $value ) {
	
	global $post;
	
	$title = get_the_title();
	
	return $title;      
}

/*
// Make WordPress Retina Ready

function jk_retina_script() {

wp_enqueue_script('jk_retina', 'content_url();', null, '', true);

}

add_action( 'wp_head', 'jk_retina_script' );
*/

function rsc_add_tip_to_store() {
	$product_id = 1137;
	$url = get_permalink( $product_id );
	$in_cart = false;

	foreach( WC()->cart->get_cart() as $cart_item ) {
		$product_in_cart = $cart_item['product_id'];
		if ( $product_in_cart === $product_id ) $in_cart = true;
	 }
	
	 if ( $in_cart ) {
	
		// Don't show the tip product
	
	 }
	else {
		echo '<a class="tip btn" href="'.get_permalink($product_id).'">Click here to tip your driver! 100% of tips go directly to those involved getting your order to your door.</a>';
	}
}
add_action( 'woocommerce_after_cart_contents', 'rsc_add_tip_to_store' );