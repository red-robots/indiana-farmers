<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ACStarter
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found" style="background-image: url(<?php 
				echo get_template_directory_uri()."/images/topography.png";
			?>);">
				<?php $post = get_post(83);
				setup_postdata( $post );
				$banner = get_field("banner");
				if($banner):?>
					<img class="banner" src="<?php echo $banner['url'];?>" alt="<?php echo $banner['alt'];?>">
				<?php endif;?>
				<div class="wrapper copy">
					<header>
						<h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'acstarter' ); ?></h1>
					</header><!-- .page-header -->
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below?', 'acstarter' ); ?></p>
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</div><!-- .copy -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
