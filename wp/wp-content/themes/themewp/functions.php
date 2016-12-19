<?php 


add_theme_support( 'automatic-feed-links' );

  /*
   * Let WordPress manage the document title.
   * By adding theme support, we declare that this theme does not use a
   * hard-coded <title> tag in the document head, and expect WordPress to
   * provide it for us.
   */
  add_theme_support( 'title-tag' );

  /*
   * Enable support for custom logo.
   *
   *  @since Twenty Sixteen 1.2
   */
  add_theme_support( 'custom-logo', array(
    'height'      => 240,
    'width'       => 240,
    'flex-height' => true,
  ) );

// cai dat hỗ trợ theme
if ( ! function_exists( 'demowp_theme_setup' ) ) {
        /*
         * Nếu chưa có hàm thachpham_theme_setup() thì sẽ tạo mới hàm đó
         */
        function demowp_theme_setup() {
 
        }
        add_action ( 'init', 'demowp_theme_setup' );
 
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
            $stylesheet_url = get_template_directory_uri().'/css/';
            wp_enqueue_style( 'bootstrap',  $stylesheet_url.'bootstrap.css' );
            wp_enqueue_style( 'style', get_stylesheet_uri() );           
        }
    }
}
add_action( 'wp_enqueue_scripts', 'load_theme_styles' );
//load js
if(!function_exists('load_theme_js')){
    function load_theme_js(){
        if (!is_admin()) {
            $stylesheet_url = get_template_directory_uri().'/js/';
              wp_enqueue_script( 'jquery',$stylesheet_url.'jquery.js' );
              wp_enqueue_script( 'bootstrapmin',  $stylesheet_url.'bootstrapmin.js');
                     
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

function themewp_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Sidebar', 'themewp' ),
    'id'            => 'sidebar-1',
    'description'   => __( 'Add widgets here to appear in your sidebar.', 'themewp' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Content Bottom 1', 'themewp' ),
    'id'            => 'sidebar-2',
    'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'themewp' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Content Bottom 2', 'themewp' ),
    'id'            => 'sidebar-3',
    'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'themewp' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'themewp_widgets_init' );
 ?>

