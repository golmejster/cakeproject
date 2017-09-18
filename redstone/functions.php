<?php 

//Script for collapse ACF field groups by default
add_action('acf/input/admin_head', 'my_acf_input_admin_head');
function my_acf_input_admin_head() {
?>
<script type="text/javascript">
jQuery(function(){
  jQuery('.acf_postbox').addClass('closed');
});
</script>
<?php
}

//CSS and JS connect
function redstone_scripts() {

	wp_enqueue_style( 'theme-min', get_template_directory_uri() . '/css/theme.min.css');	
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
	wp_enqueue_style( 'swiper', get_template_directory_uri() . '/css/swiper.css');

	wp_register_script( 'script_jquery', get_template_directory_uri() . '/js/jquery.js' );
    wp_enqueue_script( 'script_jquery');

    wp_register_script( 'script_jquery-migrate', get_template_directory_uri() . '/js/jquery-migrate.min.js' );
    wp_enqueue_script( 'script_jquery-migrate');

    wp_register_script( 'script_wp-embed', get_template_directory_uri() . '/js/wp-embed.min.js' );
    wp_enqueue_script( 'script_wp-embed');

    wp_register_script( 'script_swiper', get_template_directory_uri() . '/js/swiper.jquery.min.js' );
    wp_enqueue_script( 'script_swiper');

    wp_register_script( 'script_isotop', get_template_directory_uri() . '/js/isotope.pkgd.min.js' );
    wp_enqueue_script( 'script_isotop');

    wp_register_script( 'script_smoothscroll', get_template_directory_uri() . '/js/SmoothScroll.js' );
    wp_enqueue_script( 'script_smoothscroll');

    wp_register_script( 'script_global', get_template_directory_uri() . '/js/global.js' );
    wp_enqueue_script( 'script_global');
}

add_action( 'wp_enqueue_scripts', 'redstone_scripts' );
	//posts thumbnails
	add_theme_support('post-thumbnails');

// Register custom post type SLIDER
if (!function_exists('slider_post_types')):
    function slider_post_types() {
        register_post_type('Slider', array (
            'label' => 'Slider',
            'public'=> true,
            'publicly_queryable' => true,
            'menu_position' => null,
            'show ui' => true,
            'menu_icon'           => 'dashicons-format-gallery',
            'capability_type' => 'post',
            'hierarchical' => false,
            'rewrite' => true,
            'query_var' => true,
            'supports' => array (
                'title',
                'editor',
                'excerpt',
                'trackbacks',
                'custom-fields',
                'comments',
                'revisions',
                'thumbnail',
                'author',
                'page-attributes',)
        ));
    }
add_action('init', 'slider_post_types');
endif;

//Register menu
register_nav_menu ('menu222', 'My menu');
?>