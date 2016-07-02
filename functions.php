<?php

	function register_my_menus(){

		register_nav_menus(
			array(
				'menu-header' =>  __('Menu del encabezado'),
				'menu-footer' =>  __('Menu del Footer') 
			)
			
		);
	}

	add_action('init', 'register_my_menus');


	function miplugin_register_sidebar(){
		register_sidebar(
			array(
				'id' => 'sidebar-footer',
				'name' => 'sidebar del Footer',
				'description' => 'Este es mi sidebar'
			)
		);
	}

	add_action('widgets_init', 'miplugin_register_sidebar');



?>