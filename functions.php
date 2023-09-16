<?php
function playground_setup() {
	remove_theme_support( 'widgets-block-editor' );
}
//add_action( 'after_setup_theme', 'playground_setup' );

function playground_scripts_and_styles() {
	$theme_uri = get_template_directory_uri();
	wp_enqueue_style( 'playground-style', $theme_uri . '/style.css' );
	wp_enqueue_script( 'playground-script', $theme_uri . '/assets/js/main.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'playground_scripts_and_styles' );

function playground_sidebar_registration() {
	$shared_args = array(
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	);

	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer 1', 'playground' ),
				'id'          => 'footer-1',
				'description' => __( 'Add widgets here.', 'playground' ),
			)
		)
	);

	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer 2', 'playground' ),
				'id'          => 'footer-2',
				'description' => __( 'Add widgets here.', 'playground' ),
			)
		)
	);

	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer 3', 'playground' ),
				'id'          => 'footer-3',
				'description' => __( 'Add widgets here.', 'playground' ),
			)
		)
	);

	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer 4', 'playground' ),
				'id'          => 'footer-4',
				'description' => __( 'Add widgets here.', 'playground' ),
			)
		)
	);
}
add_action( 'widgets_init', 'playground_sidebar_registration' );
