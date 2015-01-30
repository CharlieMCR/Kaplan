<?php 
/*
	Template Name: Front Page
*/
 ?>
<?php get_header(); ?>


	<div class="holder full-height">
		<?php 
			$args = array(
				'post_type' => 'front',
			);

			$query = new WP_Query($args);
		 ?>
		 <div class="carousel full-height">
		 	<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

		 		<div class="item">
		 			<?php the_post_thumbnail('medium'); ?>
		 		</div>

		 	<?php endwhile; endif; wp_reset_postdata(); ?>
		 </div>
	</div>



<?php get_footer(); ?>