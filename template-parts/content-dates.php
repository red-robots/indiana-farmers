<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-dates"); ?> style="background-image: url(<?php 
    echo get_template_directory_uri()."/images/topography.png";
?>);">
	<?php $banner = get_field("banner");
	if($banner):?>
		<img class="banner" src="<?php echo $banner['url'];?>" alt="<?php echo $banner['alt'];?>">
	<?php endif;?>
	<div class="wrapper copy">
		<header><h1><?php the_title();?></h1></header>
		<?php the_content();?>
		<?php $dates = get_field("dates");
		if($dates):?>
			<div class="dates">
				<?php foreach($dates as $row):?>
					<?php $title = $row['title'];
					$copy = $row['copy'];
					$gallery = $row['gallery'];?>
					<div class="row clear-bottom">
						<div class="col-1">
							<?php if($title):?>
								<header>
									<h2><?php echo $title;?></h2>
								</header>
							<?php endif;?>
							<?php if($copy):?>
								<div class="copy">
									<?php echo $copy;?>
								</div><!--.copy-->
							<?php endif;?>
						</div><!--.col-1-->
						<div class="col-2">
							<?php if($gallery):
								foreach($gallery as $image):?>
									<img src="<?php echo $image['sizes']['large'];?>" alt="<?php echo $image['alt'];?>">
								<?php endforeach;
							endif;?>
						</div><!--.col-2-->
					</div><!--.row-->
				<?php endforeach;?>
			</div><!--.dates-->
		<?php endif;?>
	</div><!--.wrapper-->
</article><!-- #post-## -->
