<?php 
/*
	Template Name: Print Page
*/
 ?>
<?php get_header(); ?>

<div class="holder full-height">
	<?php 
		$args = array(
			'post_type' => 'print',
		);

		$query = new WP_Query($args);
	 ?>
	 <div class="carousel full-height">
	 	<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

	 		<div class="piece 90-height project">
	 		<h1><?php the_title(); ?></h1>
	 			<?php the_post_thumbnail('full'); ?>
	 		</div>

	 	<?php endwhile; endif; wp_reset_postdata(); ?>
	 </div>
</div>

<a href="#" id="prev" class="left"><</a>

<a href="#" id="next" class="right">></a>
<!-- <div class="content full-height"> -->
	<!-- <section <?php post_class(''); ?>> -->

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<!-- <h1><?php the_title(); ?></h1> -->
			<!-- <p><?php the_excerpt(); ?></p> -->

		<?php endwhile; endif; ?>

		<!-- <button id="btn">Start</button> -->
	<!-- </section> -->
	

<!-- </div> -->






<?php get_footer(); ?>