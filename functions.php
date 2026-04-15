<?php

/* =====================================================
   THEME SETUP
===================================================== */

// Theme Supports
add_theme_support('automatic-feed-links');
add_theme_support('post-thumbnails');

// Pages ke liye support
add_post_type_support('page', 'thumbnail');
add_post_type_support('page', 'excerpt');

// Navigation Walker
require_once('wp_bootstrap_navwalker.php');


/* =====================================================
   ENQUEUE SCRIPTS & STYLES
===================================================== */

function mytheme_scripts() {

    // Swiper CSS & JS
    wp_enqueue_style('swiper-css', get_template_directory_uri().'/assets/css/swiper-bundle.min.css');
    wp_enqueue_script('swiper-js', get_template_directory_uri().'/assets/js/swiper-bundle.min.js', array(), null, true);

    // WordPress default jQuery use karo (old remove mat karo ❌)
    wp_enqueue_script('jquery');

}
add_action('wp_enqueue_scripts', 'mytheme_scripts');

register_nav_menus(array(
    'primary-menu' => 'Primary Menu'
));

/* =====================================================
   CLEAN HEAD
===================================================== */

function remove_head_links() {
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'remove_head_links');

remove_action('wp_head', 'wp_generator');


/* =====================================================
   SIDEBAR WIDGETS
===================================================== */

function mytheme_widgets() {

    // Main Sidebar
    register_sidebar(array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar-1',
        'description'   => 'Main Sidebar Widgets',
        'before_widget' => '<div class="sidebar-box mb-4 p-4 shadow-sm">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',
    ));

    // Footer Widget 1
    register_sidebar(array(
        'name'          => 'Footer Mentor Widget',
        'id'            => 'footer-mentor',
        'before_widget' => '<div class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));

    // Footer Widget 2
    register_sidebar(array(
        'name'          => 'Footer Contact Widget',
        'id'            => 'footer-contact',
        'before_widget' => '<div class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));

}
add_action('widgets_init', 'mytheme_widgets');

register_sidebar(array(
    'name'          => 'About Sidebar',
    'id'            => 'sidebar-about',
    'description'   => 'Sidebar only for About page',
    'before_widget' => '<div class="sidebar-box mb-4 p-4 shadow-sm">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5>',
    'after_title'   => '</h5>',
));


/* =====================================================
   CUSTOMIZER SETTINGS
===================================================== */

function mytheme_customize_register($wp_customize){

    /* ---------- HERO SECTION ---------- */
    $wp_customize->add_section('hero_section', array(
        'title' => 'Hero Section',
        'priority' => 30,
    ));

    // Title
    $wp_customize->add_setting('hero_title', array(
        'default' => 'Best Video Editing Institute in Rohini, Delhi',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_title', array(
        'label' => 'Hero Title',
        'section' => 'hero_section',
        'type' => 'text',
    ));

    // Subtitle
    $wp_customize->add_setting('hero_subtitle', array(
        'default' => 'Master video editing with industry experts.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_subtitle', array(
        'label' => 'Hero Subtitle',
        'section' => 'hero_section',
        'type' => 'textarea',
    ));

    // Image
    $wp_customize->add_setting('hero_image', array(
        'default' => get_template_directory_uri().'/assets/img/home-banner-image1-1.jpg',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image', array(
        'label' => 'Hero Image',
        'section' => 'hero_section',
    )));

    // Button
    $wp_customize->add_setting('hero_button_text', array(
        'default' => 'Apply Now',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_button_text', array(
        'label' => 'Button Text',
        'section' => 'hero_section',
        'type' => 'text',
    ));


    /* ---------- COUNTS SECTION ---------- */
    $wp_customize->add_section('counts_section', array(
        'title' => 'Counts Section',
        'priority' => 31,
    ));

    $counts = array(
        'students_count' => 'Students Count',
        'courses_count'  => 'Courses Count',
        'events_count'   => 'Placement %',
        'trainers_count' => 'Total Batch'
    );

    foreach($counts as $key => $label) {
        $wp_customize->add_setting($key, array(
            'default' => '0',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control($key, array(
            'label'   => $label,
            'section' => 'counts_section',
            'type'    => 'text',
        ));
    }


    /* ---------- FOOTER ---------- */

    // Titles
    $wp_customize->add_section('footer_titles', array(
        'title' => 'Footer Content',
        'priority' => 32,
    ));

    $wp_customize->add_setting('footer_useful_links_title', array(
        'default' => 'Our Partners',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_useful_links_title', array(
        'label' => 'Partners Title',
        'section' => 'footer_titles',
        'type' => 'text',
    ));

    $wp_customize->add_setting('footer_services_title', array(
        'default' => 'Our Popular Courses',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_services_title', array(
        'label' => 'Courses Title',
        'section' => 'footer_titles',
        'type' => 'text',
    ));

    // Footer Background
    $wp_customize->add_section('footer_background', array(
        'title' => 'Footer Background',
        'priority' => 33,
    ));

    $wp_customize->add_setting('footer_bg_color', array(
        'default' => '#f8f9fa',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_bg_color', array(
        'label' => 'Footer Background Color',
        'section' => 'footer_background',
    )));

}
add_action('customize_register', 'mytheme_customize_register');

/* =====================================================
   SECURITY SYSTEM 
===================================================== */

/* 1. Sanitize helper */
function wp_secure_sanitize_data($data) {
    if (is_array($data)) {
        return array_map('wp_secure_sanitize_data', $data);
    }
    return sanitize_text_field(wp_unslash($data));
}

/* 2. Secure form handler */
function handle_my_custom_form() {

    if (
        !isset($_POST['my_form_nonce']) ||
        !wp_verify_nonce($_POST['my_form_nonce'], 'my_form_action')
    ) {
        wp_die('Security verification failed');
    }

    if (!current_user_can('edit_posts')) {
        wp_die('Unauthorized access');
    }

    if (isset($_POST['student_name'])) {
        $name = sanitize_text_field($_POST['student_name']);
        // save logic here
    }
}
add_action('admin_post_nopriv_my_form', 'handle_my_custom_form');
add_action('admin_post_my_form', 'handle_my_custom_form');


/* 3. Safe DB query */
function get_secure_student_data($student_id) {
    global $wpdb;

    return $wpdb->get_results(
        $wpdb->prepare(
            "SELECT * FROM {$wpdb->users} WHERE ID = %d",
            $student_id
        )
    );
}


/* 4. Login security */
add_filter('login_errors', function () {
    return 'Invalid login credentials.';
});


/* 5. Disable XML-RPC */
add_filter('xmlrpc_enabled', '__return_false');


?>