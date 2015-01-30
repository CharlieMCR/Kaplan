<?php 
/*
	Template Name: Contact Page
*/
 ?>
<?php get_header(); ?>

<div class="holder full-height">
</div>

<div class="content full-height">
	<section <?php post_class(''); ?>>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<h1><?php the_title(); ?></h1>
			<p><?php the_excerpt(); ?></p>

		<?php endwhile; endif; ?>

		<button id="btn">Start</button>
	</section>

</div>






<?php get_footer(); ?>