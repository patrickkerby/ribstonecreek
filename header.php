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
	<script>
		new WOW().init(); 
	</script>
</head>

<body <?php body_class(); ?>>
<?php
$hero = get_field('background_image');
$overlay = get_field('overlay');	
?>
<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content',
		'understrap' ); ?></a>

		<nav class="navbar navbar-toggleable-md row no-gutter navbar-dark" style="background-image: linear-gradient(rgba(45,51,55,0.<?php echo $overlay; ?>), rgba(45,51,55,0.<?php echo $overlay; ?>)), url('<?php echo $hero; ?>'); background-size: cover;">

		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>

				<button class="navbar-toggler pull-right" type="button" data-toggle="modal" data-target="#modalNavigation">
					<span class="navbar-toggler-icon"></span>
				</button>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
							
						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						
						<?php endif; ?>
						
					
					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->
					
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

				<!-- The WordPress Menu goes here -->
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
