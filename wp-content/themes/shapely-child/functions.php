<?php 

if(! function_exists('swopelaw_scripts')) :
    function swopelaw_scripts() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );

        $stylesheetURI = get_stylesheet_directory_uri();

        // wp_deregister_script( 'jquery' );
        // // Change the URL if you want to load a local copy of jQuery from your own server.
        // wp_register_script( 'jquery', "https://code.jquery.com/jquery-3.4.1.min.js", array(), '3.4.1', false );
        // wp_enqueue_script('jquery');

        wp_enqueue_style('slick-style', $stylesheetURI."/assets/js/slick-1.8.1/slick/slick.css");
        wp_enqueue_style('slick-theme', $stylesheetURI."/assets/js/slick-1.8.1/slick/slick-theme.css");
        wp_enqueue_script('slick', $stylesheetURI."/assets/js/slick-1.8.1/slick/slick.js");
        wp_enqueue_script('custom-scripts', $stylesheetURI."/assets/js/custom.js", array('slick'), null, true);
   }
endif;

add_action( 'wp_enqueue_scripts', 'swopelaw_scripts' );

?>