<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	
	<!--
	    I have no idea what the following line is for, just saw it other themes.
	-->
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<!-- change the link in the href attribute to another bootswatch css file if you want -->
	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/cerulean/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.9.1/styles/default.min.css">
	
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.9.1/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    
	<title><?php bloginfo () ?></title>
</head>
<body>
    
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
            </div>
                <!--
                    be careful with editing this. it is very sensitive.
                -->
             	<?php  /* menu */
                 	wp_nav_menu( array(
                		'theme_location'    => 'primary-menu',
                		'menu'              => 'ul',
                		'depth'             => 1,
                		'container'         => '',
                		'container_class'   => false,
                		'container_id'      => '',
                		'menu_class'        => 'nav navbar-nav',
                        'menu_id'           => ''
            		));
    			?>
        </div>
    </nav>