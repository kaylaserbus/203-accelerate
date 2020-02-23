<?php
/**
 * Template Name: About Page
 * 
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div id="primary" class="home-page hero-content">
	<div class="main-content" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<p>Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visble and making their customers smile.</p>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .main-content -->
</div><!-- #primary -->
<section class="services-offered">
	<div class="services-header">
		<h3>Our Services</h3>
		<h4>We take pride in our clients and the content we create for them.<br>Here's a brief overview of our offered services.</h4>
	</div>
	<div class="specific-services">
		<?php 
			$args = array(
				'post_type' => 'accelerate_services'
			);

			$query = new WP_Query($args);

			while($query->have_posts()) : $query->the_post();
				$size = "medium";
				$service = get_field('service');
				$description = get_field('description');
				$image = get_field('image');
		?>
		<h2><?php echo $service ?></h2>
		<h5><?php echo $description ?></h5>
		<?php echo wp_get_attachment_image( $image, $size ); ?>
		<?php endwhile; // end of the loop. ?>
		<?php wp_reset_query(); ?>
	</div>
	<div class="contact-us">
		<h2>Interested in working with us?</h2>
		<a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
	</div>
</section>
<?php get_footer(); ?>