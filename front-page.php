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
	 			<?php the_post_thumbnail('full'); ?>
	 		</div>

	 	<?php endwhile; endif; wp_reset_postdata(); ?>
	 </div>
</div>

<div class="content full-height">
	<section <?php post_class(''); ?>>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<h1><?php the_title(); ?></h1>
			<p><?php the_excerpt(); ?></p>

		<?php endwhile; endif; ?>

		<button id="btn">Start</button>
	</section>
	<a href="#" id="prev" class="left"><</a>

	<a href="#" id="next" class="right">></a>

</div>

<?php get_footer(); ?>