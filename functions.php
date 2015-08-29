<?php 

function ungu_setup(){
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(640,640, true);
	register_nav_menus(array(
		'top-menu' => __('Top Menu', 'unguku'),
		'main-menu' => __('Main Menu', 'unguku')
		));

}
add_action('after_setup_theme', 'ungu_setup');

function get_excerpt(){
	$excerpt = get_the_content();
	$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, 200);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
	return $excerpt;
}

function arphabet_widgets_init() {

	register_sidebar( array(
	'name' => 'Home right sidebar',
	'id' => 'home_right_1',
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div></div>',
	'before_title' => '<div class="w-title">',
	'after_title' => '</div><div class="wp-content" style="padding:10px;">'
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );


 ?>