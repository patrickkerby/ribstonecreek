<?php
/**
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	<?php
		if( is_page( 'contact' ) ) { ?>
	
		<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.42.0/mapbox-gl.js'></script>
	    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.42.0/mapbox-gl.css' rel='stylesheet' />
	
	<?php } else {
				//no map
	}?>
<!-- Hotjar Tracking Code for http://www.ribstonecreekbrewery.ca -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:698612,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>		
	<script>
	  (function(d) {
	    var config = {
	      kitId: 'nmx3ksc',
	      scriptTimeout: 3000,
	      async: true
	    },
	    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
	  })(document);
	</script>
	<script>
		new WOW().init(); 
	</script>
</head>

<body <?php body_class(); ?>>
<?php
$hero = get_field('background_image');
$overlay = get_field('overlay');	
$logo = get_field('logo');
$logo_choice = get_field('logo_choice');

$hero_news = get_field('background_image', get_option('page_for_posts'));
$overlay_news = get_field('overlay', get_option('page_for_posts'));	
$news_title = get_the_title( get_option('page_for_posts', true) );

$hero_shop = get_field('background_image', get_option('woocommerce_shop_page_id'));
$overlay_shop = get_field('overlay', get_option('woocommerce_shop_page_id'));	
$shop_title = get_the_title( get_option('woocommerce_shop_page_id') );

if( is_product() ):
	global $product;
	$product = wc_get_product();
	$id = $product->get_id();
	$hero_product = get_field('background_image', $id);
	$overlay_product = get_field('overlay', $id);
endif;

$term = get_queried_object();
$termname = $term->name;
$hero_taxonomy = get_field('background_image', $term);
$overlay_taxonomy = get_field('overlay', $term);	
$taxonomy_title = get_the_title( $term );

//Theme custom logo
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );

?>
<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content',
		'understrap' ); ?></a>

		<?php if ( is_front_page() ) : ?>
			<nav class="navbar navbar-expand-md navbar-dark" style="background-image: linear-gradient(rgba(45,51,55,0.<?php echo $overlay; ?>), rgba(45,51,55,0.<?php echo $overlay; ?>)), url('<?php echo $hero; ?>');">
		<?php elseif ( is_home() ) : ?>
			<nav class="navbar navbar-expand-md navbar-dark" style="background-image: linear-gradient(rgba(45,51,55,0.<?php echo $overlay_news; ?>), rgba(45,51,55,0.<?php echo $overlay_news; ?>)), url('<?php echo $hero_news; ?>');">
		<?php elseif ( is_shop() ) : ?>
			<nav class="navbar navbar-expand-md navbar-dark" style="background-image: linear-gradient(rgba(45,51,55,0.<?php echo $overlay_shop; ?>), rgba(45,51,55,0.<?php echo $overlay_shop; ?>)), url('<?php echo $hero_shop; ?>');">
		<?php elseif ( is_product() ) : ?>
			<nav class="navbar navbar-expand-md navbar-dark" style="background-image: linear-gradient(rgba(45,51,55,0.<?php echo $overlay_product; ?>), rgba(45,51,55,0.<?php echo $overlay_product; ?>)), url('<?php echo $hero_product; ?>');">
		<?php elseif ( is_tax() ) : ?>
			<nav class="navbar navbar-expand-md navbar-dark" style="background-image: linear-gradient(rgba(45,51,55,0.<?php echo $overlay_taxonomy; ?>), rgba(45,51,55,0.<?php echo $overlay_taxonomy; ?>)), url('<?php echo $hero_taxonomy; ?>');">
		<?php else : ?>
			<nav class="navbar navbar-expand-md navbar-dark" style="background-image: linear-gradient(rgba(45,51,55,0.<?php echo $overlay; ?>), rgba(45,51,55,0.<?php echo $overlay; ?>)), url('<?php echo $hero; ?>');">
		<?php endif; ?>

		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>


<!-- ========== Begin NAV ============= -->				
			<div class="sticky topbar">
				<h1>Ribstone Creek Brewery</h1>
				<button class="navbar-toggler pull-right" type="button" data-toggle="modal" data-target="#modalNavigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>
			<div class="modal" id="modalNavigation" role="dialog" tabindex="-1">				
				<button aria-label="Close" class="close" data-dismiss="modal" type="button">
					<span class="close">&times;</span>
				</button>					
				<div class="modaldialog">					
					<img src="<?php echo $image[0]; ?>" alt="Ribstone Creek Brewery" />						
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'menu_class'      => 'navbar-nav',
							'fallback_cb'     => '',
							'menu_id'         => 'hamburger-menu',
							'walker'          => new understrap_WP_Bootstrap_Navwalker(),
						)
					); ?>				
				</div>				
			</div>						
			<?php wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'container_class' => '',
					'container_id'    => 'navbarNavDropdown-rsc',
					'menu_class'      => 'navbar-nav-rsc',
					'fallback_cb'     => '',
					'menu_id'         => 'main-menu',
					'walker'          => new understrap_WP_Bootstrap_Navwalker(),
				)
			); ?>
				
<!-- ========== END NAV ============= -->				

			<?php if ($logo_choice === true) : ?>			
				<img src="<?php echo( $logo ); ?>" />

			<?php elseif ( is_front_page() ) : ?>
				<div class="row justify-content-center">
					<h1 class="page-title col-10 col-md-8 col-lg-7 col-xl-6"><?php the_title() ?></h1>  
					<div class="col-8">
						<a href="https://ribstonecreekbrewery.ca/store" class="ghost">Order for home delivery!</a>
					</div>
				</div>
				<?php endif; ?>


			<?php if ( is_shop() ) : ?>
				<h1 class="page-title"><?php echo $shop_title; ?></h1>    	        				        			    
				<div class="product-nav">
					<a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View cart' ); ?>">View Cart <span class="cart-qty"><?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></span></a>
				</div>
			<?php elseif ( is_product() ) : ?>
				<h1 class="page-title"><?php echo $shop_title; ?></h1> 
				<div class="product-nav">
					<a href="/store">Back to Store</a>
					<a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View cart' ); ?>">View Cart <span class="cart-qty"><?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></span></a>
				</div>
			
			<?php elseif ( is_cart() || is_checkout() ) : ?>
				<h1 class="page-title"><?php the_title() ?></h1> 
				<div class="product-nav">
					<a href="/store">Forget anything? Back to Store.</a>
				</div>
			
			<?php elseif ( is_tax() ) : ?>
				<h1 class="page-title"><?php echo $termname; ?></h1> 
				<div class="description"><?php echo term_description(); ?></div>   	        				        			    

			<?php else : ?>
				<div class="row justify-content-center">
					<h1 class="page-title col-12"><?php the_title() ?></h1>  				
				</div>   
		<?php endif; ?>
			
					
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- .wrapper-navbar end -->
