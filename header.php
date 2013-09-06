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
<!--
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
					
					if(sizeof($images) > 0)
					{
						$rand = rand(0,sizeof($images) - 1);
						$image_rand_1 = $images[$rand];
						if(sizeof($images) > 1)
						{
							unset($images[$rand]);
							$images=array_values($images);
						}
						
						$image_rand_2 = $images[rand(0,sizeof($images) - 1)];
						//~ echo "<img class=\"smb-logo-icon1\" width=\"270\" height=\"202\" alt=\"Shared Memory Blog icons 1\" src=\"" . get_bloginfo('template_directory') . "/logo_icons/$image_rand_1\"/>";
						//~ echo "<img class=\"smb-logo-icon2\" width=\"270\" height=\"202\" alt=\"Shared Memory Blog icons 2\" src=\"" . get_bloginfo('template_directory') . "/logo_icons/$image_rand_2\"/>";
					}
				}
			?>
				<div class="smb-logo-icon1"> <?php if(isset($image_rand_1)) echo "<img alt=\"Shared Memory Blog icons 1\" src=\"" . get_bloginfo('template_directory') . "/logo_icons/$image_rand_1\"/>"; ?></div>
				<div class="smb-logo-icon2"> <?php if(isset($image_rand_2)) echo "<img alt=\"Shared Memory Blog icons 2\" src=\"" . get_bloginfo('template_directory') . "/logo_icons/$image_rand_2\"/>"; ?></div>
		</a>
-->
		
		<?php
			$screen_logo_array = array( array("screen 1_1.png", 250 , "logo_icons_1_1", 412 , 220 ), array("screen 4_3.png", 334 , "logo_icons_4_3", 305 , 222 ), array("screen 16_9.png", 443 , "logo_icons_16_9", 224 , 224 )) ;
			$screen_rand_1 = rand(0,2);
			$screen_rand_2 = rand(0,2);
			//~ $screen_rand_2 = $screen_rand_1;
			//~ $screen_rand_1 = 0;
			//~ $screen_rand_2 = 0;
			
			
			
			//Choose a random icon for each screen
			$images = array();
			if ( $img_dir = @opendir(get_theme_root() . "/" . get_template() . "/" . $screen_logo_array[$screen_rand_1][2]) )
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
				
				if(sizeof($images) > 0)
				{
					$rand = rand(0,sizeof($images) - 1);
					$image_rand_1 = $images[$rand];
					if(sizeof($images) > 1)
					{
						unset($images[$rand]);
						$images=array_values($images);
					}
					if($screen_rand_1 == $screen_rand_2) $image_rand_2 = $images[rand(0,sizeof($images) - 1)];
				}
			}
			
			if($screen_rand_1 != $screen_rand_2)
			{
				$images = array();
				if ( $img_dir = @opendir(get_theme_root() . "/" . get_template() . "/" . $screen_logo_array[$screen_rand_2][2]) )
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
					
					if(sizeof($images) > 0)
					{
						$rand = rand(0,sizeof($images) - 1);
						$image_rand_2 = $images[$rand];
					}
				}
			}
		?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" style="width : <?php echo ( $screen_logo_array[$screen_rand_1][1] + $screen_logo_array[$screen_rand_2][1] + 489 - 2) ?>px;" >
		<?php

			echo "<div class='smb-logo-left-screen' style=\"width : " . $screen_logo_array[$screen_rand_1][1] . "px;\">";
				echo "<div class=\"smb-logo-screen-background\">" . ((isset($image_rand_1))? "<img alt=\"Shared Memory Blog icons 1\" src=\"" . get_bloginfo('template_directory') . "/". $screen_logo_array[$screen_rand_1][2] ."/" . $image_rand_1 ."\"/>" : "") . "</div>";
				echo "<img alt='Shared Memory Blog logo left screen' src=\"" . get_bloginfo("template_directory") . "/images/" . $screen_logo_array[$screen_rand_1][0] . "\" />";
			echo "</div>";
			echo "<div class='smb-logo-right-screen' style=\"width : " . $screen_logo_array[$screen_rand_2][1] . "px; left : " . ($screen_logo_array[$screen_rand_1][1] + 489 - 1)  . "px;\" >";
				echo "<div class=\"smb-logo-screen-background\">" . ((isset($image_rand_2))? "<img alt=\"Shared Memory Blog icons 2\" src=\"" . get_bloginfo('template_directory') . "/". $screen_logo_array[$screen_rand_2][2] ."/" . $image_rand_2 . "\"/>" : "") . "</div>";
				echo "<img alt='Shared Memory Blog logo left screen' src=\"" . get_bloginfo("template_directory") . "/images/" . $screen_logo_array[$screen_rand_2][0] . "\" />";
			echo "</div>";
			
			echo "<img class='smb-logo-center'  alt='Shared Memory Blog logo' src=\"" . get_bloginfo("template_directory") . "/images/Bannière - V3.png\" style=\"left: " . ($screen_logo_array[$screen_rand_1][1] - 1) . "px;\" />";
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
