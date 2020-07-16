<?php
    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
    function my_theme_enqueue_styles() {
        
        // loading parent styles
        wp_enqueue_style( 
            'parent-style', 
            get_template_directory_uri() . '/style.css' 
        );

        // loading child styles
        wp_enqueue_style( 
            'child-style', 
            get_stylesheet_directory_uri() . '/style.css' , 
            array('parent-style') , 
            wp_get_theme()->get('Version') 
        );
    }

    /**
	 * Documentation for function.
	 */
	function twentynineteen_the_posts_navigation() {
		the_posts_pagination(
			array(
				'mid_size'  => 2,
				'prev_text' => '&laquo; <span class="nav-prev-text">Newer</span>',
				'next_text' => '<span class="nav-next-text">Older</span> &raquo;'
			)
		);
	}