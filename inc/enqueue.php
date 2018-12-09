<?php

    function makeup_cs_js(){
		wp_enqueue_style( 'favicon', get_template_directory_uri() . '/assets/images/favicon.ico', array(), '1.1', 'all');
		wp_enqueue_style( 'font_awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), '1.1', 'all');
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '1.1', 'all');
		wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.1', 'all');
		wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.css', array(), '1.1', 'all');
		wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.1', 'all');
		
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap-progressbar-3.3.4.css', array(), '1.1', 'all');
		wp_enqueue_style( 'default', get_template_directory_uri() . '/assets/css/theme-color/default-theme.css', array(), '1.1', 'all');
		wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/style.css', array(), '1.1', 'all');
		
		
		
		 wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array ( 'jquery' ), 1.1, true);
		   wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.js', array ( 'jquery' ), 1.1, true);
		   wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.mixitup.js', array ( 'jquery' ), 1.1, true);
		   wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.pack.js', array ( 'jquery' ), 1.1, true);
		   wp_enqueue_script( 'waypoint', get_template_directory_uri() . '/assets/js/waypoints.js', array ( 'jquery' ), 1.1, true);
		    wp_enqueue_script( 'cunterup', get_template_directory_uri() . '/assets/js/jquery.counterup.js', array ( 'jquery' ), 1.1, true);
			 wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.js', array ( 'jquery' ), 1.1, true);
		   wp_enqueue_script( 'boootstrap', get_template_directory_uri() . '/assets/js/bootstrap-progressbar.js', array ( 'jquery' ), 1.1, true);
		   wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array ( 'jquery' ), 1.1, true);
		  
		
		
		
	}
	add_action('wp_enqueue_scripts','makeup_cs_js');