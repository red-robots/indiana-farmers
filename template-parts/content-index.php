<?php
/**
 * Template part for displaying page content in index.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-index"); ?> style="background-image: url(<?php 
    echo get_template_directory_uri()."/images/topography.png";
?>);">
	<?php $banner = get_field("banner");
    $welcome_message = get_field("welcome_message");
    $dates = get_field("dates");
    $image_one = get_field("image_one");
    $image_one_title = get_field("image_one_title");
    $image_two = get_field("image_two_");
    $image_two_title = get_field("image_two_title");
    $image_three = get_field("image_three");
    $image_three_title = get_field("image_three_title");
    $image_four = get_field("image_four");
    $image_four_title = get_field("image_four_title");
    if($banner):?>
        <img class="banner" src="<?php echo $banner['url'];?>" alt="<?php echo $banner['alt'];?>">
    <?php endif;?>
    <div class="wrapper">
        <?php if($welcome_message):?>
            <div class="row-1">
                <?php echo $welcome_message;?>
            </div><!--.row-1-->
            <div class="spacer"></div><!--.spacer-->
        <?php endif;?>
        <?php if($dates):?>
            <div class="row-2">
                <?php echo $dates;?>
            </div><!--.row-2-->
        <?php endif;?>
        <div class="row-3 clear-bottom">
            <div class="col-1 copy">
                <?php the_content();?>
            </div><!--.col-1-->
            <div class="col-2 clear-bottom">
                <?php if($image_one && $image_one_title):?>
                    <div class="image-1 block">
                        <img src="<?php echo $image_one['sizes']['medium'];?>" alt="<?php $image_one['alt'];?>">
                        <h2><?php echo $image_one_title;?></h2>
                        <div class="spacer"></div><!--.spacer-->
                    </div><!--.image-1-->
                <?php endif;?>
                <?php if($image_two && $image_two_title):?>
                    <div class="image-2 block">
                        <img src="<?php echo $image_two['sizes']['medium'];?>" alt="<?php $image_two['alt'];?>">
                        <h2><?php echo $image_two_title;?></h2>
                        <div class="spacer"></div><!--.spacer-->
                    </div><!--.image-2-->
                <?php endif;?>
                <?php if($image_three && $image_three_title):?>
                    <div class="image-3 block">
                        <img src="<?php echo $image_three['sizes']['medium'];?>" alt="<?php $image_three['alt'];?>">
                        <h2><?php echo $image_three_title;?></h2>
                        <div class="spacer"></div><!--.spacer-->
                    </div><!--.image-3-->
                <?php endif;?>
                <?php if($image_four && $image_four_title):?>
                    <div class="image-4 block">
                        <img src="<?php echo $image_four['sizes']['medium'];?>" alt="<?php $image_four['alt'];?>">
                        <h2><?php echo $image_four_title;?></h2>
                        <div class="spacer"></div><!--.spacer-->
                    </div><!--.image-4-->
                <?php endif;?>
            </div><!--.col-2-->
        </div><!--.row-3-->
    </div><!--.wrapper-->
</article><!-- #post-## -->
