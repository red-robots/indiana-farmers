<?php
/**
 * Template part for displaying page content in page-sitemap.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-sitemap"); ?> style="background-image: url(<?php 
    echo get_template_directory_uri()."/images/topography.png";
?>);">
	<?php $banner = get_field("banner");
	if($banner):?>
		<img class="banner" src="<?php echo $banner['url'];?>" alt="<?php echo $banner['alt'];?>">
	<?php endif;?>
	<div class="wrapper copy">
		<header><h1><?php the_title();?></h1></header>
		<?php the_content();?>
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
	</div><!--.wrapper-->
</article><!-- #post-## -->
