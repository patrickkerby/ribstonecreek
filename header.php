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
?>
<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content',
		'understrap' ); ?></a>

		<nav class="navbar navbar-expand-md navbar-dark" style="background-image: linear-gradient(rgba(45,51,55,0.<?php echo $overlay; ?>), rgba(45,51,55,0.<?php echo $overlay; ?>)), url('<?php echo $hero; ?>');">

		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>

				<?php if (!empty($logo)) { ?>
			
				<img src="<?php echo( $logo ); ?>" />

			    <?php }
				    else { ?>
				    
						<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						<h1 class="page-title"><?php the_title() ?></h1>    
		        			    
				<?php } ?>
					
				<button class="navbar-toggler pull-right" type="button" data-toggle="modal" data-target="#modalNavigation">
					<span class="navbar-toggler-icon"></span>
				</button>
	
				<div class='modal fade modal-fullscreen-menu' id='modalNavigation' role='dialog' tabindex='-1'>
					
					<button aria-label='Close' class='close' data-dismiss='modal' type='button'>
				    	<span class='sr-only'>Close navigation</span>
						<span class='close'>&times;</span>
					</button>
						
					<div class='modal-dialog'>
					
						<!-- The WordPress Menu goes here -->
						<?php wp_nav_menu(
							array(
								'theme_location'  => 'primary',
								'menu_class'      => 'navbar-nav',
								'fallback_cb'     => '',
								'menu_id'         => 'hamburger-menu',
								'walker'          => new WP_Bootstrap_Navwalker(),
							)
						); ?>
				
					</div>
				</div>						

				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'walker'          => new WP_Bootstrap_Navwalker(),
					)
				); ?>
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- .wrapper-navbar end -->
