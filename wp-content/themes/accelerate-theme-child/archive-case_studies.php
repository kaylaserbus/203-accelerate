<?php
/**
 * The template for displaying the case studies archive page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); 
				$size = "full";
				$services = get_field('services');
				$client = get_field('client');
				$link = get_field('site_link');
				$image_1 = get_field('image_1'); 
				$page_link = get_permalink($id); ?>

				<article class="case-study">
					<aside class="case-study-sidebar">
						<h2><a href="<?php echo $page_link; ?>"><?php the_title(); ?></a></h2>
						<h6><?php echo $services; ?></h6>
						<?php the_excerpt(); ?>
						<p><strong><a href="<?php echo $link; ?>">View Project &#9656;</a></strong></p>
					</aside>
				<div class="case-study-images">
					<a href="<?php echo $page_link; ?>"><?php if($image_1){ 
						echo wp_get_attachment_image( $image_1, $size );
					}?>
				</div>
				</article>

			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->
<?php get_footer(); ?>
