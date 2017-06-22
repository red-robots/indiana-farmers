<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="wrapper copy">
			<?php $line_1 = get_field("line_1","option");
			$line_2 = get_field("line_2","option");
			if($line_1):?>
				<div class="row-1">
					<?php echo $line_1;?>
				</div><!--.row-1-->
			<?php endif;
			if($line_2):?>
				<div class="row-2">
					<?php echo $line_2;?>
				</div><!--.row-2-->
			<?php endif;?>
		</div><!--.wrapper-->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
