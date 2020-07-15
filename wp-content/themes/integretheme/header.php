<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<!-- <title><?php bloginfo('name');?> - <?php the_title();?></title> rempalcé par YOAST -->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.0/css/bulma.min.css">-->
    <!--<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">-->
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
    <?php 
    if ( function_exists ( 'wp_body_open' ) ) : //wp 5.2
        wp_body_open();
    endif;?>
	<div class="page container content">
		<header class="hero is-secondary">
			<div class="hero-body">
                <h1 class="title"><?php bloginfo('name');?></h1>
            </div>
			<nav class="nav">
				<?php
				// afficher menu principal 
				$args = array(
					"theme_location" => "primary",
					"menu_class" => "navbar-brand",
					'add_li_class'  => 'navbar-item',
					"depth" => 1
				);
				wp_nav_menu($args);?>
			</nav>

			
			
			
		</header>