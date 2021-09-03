<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'greenbeli' ); ?>">
    <?php
        wp_nav_menu(
            array(
                'theme_location' => 'primary',
                'menu_class' => 'navigation',
                "container" => false
            )
        );
    ?>
</nav>