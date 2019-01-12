<?php
//Include
require get_template_directory().'/include/setup.php';
require get_template_directory().'/include/customizer/theme-customizer.php';
require get_template_directory().'/include/ajax.php';

//Hooks
add_action('after_setup_theme', 'remove_admin_bar');
add_action("wp_enqueue_scripts", "jm_theme_styles");
add_action("after_setup_theme", "jm_after_setup");
add_action("widgets_init", "jm_widgets");
add_action("customize_register", "jm_customize_register");

/*
1. settings
2. sections
3. controllers
*/