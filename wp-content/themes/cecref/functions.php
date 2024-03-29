<?php

function theme_cecref_register_assets(){

    wp_enqueue_script('scrollreveal', 'https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js');
    wp_deregister_script('jquery');
    wp_enqueue_script('reveal.js', get_stylesheet_directory_uri().'/assets/js/scrollreveal.js', array(), null, true); // !!!reveal
    wp_enqueue_style('themececref', get_stylesheet_directory_uri().'/assets/sass/main.css');
    wp_enqueue_style('lefleat', 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.css');
    wp_enqueue_style('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
    wp_enqueue_script('lefleat-js', 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.js', array(), null, true);
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
    wp_enqueue_script('menu-mobile.js', get_stylesheet_directory_uri().'/assets/js/menu-mobile.js', array(), null, true);
    wp_enqueue_script('sub-menu.js', get_stylesheet_directory_uri().'/assets/js/sub-menu.js', array(), null, true);
    wp_enqueue_script('display-aside.js', get_stylesheet_directory_uri().'/assets/js/display-aside.js', array(), null, true);
    wp_enqueue_script('map.js', get_stylesheet_directory_uri().'/assets/js/map.js', array(), null, true);
    wp_enqueue_script('page-scroll.js', get_stylesheet_directory_uri().'/assets/js/page-scroll.js', array(), null, true);


}

function theme_cecref_supports(){
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
}



function wpc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg xml';
    return $mimes;
}


// Ajouter une taille d'image personnalisée sans dimensions
function add_custom_image_size() {
    add_image_size('custom_thumbnail', 0, 0, false);
}

// Supprimer les dimensions par défaut pour les images mises en avant
function remove_featured_image_dimensions($content) {
    $content['width'] = 0;
    $content['height'] = 0;
    return $content;
}


function articles_homepage(){
    $output = '';

    $query = new WP_Query(array(
        'post_per_page' => 2,
    ));

    if ($query->have_posts()): while ($query->have_posts()) : $query->the_post();
        $output .= '<div class="container-view-article">';
        if (has_post_thumbnail()){
            $output .= '<a class="link-latest-article" href="' . get_permalink() . '"><img class="thumbnail-article" src="'. esc_url(get_the_post_thumbnail_url(get_the_ID())) . '"></a>';
        }
        $output .= '<a class="link-title-latest-article" href="'. get_permalink().'"><h3 class="title-article">' . get_the_title() . '</h3></a>';
        $output .= '<a class="link-title-latest-article" href="'. get_permalink().'"><div class="container-date-article"><p class="date-article">'. get_the_date( 'F Y').'</p></a></div></div>';
    endwhile; endif;

    wp_reset_postdata();

    return $output;
}


function custom_articles_shortcode() {

    $output = '';

    // Nouvelle requête WP_Query
    $query = new WP_Query(array(
        'posts_per_page' => 5,
    ));

    if ($query->have_posts()): while ($query->have_posts()): $query->the_post();
        $output .= '<section class="group-article">';
        $output .= '<article class="container-article">';
        // Affichage de l'image à la une
        if (has_post_thumbnail()) {
            $output .= '<div class="column-thumbnail">' . get_the_post_thumbnail(get_the_ID()) . '</div>';
        }

        // Affichage de la date
        $output .= '<div class="column-content"><p class="date p">' . get_the_date('F Y') . '</p>';

        // Affichage du titre
        $output .= '<h2 class="title-excerpt-news">' . get_the_title() . '</h2>';

        // Affichage de l'extrait
        $output .= '<p class="p">' . get_the_excerpt() . '</p>';

        // Affichage du lien "Lire l'article complet"
        $output .= '<div class="group-btn group-btn-news "><div class="btn-form-princ"><a class="content-btn-news" href="' . get_permalink() . '">Lire l\'article complet</a></div></div></div>';

        $output .= '</article>';
        $output .= '</section>';
    endwhile; endif;

    wp_reset_postdata();

    return $output;
}

function custom_excerpt_length() {
    return 45;
}


function custom_excerpt_more() {
    return '...';
}


add_action('wp_enqueue_scripts', 'theme_cecref_register_assets');
add_action('after_setup_theme', 'theme_cecref_supports');
add_action('after_setup_theme', 'add_custom_image_size');
add_filter('admin_post_thumbnail_html', 'remove_featured_image_dimensions');
add_filter('upload_mimes', 'wpc_mime_types');
add_filter('excerpt_length', 'custom_excerpt_length');

add_filter('excerpt_more', 'custom_excerpt_more');
register_nav_menu('header', 'menu principal');
register_nav_menu('header-mobile', 'menu mobile');
add_shortcode('custom_articles', 'custom_articles_shortcode');
add_shortcode('articles_homepage', 'articles_homepage');


