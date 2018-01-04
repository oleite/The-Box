<!doctype html>
<html>
	<head>
	
		<meta charset="UTF-8">


		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		<?php wp_head(); ?>
	
	</head>

	<body>
		<?php wp_nav_menu( array(
			'theme_location'  => 'primary',
			'menu'            => '',
			'container'       => 'div',
			'container_class' => 'menu-{menu-slug}-container',
			'container_id'    => '',
			'menu_class'      => 'menu',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
			'depth'           => 0,
			'walker'          => '',
		) ); ?>
		