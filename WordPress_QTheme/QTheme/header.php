<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package QTheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php 

	// REDUX Global VARIABLE
	global $kylthemeoptions;


	wp_head(); ?>


	<?php 
		if (!empty($kylthemeoptions['trackingcode-head'])) {
			echo $kylthemeoptions['trackingcode-head'];
		}
	?>

</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'qtheme' ); ?></a>

	<header class="site-header">

		<div class="header-wrapper header-desctop">


			<div class="header-top_section">
				<div class="header-top_section-wrap">
					<?php 
					if ( !empty($kylthemeoptions['header-widgetareas']['1'] )) {
							dynamic_sidebar ('header_widgetarea_1');
						}
					?> 
				</div>	
			</div>
 

			<div class="header-logo_menu">

				<div class="site-branding">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php 
						if ( !empty($kylthemeoptions['header-logo']['url'] )) { ?>
							<img src=" <?php echo $kylthemeoptions['header-logo']['url'] ?> ">
						<?php
						}
					?>	 
					</a>

				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation">

					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav>

			</div>


			<div class="header-bottom_section">
				<div class="header-bottom_section-wrap"> 
					<?php 
					if ( !empty($kylthemeoptions['header-widgetareas']['2'] )) {
							dynamic_sidebar ('header_widgetarea_2');
						}
					?> 
				</div>
			</div>

		</div>	


		<div class="header-wrapper header-mobile" id="header_mob">

				<nav role="navigation" class="main-navigation-mobile">

					<div class="site-branding">

						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-mobile"> <img src=" <?php echo $kylthemeoptions['header-logo']['url'] ?> "> </a>

						<span> <?php dynamic_sidebar ('header_widgetarea_3'); ?> </span>

					</div><!-- .site-branding -->

		            <div id="menuToggle">
		              <input type="checkbox" onclick="activeMobMenu()" />
		                <span></span>
		                <span></span>
		                <span></span>
						<!-- mobile menu/nav -->
						<?php wp_nav_menu( 
							array( 
								'theme_location' => 'menu-1', 
								'menu_id' => 'primary-menu_mobile'
							) 
						); 
						?>
		            </div>
	          	</nav>

	        <div class="header-bottom_section"> 
				<?php 
				if ( !empty($kylthemeoptions['header-widgetareas']['2'] )) {
						dynamic_sidebar ('header_widgetarea_2');
					}
				?> 
			</div>	

		</div>	



<?php

if (!empty($kylthemeoptions['header-mobmenu'])) {
	
	$mobmenuoption = $kylthemeoptions['header-mobmenu'];

	if ( $mobmenuoption == 1) {
		// echo "menu1";
		echo "
		<script type=\"text/javascript\">
			var element = document.getElementById('primary-menu_mobile');
	  		element.classList.add('horizontal-menu');

	  		function activeMobMenu() {
	            var hm = document.getElementById('header_mob');
	            hm.classList.toggle('active');

	        	// add z-index -1 to all page sections if mob menu active
	            var elementorElements = document.querySelectorAll('.elementor-element');
	            elementorElements.forEach(function(elementorElement) {
			      elementorElement.classList.toggle('active_mob_menu');
			    });    
			}
  		</script>
  		";
	}

if ( $mobmenuoption == 2) {
		// echo "menu2";
		echo "
		<script type=\"text/javascript\">
			var element = document.getElementById('primary-menu_mobile');
	  		element.classList.add('vertical-menu');

	  		function activeMobMenu() {
	            var hm = document.getElementById('header_mob');
	            hm.classList.toggle('active');

	            // add z-index -1 to all page sections if mob menu active
	            var elementorElements = document.querySelectorAll('.elementor-element');
	            elementorElements.forEach(function(elementorElement) {
			      elementorElement.classList.toggle('active_mob_menu');
			    });  
			}
  		</script>
  		";
	}

}
 
?>

	</header><!-- #masthead -->