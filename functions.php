<?php
   
   require_once(get_template_directory().'/inc/enqueue.php');
   require_once(get_template_directory().'/inc/custom-widget.php');
   require_once( get_template_directory().'/theme-options/cs-framework.php'); 
   
   
	 
	 add_theme_support('title-tag');
		add_theme_support('custom-header');
		add_theme_support('custom-background');
		add_theme_support('post-thumbnails');
		
		register_nav_menus(array(
		
		  'header_menu'=>'header-menu',
		  'footer_menu'=>'footer-menu',		
		  
		));