<?php

function remove_admin_bar() {
	//if (!current_user_can('administrator') && !is_admin()) {
	  show_admin_bar(false);
	//}
}

function jm_theme_styles() {
	wp_enqueue_style('bootstrap_css', get_template_directory_uri().'/
	assets/css/bootstrap.min.css');
	
	wp_enqueue_style('template_css', get_template_directory_uri().'/
	assets/css/template.css');	
	
	wp_enqueue_style('print_css', get_template_directory_uri().'/assets/css/print.css', 
	array('template_css'), false, 'print');
	
	wp_enqueue_script('bootstrap_js', get_template_directory_uri().'/
	assets/js/bootstrap.min.js', array('jquery'), false, true);
	
	wp_enqueue_script('script_js', get_template_directory_uri().'/
	assets/js/script.js', array('jquery', 'bootstrap_js'), false, true);
		
}

function jm_after_setup() {
	add_theme_support("post-thumbnails");
	add_theme_support("title-tag");
	add_theme_support("custom-logo");
	add_theme_support("post-formats", array('video','audio'));
	add_theme_support("custom-header", array(
		'default-image' => get_template_directory_uri().'/assets/images/headers/header2.jpg',
		'width' => 1280,
		'height' => 400,
		'flex-width' => true,
		'flex-height' => true		
	));
	
	register_default_headers(array(
		'header1' => array(
			'url' => get_template_directory_uri().'/assets/images/headers/header1.jpg',
			'thumbnail_url' => get_template_directory_uri().'/assets/images/headers/header1.jpg',
			'description' => 'Header 1'
		),
		'header2' => array(
			'url' => get_template_directory_uri().'/assets/images/headers/header2.jpg',
			'thumbnail_url' => get_template_directory_uri().'/assets/images/headers/header2.jpg',
			'description' => 'Header 2'
		),
		'header3' => array(
			'url' => get_template_directory_uri().'/assets/images/headers/header3.jpg',
			'thumbnail_url' => get_template_directory_uri().'/assets/images/headers/header3.jpg',
			'description' => 'Header 3'
		)
	));
	register_nav_menu("primary", "Menu Primário");
	register_nav_menu("top", "Menu Superior");
	
	load_theme_textdomain('minimag', get_template_directory().'/languages');
}

function jm_widgets() {
	register_sidebar(array(
		'name' => 'Sidebar Lateral',
		'id' => 'jm_sidebar',
		'description' => 'Sidebar Lateral',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget_title">',
		'after_title' => '</h4>'
		));
	register_sidebar(array(
		'name' => 'Sidebar Rodapé',
		'id' => 'jm_footersidebar',
		'description' => 'Sidebar Rodapé',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget_title">',
		'after_title' => '</h4>'
		));
}






