<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
		<title>
			<?php wp_title('|', true, 'right'); ?>
			<?php bloginfo('name'); ?>
		</title>

		<?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> id="top">
        <div class="wrapper">
        <div class="canvas">