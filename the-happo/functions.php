<?php 
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', 'july-2');
}
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'happo' ),
            'menu-2' => esc_html__( 'Secundary', 'happo' )
		)
	);


function happo_files() {
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script('js', get_theme_file_uri('/build/index.js'), ['jquery'], _S_VERSION, TRUE);
    wp_enqueue_style('happo_main_styles', get_theme_file_uri('/build/style-index.css'), [], _S_VERSION);
    wp_enqueue_style('happo_extra_styles', get_theme_file_uri('/build/index.css'), [], _S_VERSION);
}


add_action('wp_enqueue_scripts', 'happo_files' );


function happo_features() {
 
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

}


add_action('after_setup_theme', 'happo_features');


add_action('admin_menu', function() {
   global $menu;

   add_menu_page('Home Page', 'Home Page', 'read', 'post.php?post=7&action=edit', '', 'dashicons-admin-home', 4);
   remove_menu_page('edit-comments.php');
});



