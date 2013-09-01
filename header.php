<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Shared Memory Blog
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
		<!--	<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		-->
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
			<img class="smb-logo" width="1000" height="250" alt="Shared Memory Blog logo" src="<?php bloginfo('template_directory'); ?>/images/Bannière - V2.png"/>
			<?php
				$images = array();
				if ( $img_dir = @opendir(get_theme_root() . "/" . get_template() . "/logo_icons") )
				{
					while ( false !== ($img_file = readdir($img_dir)) )
					{
						// checks for gif, jpg, png
						if ( preg_match("/(\.gif|\.jpg|\.png)$/", $img_file) )
						{
							$images[] = $img_file;
						}
					}
					closedir($img_dir);
					
					$rand_1 = rand(0,sizeof($images) - 1);
					if(sizeof($images) > 1)
					{
						unset($images[$rand_1]);
						$images=array_values($images);
					}
					
					$rand_2 = rand(0,sizeof($images) - 1);
					
					echo "<img class=\"smb-logo-icon1\" width=\"270\" height=\"202\" alt=\"Shared Memory Blog icons 1\" src=\"" . get_bloginfo('template_directory') . "/logo_icons/$images[$rand_1]\"/>";
					echo "<img class=\"smb-logo-icon2\" width=\"270\" height=\"202\" alt=\"Shared Memory Blog icons 2\" src=\"" . get_bloginfo('template_directory') . "/logo_icons/$images[$rand_2]\"/>";
				}
			?>
		</a>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'shared-memory-blog' ); ?></h1>
			<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'shared-memory-blog' ); ?>"><?php _e( 'Skip to content', 'shared-memory-blog' ); ?></a></div>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="main" class="site-main">
