<footer>
         
    <p>Copyright &copy; <?php echo date('Y'); ?> <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></p>

</footer>
<a href="#" class="toggle-nav"><i class="fa fa-bars"></i></a>
<nav>
	<a class="navbar-brand" href="<?php bloginfo('url'); ?>"><h2 id="brand"><?php bloginfo('name'); ?></h2></a>

	<?php 

	$defaults = array(
		'container' => false,
		'theme_location' => 'primary-menu',
		'menu_class' => 'navigation'
	);

	wp_nav_menu($defaults);

	?>
	

</nav><!--end primary_nav-->
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>