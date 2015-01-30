<?php get_header(); ?>

	<div class="row full-height">
		<!-- Primary Column -->
		<div class="col1">

			<h1><?php the_title(); ?></h1>
			<p><?php the_field('description'); ?></p>

			<p>
				<?php previous_post_link('%link', '<'); ?>
				<?php next_post_link('%link', '>'); ?>
			</p>

		</div>

		<!-- Secondary Column -->
		<div class="col2 slider-container">

			<div id="image-slider" class="image-gallery">
				<?php the_field('images'); ?>
			</div>

		</div>
	</div>
<!-- <div class="content full-height"> -->
<!-- </div> -->
<?php get_footer(); ?>