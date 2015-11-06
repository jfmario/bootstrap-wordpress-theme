<?php
 
    //Add support for WordPress 3.0's custom menus
    add_action( 'init', 'initialize' );
     
    //Register area for custom menu
    function initialize () {
        register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
            register_sidebar( array(
    		'name'          => __( 'Widget Area', 'bs' ),
    		'id'            => 'sidebar-1',
    		'description'   => __( 'Add widgets here to appear in your sidebar.', 'bs' ),
    		'before_widget' => '<div id="%1$s" class="panel panel-primary widget %2$s">',
    		'after_widget'  => '</div></div>',
    		'before_title'  => '<div class="panel-heading"><h3 class="panel-title widget-title">',
    		'after_title'   => '</h3></div><div class="panel-body">',
	    ) );
    }
?>