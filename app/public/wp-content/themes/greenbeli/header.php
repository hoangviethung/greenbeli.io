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
        <header class="header-main">
            <div class="container h-100">
                <div class="header_wrapper"><a class="header__logo" href="index.html">
                        <?php get_template_part( 'template-parts/header/site', 'branding' ); ?></a>
                    <div class="js-collapse-aside-menu-mobile"><i class="fal fa-bars"></i><i class="fal fa-times"></i>
                    </div>
                    <div class="navigation">
                        <ul class="nav__list">
                            <li class="nav__item"><a href="https://greenbeli.gitbook.io/green-beli/" target="_blank"
                                    rel="noopener noreferrer">About Green Beli</a></li>
                            <li class="nav__item"><a href="#tokenomics">Tokenomics</a></li>
                            <li class="nav__item"><a href="#how-to-play">How to play</a></li>
                            <li class="nav__item"><a href="https://greenbeli.gitbook.io/green-beli/" target="_blank"
                                    rel="noopener noreferrer">Documents</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <div id="content" class="site-content"></div>
</body>