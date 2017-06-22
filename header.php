<?php
/**
 * The header for theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner" style="background-image:url(<?php echo get_template_directory_uri()."/images/concrete-texture.jpg";?>);">
		<div class="col-1">
			<?php if(is_home()) { ?>
	            <h1 class="logo">
	            <a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri()."/images/logo.jpg";?>" alt="<?php bloginfo('name');?>"></a>
	            </h1>
	        <?php } else { ?>
	            <div class="logo">
	            <a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri()."/images/logo.jpg";?>" alt="<?php bloginfo('name');?>"></a>
	            </div>
	        <?php } ?>
		</div><!--.col-1-->
		<div class="col-2">
			<?php $trip_title = get_field("trip_title","option");
			$dates = get_field("dates","option");?>
			<?php if($trip_title):?>
				<div class="row-1">
					<?php echo $trip_title;?>
				</div><!--.row-1-->
			<?php endif;
			if($dates):?>
				<div class="row-2">
					<?php echo $dates;?>
				</div><!--.row-2-->
			<?php endif;?>
			<nav id="site-navigation" class="main-navigation row-3" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Menu', 'acstarter' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		</div><!-- .coll-2 -->
	</header><!-- #masthead -->

	<div id="content" class="site-content wrapper">
