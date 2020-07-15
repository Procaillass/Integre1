<?php

## NAVIGATION
//Déclaration des menus
register_nav_menus(array(
    "primary" => __("Main menu", "mytheme"),
    "footer" => __("Footer menu", "mytheme")
));

//Filtre pour ajouter des classes sur les li
function add_additional_class_on_li($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// add class on link nav_menu
function add_menuclass($ulclass)
{
    return preg_replace('/<a /', '<a class="navbar-item"', $ulclass);
}
add_filter('wp_nav_menu', 'add_menuclass');

## END NAVIGATION

## IMAGES
// add image à la une
add_theme_support('post-thumbnails');
set_post_thumbnail_size(200, 300, array("left", "top"));

// tailles images
add_image_size('fullscreen', 600, 600);

## END IMAGES

## REGLAGES EDITORS
// activer css pour classic-editor
add_theme_support("editor-styles");
add_editor_style("editor-style.css");

//gestion des font-sizes
add_theme_support('disable-custom-font-sizes');
add_theme_support('editor-font-sizes', array(
    array(
        'name' => __("small"),
        'size' => 12,
        'slug' => 'small',
        'shortname' => 's'
    )
));
//Palette de couleurs Gutemberg
add_theme_support('disable-custom-colors');
add_theme_support('editor-color-palette', array(
    array(
        'name' => 'Silver',
        'slug' => 'dark-gray',
        'color' => "#1a1a1a"
    ),
    array(
        'name'  => 'Royal blue',
        'slug'  => 'blue-royal',
        'color' => 'rgba(0,35,102, .5)',
    )
));
//END EDITORS

## DIVERS
//activer le title auto par Yoast
add_theme_support('title-tag');

// add les formats d'articles/pages
add_theme_support('post-formats', array(
    'video', 'gallery'
));
add_post_type_support('page', 'post-formats');

//HTML5
add_theme_support('html5', array(
    'search-form',
    'caption',
    'gallery'
));

## Chargement libs
function theme_enqueue()
{
    wp_enqueue_style('bulma', 'https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.0/css/bulma.min.css');
    wp_enqueue_style('main', get_bloginfo('template_url') . '/style.css');

    if (is_page()) :
        wp_enqueue_script('main',  get_bloginfo('template_url') . '/main.js', 'jquery', '1.0', true);
    endif;
    //unregister juery
    wp_deregister_script('jquery');
    wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"), '', '3.1.4', true);
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'theme_enqueue');

## WIDGETS
// désactivation
function remove_default_widgets()
{
    unregister_widget('WP_Widget_Calendar');
    unregister_widget('WP_Widget_RSS');
}
add_action('widgets_init', 'remove_default_widgets');

//Création Zones
add_action('widgets_init', 'add_zones_widgets');
function add_zones_widgets()
{
    register_sidebar(array(
        "name" => "Sidebar",
        "id" => "sidebar-right",
        "description" => "Zone de sidebar de droite",
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
        "class" => 'sidebar-right'
    ));

    register_sidebar(array(
        "name" => "Footer gauche",
        "id" => "sidebar-footer-left",
        "description" => "Zone de sidebar footer de gauche",
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
        "class" => 'sidebar-footer-left'
    ));

    register_sidebar(array(
        "name" => "Footer droite",
        "id" => "sidebar-footer-right",
        "description" => "Zone de sidebar footer de droite",
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
        "class" => 'sidebar-footer-right'
    ));
}
## END WIDGETS

## EXTRAIT
// Nombre de mots dans l'extrait
function custom_excerpt_length($length)
{
    return 25;
}
add_filter('excerpt_length', 'custom_excerpt_length');

// affichage du nom d'une archive
add_filter('get_the_archive_title', 'modify_archive_title');
function modify_archive_title($title)
{
    $title = explode(":", $title);
    return "Nos " . strtolower($title[1]);
}

## INCLUDES
// Inscription d'un utilisateur en "abonné"
require get_template_directory() . '/inc/new_user.php';
require get_template_directory() . '/inc/my_functions.php';
require get_template_directory() . '/inc/customs.php';
require get_template_directory() . '/inc/acf-control.php';


## SHORTCODES
function bonjour($atts, $content = '')
{
    $atts = shortcode_atts(array(
        "qui" => ''
    ), $atts, 'bienvenue');
    if ($atts['qui'] == '') :
        return "Bonjour $content";
    else :
        return "Bonjour " . $atts['qui'] . "$content ";
    endif;
}
add_shortcode('bienvenue', 'bonjour');
