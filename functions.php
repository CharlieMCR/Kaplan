<?php 

add_theme_support('menus');
add_theme_support('post-thumbnails');

function register_theme_menus() {

	register_nav_menus(
		array(
			'primary-menu' => __('Primary Menu')
		)
	);
}
add_action('init', 'register_theme_menus');

function new_excerpt_more( $more ) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

// return the length of the excerpt
function custom_excerpt_length( $length ) {
	return 60;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// function cmcr_create_widget( $name, $id, $description ) {

// 	register_sidebar(array(
// 		'name' => __( $name ),	 
// 		'id' => $id, 
// 		'description' => __( $description ),
// 		'before_widget' => '<div class="widget">',
// 		'after_widget' => '</div>',
// 		'before_title' => '<h2 class="module-heading">',
// 		'after_title' => '</h2>'
// 	));

// }

// cmcr_create_widget( 'Project Sidebar', 'project', 'Displays on the side of pages with a sidebar' );
// // wpt_create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );





function load_LESS() {

	$path = get_stylesheet_directory_uri() . '/css/';
	
	/* LESS stylesheet and less.js */
	$output = "\n"."<!-- Loading LESS stylesheet and less.js -->"."\n";
	$output .= '<link rel="stylesheet/less" type="text/css" href="' . $path . 'style.less' . '"/>' . "\n";
	$output .= '<script type="text/javascript" src="' . $path . 'less.min.js"></script>' ."\n";
	
	/* Auto refreshing the page when saving the stylesheet */
	$output .= "\n" . "<!-- Autorefresh for LESS.js -->" . "\n";
	$output .= '<script type="text/javascript">' . "\n";
	$output .= '  less.env = "development";' . "\n";
	$output .= '  less.watch();' . "\n";
	$output .= '</script>' . "\n\n";
	
	/* Printing on page */
	print $output;
}
if ( ! is_admin()) add_action( 'wp_head', 'load_LESS' );









function cmcr_theme_styles() {

// 	wp_enqueue_style('googlefont_css', 'http://fonts.googleapis.com/css?family=Droid+Sans:400,700');

	wp_enqueue_style('main_css', get_template_directory_uri() . '/css/normalize.css');

	wp_enqueue_style('style_css', get_template_directory_uri() . '/css/style.less');

}
add_action('wp_enqueue_scripts', 'cmcr_theme_styles');


function cmcr_theme_js() {

	global $wp_scripts;

	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '', '', false );

	wp_register_script( 'respond_shiv', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false );

	$wp_scripts->add_data('html5_shiv', 'conditional', 'lt IE 9' );

	$wp_scripts->add_data('respond_shiv', 'conditional', 'lt IE 9' );

// 	wp_enqueue_script( 'less_js', 'https://cdnjs.cloudflare.com/ajax/libs/less.js/2.2.0/less.min.js', '', '', false );

	wp_enqueue_script('app_js', get_template_directory_uri() . '/js/app.js', array('jquery'), '', true);
}
add_action( 'wp_enqueue_scripts', 'cmcr_theme_js');

add_filter( 'show_admin_bar', '__return_false'); // hide admin bar

?>