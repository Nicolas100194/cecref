<?php

function theme_cecref_register_assets(){
    wp_deregister_script('jquery');
    wp_enqueue_style('themececref', get_stylesheet_directory_uri().'/assets/sass/main.css');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
    wp_enqueue_script('menu-mobile.js', get_stylesheet_directory_uri().'/assets/js/menu-mobile.js', array(), null, true);
    wp_enqueue_script('sub-menu.js', get_stylesheet_directory_uri().'/assets/js/sub-menu.js', array(), null, true);
}

function theme_cecref_supports(){
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
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

function remove_thumbnail_dimensions($html, $post_id, $post_image_id) {
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

function custom_articles_shortcode() {

    $output = '';

    // Nouvelle requête WP_Query
    $query = new WP_Query(array(
        'posts_per_page' => 5,
    ));

    if ($query->have_posts()): while ($query->have_posts()): $query->the_post();
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
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3);
add_filter('excerpt_more', 'custom_excerpt_more');
register_nav_menu('header', 'menu principal');
register_nav_menu('header-mobile', 'menu mobile');
add_shortcode('custom_articles', 'custom_articles_shortcode');


