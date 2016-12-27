<?php 
// cai dat hỗ trợ theme
if ( ! function_exists( 'demowp_theme_setup' ) ) {
    
        function themewp_setup() {
 
            add_theme_support( 'post-thumbnails', array( 'post' ) );
            set_post_thumbnail_size( 672, 372, true );
            add_image_size( 'themewp', 1038, 576, true );
        }
        add_action ( 'init', 'themewp_setup' );
 
  }
  //
if ( ! isset( $content_width ) ) {
	$content_width = 660;
}

//regester menu
register_nav_menus( array(
		'primary' => __( 'Primary Menu','themewp' ),
		'social'  => __( 'Social Links Menu', 'themewp' ),
	) );
//load css
if(!function_exists('load_theme_styles')){
    function load_theme_styles(){
        if (!is_admin()) {
            $stylesheet_url_css = get_template_directory_uri().'/css/';
            wp_enqueue_style( 'bootstrap',get_template_directory_uri().'/bootstrap/css/bootstrap.css' );
            wp_enqueue_style( 'reset',get_template_directory_uri().'/css/reset.css' );
            wp_enqueue_style( 'style', get_template_directory_uri().'/style.css' );
         wp_enqueue_style( 'responsive',get_template_directory_uri().'/css/responsive.css' );
        }
    }
}
add_action( 'wp_enqueue_scripts', 'load_theme_styles' );
//load js
if(!function_exists('load_theme_js')){
    function load_theme_js(){
        if (!is_admin()) {
            $stylesheet_url = get_template_directory_uri().'/js/';
            wp_enqueue_script( 'jquery','http://code.jquery.com/jquery-1.9.1.min.js' );
            wp_enqueue_script( 'slideshow',get_template_directory_uri().'/js/slideshow.js' );
           wp_enqueue_script( 'bootstrap.js',get_template_directory_uri().'/bootstrap/js/bootstrap.js');
            wp_enqueue_script( 'slideshow',get_template_directory_uri().'/js/main.js' );

                 
        }
    }
}
add_action( 'wp_enqueue_scripts', 'load_theme_js' );


/**
 * Add HTML5 theme support.
 */
function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );

//sub string
function excerpt($num) {
    $limit = $num+1;
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt)."...";
    return $excerpt;
}
//add post thumbnail


 ?>

