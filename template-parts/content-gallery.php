<?php
/**
 * Template part for displaying page content in page-gallery.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-gallery"); ?> style="background-image: url(<?php 
    echo get_template_directory_uri()."/images/topography.png";
?>);">
	<?php $banner = get_field("banner");
	if($banner):?>
		<img class="banner" src="<?php echo $banner['url'];?>" alt="<?php echo $banner['alt'];?>">
	<?php endif;?>
	<div class="wrapper copy">
		<header><h1><?php the_title();?></h1></header>
		<?php the_content();?>
	</div><!--.wrapper .copy-->
	<?php $gallery = get_field("gallery");
	if($gallery):?>
		<div class="wrapper gallery clear-bottom">
			<?php foreach($gallery as $img):?>
				<div class="tile js-blocks">
					<a class="popup" href="#<?php echo $img['id'];?>">
						<img src="<?php echo $img['sizes']['thumbnail'];?>" alt="<?php echo $img['alt'];?>">
						<div class="overlay">
							<?php echo $img['title'];?>
						</div><!--.overlay-->
						<div class="hidden">
							<div class="popup-common" id="<?php echo $img['id'];?>">
								<img src="<?php echo $img['url'];?>" alt="<?php echo $img['alt'];?>">
								<div class="title"><?php echo $img['title'];?></div>
							</div><!--#id-->
						</div><!--.hidden-->
					</a>
				</div><!--.tile-->
			<?php endforeach;?>
		</div><!--.wrapper .gallery-->
	<?php endif;?>
</article><!-- #post-## -->
