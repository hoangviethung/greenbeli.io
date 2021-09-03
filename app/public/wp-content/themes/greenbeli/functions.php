<?php
    /**
     * Enqueue scripts and styles.
    */
    function university_files(){
        wp_enqueue_style("university_main_styles", get_stylesheet_uri());
    }
    add_action("wp_enqueue_scripts","university_files");
    
    if ( ! function_exists( 'greenbeli_setup' ) ) :
        /**
         * Sets up theme defaults and registers support for various WordPress features.
         *
         * Note that this function is hooked into the after_setup_theme hook, which
         * runs before the init hook. The init hook is too late for some features, such
         * as indicating support for post thumbnails.
        */
        function greenbeli_setup() {
            register_nav_menus(
                array(
                    'primary' => __('Primary', 'greenbeli' ),
                    'footer' => __( 'Footer Menu', 'greenbeli' ),
                    'social' => __('Social Links Menu', 'greenbeli' ),
                )
            );
            add_theme_support(
                'custom-logo',
                array(
                    'height'      => 190,
                    'width'       => 190,
                    'flex-width'  => false,
                    'flex-height' => false,
                )
            );
        }
    endif;
    add_action( 'after_setup_theme', 'greenbeli_setup' );
?>