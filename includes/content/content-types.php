<?php

	add_action( 'init', 'content_init' );

	function content_init()
	{
		register_post_type( 
			'portfolio', 
			array(
				'supports' 			=> array( 'title', 'editor', 'thumbnail' ),
				'menu_position' 	=> 110,
				'public'			=> true,
				'show_ui'			=> true,
				'show_in_nav_menus'	=> true,
				'has_archive'		=> true,
				'label'				=> 'Portfolio',
				'labels'			=> array(
					'name'				=> 'Portfolio',
					'singular_name'		=> 'Project',
					'menu_name'			=> 'Portfolio',
					'add_new'			=> __('Nieuw project'),
				)
			)
		);

		register_taxonomy( 'project-type', 'portfolio', array(
			'label'					=> 'Project type',
			'hierarchical'			=> true
		) );

	}