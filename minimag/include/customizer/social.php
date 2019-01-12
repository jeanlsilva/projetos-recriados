<?php 
function jm_social_customizer( $wp_customize ) {
	// Settings
	$wp_customize->add_setting('jm_facebook', array('default'=>''));
	$wp_customize->add_setting('jm_googleplus', array('default'=>''));
	$wp_customize->add_setting('jm_instagram', array('default'=>''));
	$wp_customize->add_setting('jm_twitter', array('default'=>''));
	$wp_customize->add_setting('jm_youtube', array('default'=>''));
	
	//Sections
	$wp_customize->add_section('jm_social_section', array(
		'title' => 'Redes Sociais',
		'priority' => '1',
		'panel' => 'opcoes'
	));
	//Controllers
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'jm_facebook',
			array(
				'label'=>'Link do Facebook',
				'section'=>'jm_social_section',
				'settings'=>'jm_facebook',
				'type'=> 'text'
			)
		)	
	);
	
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'jm_twitter',
			array(
				'label'=>'Link do Twitter',
				'section'=>'jm_social_section',
				'settings'=>'jm_twitter',
				'type'=> 'text'
			)
		)	
	);
	
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'jm_instagram',
			array(
				'label'=>'Link do Instagram',
				'section'=>'jm_social_section',
				'settings'=>'jm_instagram',
				'type'=> 'text'
			)
		)	
	);
	
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'jm_youtube',
			array(
				'label'=>'Link do Youtube',
				'section'=>'jm_social_section',
				'settings'=>'jm_youtube',
				'type'=> 'text'
			)
		)	
	);
	
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'jm_googleplus',
			array(
				'label'=>'Link do Google Plus',
				'section'=>'jm_social_section',
				'settings'=>'jm_googleplus',
				'type'=> 'text'
			)
		)	
	);
}