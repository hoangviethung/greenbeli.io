<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <header class="site-header">
            <div class="container h-100">
                <div class="site-header-wrapper">
                    <a class="site-branding" href="index.html">
                        <?php if ( has_custom_logo() ) : ?>
                        <div class="site-logo"><?php the_custom_logo(); ?></div>
                        <?php endif; ?>
                    </a>
                    <div class="js-collapse-aside-menu-mobile"><i class="fal fa-bars"></i><i class="fal fa-times"></i>
                    </div>
                    <?php get_template_part( 'template-parts/header/site', 'navigation' ); ?>
                </div>
            </div>
        </header>
    </div>
    <div id="content" class="site-content"></div>
</body>