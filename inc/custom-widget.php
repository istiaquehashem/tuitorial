<?php
  
    function blog_sideber(){
		
		  register_sidebar( array(
		     'name' => 'footer_sidebar',
    'id' => 'footer-widget',
    'description' => __( 'footer Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
    'before_widget' => '<div class="col-md-6 col-sm-6">',
	'after_widget'  => '</div> ',
	'before_title'  => '<div class="footer-left">',
	'after_title'   => '</div>',

		 ));
		 
		 	  register_sidebar( array(
		     'name' => 'header_sidebar',
    'id' => 'header-widget',
    'description' => __( 'header Widgets in this area will be shown the number and address.', 'theme-slug' ),
    'before_widget' => '<div class="col-md-6 col-sm-6 col-xs-6"><div class="header-contact">',
	'after_widget'  => '</div></div> ',
	'before_title'  => '<div class="col-md-6 col-sm-6 col-xs-6">',
	'after_title'   => '</div>',
		 ));
		
		
		
	}
	add_action('widgets_init','blog_sideber');