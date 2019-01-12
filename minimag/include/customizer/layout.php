<?php 
function jm_layout_customizer($wp_customize) {
	
	// Settings
	$wp_customize->add_setting('jm_topmenu_show', array('default' => 'yes'));
	$wp_customize->add_setting('jm_search_show', array('default' => 'yes'));
	$wp_customize->add_setting('jm_privacy_url', array('default' => 'yes'));
	
	// Sections
	$wp_customize->add_section('jm_layout_section', array(
		'title' => 'Opções de Layout',
		'priority' => 2,
		'panel' => 'opcoes'
	));
	
	// Controllers
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'jm_topmenu_show',
			array(
				'label' => 'Mostrar Menu Superior',
				'section' => 'jm_layout_section',
				'settings' => 'jm_topmenu_show',
				'type' => 'checkbox',
				'choices' => array(
					'yes' => 'Sim'
				)
			)
		)
	);
	
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'jm_search_show',
			array(
				'label' => 'Mostrar Busca',
				'section' => 'jm_layout_section',
				'settings' => 'jm_search_show',
				'type' => 'checkbox',
				'choices' => array(
					'yes' => 'Sim'
				)
			)
		)
	);
	
	
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'jm_privacy_url',
			array(
				'label' => 'Página de política de privacidade',
				'section' => 'jm_layout_section',
				'settings' => 'jm_privacy_url',
				'type' => 'dropdown-pages'			
			)
		)
	);
}