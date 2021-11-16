<?php
/**
 * Required: include plugin theme scripts
 */

if ( class_exists( 'ReduxFramework' ) ) {
    /*
     * Required: Redux Framework
     */
    require get_parent_theme_file_path( '/extension/option-reudx/theme-options.php' );
}

// favicon
add_action('wp_head', 'intellect_favicon', 1);

function intellect_favicon() {
    global $intellect_options;
    $favicon = $intellect_options['intellect_opt_favicon_upload']['url'];

    if ( empty( $favicon ) ) :
        $favicon = get_theme_file_uri('/assets/images/favicon.png' );
    endif;

    echo '<link rel="shortcut icon" href="' . esc_url( $favicon ) . '" type="image/x-icon" sizes="16x16" />';
}

/**
 *
 */
flush_rewrite_rules( false );
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
/**
 *
 */
add_action('wp_enqueue_scripts', 'theme_register_assets');
function theme_register_assets()
{
    /*CSS*/
    wp_enqueue_style('default', get_stylesheet_uri(), array(), null);
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), null);
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/fonts/css/font-awesome.min.css', array(), null);
    wp_enqueue_style('fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), null);
    wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/styles.css', array(), null);
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), null);

    /*JS*/
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', array(), null, true);
    wp_enqueue_script('jquery-lazy', get_template_directory_uri() . '/assets/js/jquery.lazy.min.js', array(), null, true);
    wp_enqueue_script('jquery-lazy-plugin', get_template_directory_uri() . '/assets/js/jquery.lazy.plugins.min.js', array(), null, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), null, true);
    wp_enqueue_script('fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array(), null, true);
    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main-script.js', array(), null, true);
}

/**
 *
 */
add_action('after_setup_theme', 'theme_register_menus');
function theme_register_menus()
{
    register_nav_menus(array('main-menu' => 'Main Menu', 'sidebar-menu-top' => 'Sidebar Menu Top', 'sidebar-menu-bottom' => 'Sidebar Menu Bottom'));
}

/**
 *
 */
function new_submenu_class($menu) {
    $menu = preg_replace('/ class="sub-menu"/','/ class="dropdown-menu" /',$menu);
    return $menu;
}
add_filter('wp_nav_menu','new_submenu_class');


/**
 *
 */
add_action('after_setup_theme', 'theme_custom_post_thumbnails');
function theme_custom_post_thumbnails()
{
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'xsmall-post-thumb', 105, 61, true );
    add_image_size( 'small-post-thumb', 128, 191, true );
    add_image_size( 'medium-post-thumb', 270, 157, true );
    add_image_size( 'large-post-thumb', 370, 215, true );
    add_image_size( 'small-product-thumb', 174, 261, true );
    add_image_size( 'medium-product-thumb', 234, 350, true );
    add_image_size( 'large-product-thumb', 290, 433, true );
}

/**
 * @return bool|null|string|string[]
 */
function get_excerpt()
{
    $excerpt = get_the_content();
    $excerpt = preg_replace(" ([.*?])", '', $excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, 250);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = trim(preg_replace('/s+/', ' ', $excerpt));
    $excerpt = $excerpt . '[...]';
    return $excerpt;
}

function bittersweet_pagination() {

    global $wp_query;

    if ( $wp_query->max_num_pages <= 1 ) return;

    $big = 999999999;

    $pages = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'type'  => 'array',
    ) );
    if( is_array( $pages ) ) {
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<div class="pagination-wrap"><ul class="pagination">';
        foreach ( $pages as $page ) {
            echo "<li>$page</li>";
        }
        echo '</ul></div>';
    }
}
