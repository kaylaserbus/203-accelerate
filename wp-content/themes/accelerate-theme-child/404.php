<?php
/**
 * 404 Page (Not Found) Template
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
        <div class="center-content">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jax.jpg"/>
                <h2>Don't be sad!</h2><br>
                <h6>It's just a 404 error.</h6><br>
                <a class="button" href="<?php echo site_url('/') ?>">Homepage</a>
        </div>
		</div><!-- .main-content -->
    </div><!-- #primary -->

<?php get_footer(); ?>