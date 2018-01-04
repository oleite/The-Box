<!doctype html>
<html>
<html>
	<head>
		<title>Lab</title>
		<meta charset="UTF-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
		<?php wp_head(); ?>
	</head>
	<body>

		<div class="header-container large-shadow">

			<div class="header">
				<nav class="navbar">
					<span class="brand">
						<a href="<?php echo site_url() ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/img/fpress-logo.svg" height="50px">
						</a>
						<p class="brand-description"><?php echo get_bloginfo('description'); ?></p>
					</span>

					<!-- <ul>
						<li><a href="#" class="current">Notícias</a></li>
						<li><a href="#">Multimídia</a></li>
						<li><a href="#">Arte</a></li>
						<li><a href="#">Esportes</a></li>
						<li><a href="#">Humor</a></li>
						<li><a href="#">Discussão</a></li>
						<li><a href="#">Sobre</a></li>
					</ul> -->
					<?php wp_nav_menu( array(
						'theme_location'  => 'navbar',
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
				</nav>
				<div class="responsive-bar">
					<a href="<?php echo site_url() ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/fpress-logo.svg" height="40px">
					</a>

					<i id="navToggle" class="fa fa-2x fa-bars" aria-hidden="true"></i>
				</div>
					<!--<img class="header-logo" src="<?php echo get_template_directory_uri(); ?>/img/fpress-logo.svg">-->
			</div>
		</div>
