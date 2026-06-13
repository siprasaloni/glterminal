<?php
if (!defined('ABSPATH')) {
    exit;
}

define('GLT_THEME_VERSION', '1.0.0');

function glt_asset($path) {
    return get_template_directory_uri() . '/assets/' . ltrim($path, '/');
}

function glt_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'glterminal'),
        'footer' => __('Footer Menu', 'glterminal'),
    ));
}
add_action('after_setup_theme', 'glt_setup');

function glt_register_post_types() {
    register_post_type(
        'glt_career',
        array(
            'labels' => array(
                'name' => __('Careers / Jobs', 'glterminal'),
                'singular_name' => __('Career / Job', 'glterminal'),
                'add_new_item' => __('Add New Career / Job', 'glterminal'),
                'edit_item' => __('Edit Career / Job', 'glterminal'),
            ),
            'public' => true,
            'menu_icon' => 'dashicons-businessperson',
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
            'has_archive' => false,
            'rewrite' => array('slug' => 'careers'),
            'show_in_rest' => true,
        )
    );
}
add_action('init', 'glt_register_post_types');

function glt_enqueue_assets() {
    wp_enqueue_style('glt-fonts', 'https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap', array(), null);
    wp_enqueue_style('glt-home', glt_asset('css/home.css'), array('glt-fonts'), GLT_THEME_VERSION);
    wp_enqueue_script('glt-theme', glt_asset('js/theme.js'), array(), GLT_THEME_VERSION, true);
}
add_action('wp_enqueue_scripts', 'glt_enqueue_assets');

function glt_img($path) {
    return esc_url(glt_asset($path));
}

function glt_menu_fallback() {
    $items = array(
        'Home' => home_url('/'),
        'About' => home_url('/about/'),
        'Services' => home_url('/services/'),
        'Compliance' => home_url('/compliance/'),
        'Management' => home_url('/management/'),
        'News' => home_url('/news/'),
        'Careers' => home_url('/careers/'),
    );

    foreach ($items as $label => $url) {
        echo '<a href="' . esc_url($url) . '">' . esc_html($label) . '</a>';
    }
    echo '<a class="nav-action" href="' . esc_url(home_url('/contact/')) . '">' . esc_html__('Get a Quote', 'glterminal') . '</a>';
}
