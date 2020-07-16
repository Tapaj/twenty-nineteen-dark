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
	 * Changes post pagination style
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

    /**
	 * Removing author name from posts, 
     * remove this function if you add new authors
	 */
	function twentynineteen_posted_by() {
        // do nothing
    }
    
    /**
     * Filter for recipe titles
     */
    function recipe_titles($title, $id = null) {
        if( in_category( 'recipes', $id ) ) {
            $title = "Recipe: " . $title;
        }
        return $title;
    }

    add_filter( 'the_title', 'recipe_titles', 10, 2 );

    /**
     * Removing widgetized area of footer
     */
    function twentynineteen_child_theme_setup() {
        remove_action( 'widgets_init', 'twentynineteen_widgets_init' );

        // Add a secondary menu to the child theme
		register_nav_menus(
			array(
				'menu-2' => __( 'Secondary', 'twentynineteen' )
			)
		);
    }

    add_action( 'after_setup_theme', 'twentynineteen_child_theme_setup' );