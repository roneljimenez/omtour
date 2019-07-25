<?php
add_theme_support('post-thumbnails');
add_image_size('omtour-featured', 2000, 1200, true);
register_nav_menus(
    array(
        'top' => __('Top Menu', 'omtour'),
        'footer' => __('Footer Menu', 'omtour'),
    )
);

function omtour_menu_classes($classes, $item, $args){
    if($args->theme_location == 'top'){
        $classes[] = 'nav-link';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'omtour_menu_classes', 1, 3);

function omtour_post_type() {
    register_post_type('omtour_slider_banner', array(
        'labels'=>array(
            'name'=> __('Carousel'),
            'singular_name'=> __('Item'),
            'add_new'=> __('Nuevo Item'),
            'add_new_item'=> __('Añadir nuevo item'),
            'edit_item'=> __('Editar Item'),
            'featured_image'=> __('Imagen del Slide')
        ),
        'public'=> true,
        'exclude_from_search'=>true,
        'has_archive'=>false,
        'show_in_nav_menus'=>false,
        'menu_icon'=>'dashicons_slides',
        'supports'=>array('title', 'editor', 'thumbnail')
    ));
}
add_action('init', 'omtour_post_type');