<?php 
/*
	Template Name: Web Page
*/
 ?>
<?php get_header(); ?>

<div class="holder full-height">
	<?php 
		$args = array(
			'post_type' => 'web',
		);

		$query = new WP_Query($args);
	 ?>
	 <div class="carousel full-height">
	 	<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

	 		<div class="piece 90-height project">
	 		<a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
	 			<?php the_post_thumbnail('full'); ?>
	 		</div>

	 	<?php endwhile; endif; wp_reset_postdata(); ?>
	 </div>
</div>
	<a href="#" id="prev" class=""><</a>
	<a href="#" id="next" class="">></a>


<!-- <div class="content"> -->
	<!-- <section <?php post_class(''); ?>> -->

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<!-- <h1><?php the_title(); ?></h1> -->

			<!-- <p><?php the_excerpt(); ?></p> -->

		<?php endwhile; endif; ?>

		<!-- <button id="btn">Start</button> -->
	<!-- </section> -->
	<!-- <div class="slide left"> -->
	<!-- </div> -->

	<!-- <div class="slide right"> -->
	<!-- </div> -->

<!-- </div> -->






<?php get_footer(); ?>