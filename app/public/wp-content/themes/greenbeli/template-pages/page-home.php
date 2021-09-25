<?php

/**
 * Template Name: Home Page
 */
?>
<?php get_header(); ?>
<!-- Itroduction-->
<section class="introduction" id="introduction">
    <div class="main-slider swiper-container">
        <div class="swiper-wrapper">
            <?php
            // Check rows exists.
            if (have_rows('hero_banners')) :
                // Loop through rows.
                while (have_rows('hero_banners')) : the_row();
                    // Load sub field value.
                    $text_1 = get_sub_field('text_1');
                    $text_2 = get_sub_field('text_2');
                    $description = get_sub_field('description');
                    $image = get_sub_field('image');
                    $link_1 = get_sub_field('actions')["link_1"];
                    $link_2 = get_sub_field('actions')["link_2"];
                    // Do something...
                    ?>
                    <div class="swiper-slide">
                        <div class="background">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="<?php echo esc_attr($image['width']); ?>" height="<?php echo esc_attr($image['height']); ?>" />
                        </div>
                        <div class="content-wrapper">
                            <div class="container h-100">
                                <div class="content">
                                    <div class="content__content">
                                        <h3><?php echo $text_2 ?></h3>
                                        <h2><?php echo $text_2 ?></h2>
                                        <?php echo $description ?>
                                    </div>
                                    <div class="content__actions">
                                        <?php
                                                if ($link_1) :
                                                    $link_url_1 = $link_1['url'];
                                                    $link_title_1 = $link_1['title'];
                                                    $link_target_1 = $link_1['target'] ? $link_1['target'] : '_self';
                                                    ?>
                                            <a class="bt bt--md bt--shadow bt--primary-light" href="<?php echo esc_url($link_url_1); ?>" target="<?php echo esc_attr($link_target_1); ?>"><?php echo esc_html($link_title_1); ?></a>
                                        <?php endif; ?>
                                        <?php
                                                if ($link_2) :
                                                    $link_url_2 = $link_2['url'];
                                                    $link_title_2 = $link_2['title'];
                                                    $link_target_2 = $link_2['target'] ? $link_2['target'] : '_self';
                                                    ?>
                                            <a class="bt bt--md bt--shadow bt--secondary" href="<?php echo esc_url($link_url_2); ?>" target="<?php echo esc_attr($link_target_2); ?>"><?php echo esc_html($link_title_2); ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                // End loop.
                endwhile;
            // No value.
            else :
            // Do something...
            endif;
            ?>
        </div>
    </div>
    <div class="thumbs-slider swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <?php
                // Check rows exists.
                if (have_rows('hero_banners')) :
                    // Loop through rows.
                    while (have_rows('hero_banners')) : the_row();
                        // Load sub field value.
                        $image = get_sub_field('image');
                        // Do something...
                        ?>
                        <div class="swiper-slide">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="<?php echo esc_attr($image['width']); ?>" height="<?php echo esc_attr($image['height']); ?>" />
                        </div>
                <?php
                    // End loop.
                    endwhile;
                // No value.
                else :
                // Do something...
                endif;
                ?>
            </div>
        </div>
    </div>
</section>
<!-- CHARACTERS -->
<section class="characters" id="characters">
    <div class="container">
        <div class="section-title ta-c">
            <h3><?php echo get_field("title_section_characters") ?></h3>
        </div>
        <div class="characters-slider">
            <div class="main-slider swiper-container">
                <div class="swiper-wrapper">
                    <?php
                    // Check rows exists.
                    if (have_rows('characters')) :
                        // Loop through rows.
                        while (have_rows('characters')) : the_row();
                            // Load sub field value.
                            $name = get_sub_field('name');
                            $description = get_sub_field('description');
                            $image = get_sub_field('image');
                            // Do something...
                            ?>
                            <div class="swiper-slide">
                                <div class="wrapper">
                                    <div class="img">
                                        <img class="swiper-lazy" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="<?php echo esc_attr($image['width']); ?>" height="<?php echo esc_attr($image['height']); ?>" />
                                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                    </div>
                                    <div class="info">
                                        <h2><?php echo $name ?></h2>
                                        <?php echo $description ?>
                                    </div>
                                </div>
                            </div>
                    <?php
                        // End loop.
                        endwhile;
                    // No value.
                    else :
                    // Do something...
                    endif;
                    ?>
                </div>
            </div>
            <div class="thumbs-slider swiper-container">
                <div class="swiper-wrapper">
                    <?php
                    // Check rows exists.
                    if (have_rows('characters')) :
                        // Loop through rows.
                        while (have_rows('characters')) : the_row();
                            // Load sub field value.
                            $image = get_sub_field('image');
                            // Do something...
                            ?>
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="<?php echo esc_attr($image['width']); ?>" height="<?php echo esc_attr($image['height']); ?>" />
                                </div>
                                <div class="name"><?php echo $character_item["name"] ?></div>
                            </div>
                    <?php
                        // End loop.
                        endwhile;
                    // No value.
                    else :
                    // Do something...
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features-->
<section class="features" id="features">
    <div class="container">
        <div class="section-title ta-c">
            <h3><?php echo get_field("title_section_features") ?></h3>
        </div>
        <div class="features-slider swiper-container">
            <div class="swiper-wrapper">
                <?php
                // Check rows exists.
                if (have_rows('features')) :
                    // Loop through rows.
                    while (have_rows('features')) : the_row();
                        // Load sub field value.
                        $name = get_sub_field('name');
                        $description = get_sub_field('description');
                        $image = get_sub_field('image');
                        // Do something...
                        ?>
                        <div class="swiper-slide">
                            <div class="features__item">
                                <div class="item__img">
                                    <img class="swiper-lazy" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="<?php echo esc_attr($image['width']); ?>" height="<?php echo esc_attr($image['height']); ?>" />
                                    <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                </div>
                                <div class="item__content">
                                    <h4><?php echo $name ?></h4>
                                    <p><?php echo $description ?></p>
                                </div>
                            </div>
                        </div>
                <?php
                    // End loop.
                    endwhile;
                // No value.
                else :
                // Do something...
                endif;
                ?>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>
<!-- Game Flow-->
<section class="gameflow" id="gameflow">
    <div class="container">
        <div class="section-title ta-c">
            <h3><?php echo get_field("title_section_gameflow") ?></h3>
        </div>
        <div class="gameflow__content">
            <p><?php echo get_field("content_section_gameflow") ?></p>
        </div>
        <div class="gameflow__image">
            <?php
            $image = get_field("image_section_gameflow");
            if (!empty($image)) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="<?php echo esc_attr($image['width']); ?>" height="<?php echo esc_attr($image['height']); ?>" />
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- GRBE Token-->
<section class="grbe-token" id="grbe-token">
    <div class="container">
        <div class="section-title ta-c">
            <h3><?php echo get_field("title_section_grbe_token") ?></h3>
        </div>
        <div class="grbe_token__content">
            <p><?php echo get_field("conten_section_grbe_token") ?></p>
        </div>
        <div class="grbe_token__image">
            <?php
            $image = get_field("image_section_rgbe_token");
            if (!empty($image)) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="<?php echo esc_attr($image['width']); ?>" height="<?php echo esc_attr($image['height']); ?>" />
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- ECOSYSTEM FUND -->
<section class="ecosystem-fund" id="ecosystem-fund">
    <div class="container">
        <div class="ecosystem_fund__wrapper">
            <div class="ecosystem_fund__image">
                <?php
                $image = get_field("image_section_ecosystem_fund");
                if (!empty($image)) : ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="<?php echo esc_attr($image['width']); ?>" height="<?php echo esc_attr($image['height']); ?>" />
                <?php endif; ?>
            </div>
            <div class="ecosystem_fund__content">
                <div class="section-title">
                    <h3><?php echo get_field("title_section_ecosystem_fund") ?></h3>
                </div>
                <?php echo get_field("content_section_ecosystem_fund") ?>
            </div>
        </div>
    </div>
</section>
<!-- Tokennomics-->
<section class="tokenomics" id="tokenomics">
    <div class="container">
        <div class="section-title ta-c">
            <h3><?php echo get_field("title_section_tokenomics") ?></h3>
        </div>
        <div class="tokenomics__image">
            <?php
            $image = get_field("image_section_tokenomics");
            if (!empty($image)) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="<?php echo esc_attr($image['width']); ?>" height="<?php echo esc_attr($image['height']); ?>" />
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Roadmap-->
<section class="roadmap" id="roadmap">
    <div class="container">
        <div class="section-title ta-c">
            <h3>Roadmap</h3>
        </div>
        <div class="roadmap__wrapper">
            <div class="roadmap__item">
                <div class="block-left"><span>1</span>
                    <h4>Q2/2021</h4>
                </div>
                <div class="block-right">
                    <div class="content">
                        <ul>
                            <li><i class="fad fa-check"></i><span> Game concept research</span></li>
                            <li><i class="fad fa-check"></i><span>Business model development</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="roadmap__item">
                <div class="block-left"><span>2</span>
                    <h4>Q3/2021</h4>
                </div>
                <div class="block-right">
                    <div class="content">
                        <ul>
                            <li><i class="fad fa-check"></i><span>Develop Token & NFT Game</span></li>
                            <li><i class="fad fa-check"></i><span>Public sale</span></li>
                            <li><i class="fad fa-check"></i><span>Initial Seed offering</span></li>
                            <li><i class="fad fa-check"></i><span>NFT Market</span></li>
                            <li><i class="fad fa-check"></i><span>Release Farming & Staking</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="roadmap__item">
                <div class="block-left"><span>3</span>
                    <h4>Q4/2021</h4>
                </div>
                <div class="block-right">
                    <div class="content">
                        <ul>
                            <li><i class="fad fa-check"></i><span>Game Beta release: PvP</span></li>
                            <li><i class="fad fa-check"></i><span>Release Breeding & Fusion</span></li>
                            <li><i class="fad fa-check"></i><span>Play to earn (P2E)</span></li>
                            <li><i class="fad fa-check"></i><span>Release Land & NFT items</span></li>
                            <li><i class="fad fa-check"></i><span>First big Green Beli sponsorship</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="roadmap__item">
                <div class="block-left"><span>4</span>
                    <h4>Q1/2022</h4>
                </div>
                <div class="block-right">
                    <div class="content">
                        <ul>
                            <li><i class="fad fa-check"></i><span>Cross-Chain NFT Market</span></li>
                            <li><i class="fad fa-check"></i><span>Championship</span></li>
                            <li><i class="fad fa-check"></i><span>Collateral Loan</span></li>
                            <li><i class="fad fa-check"></i><span>Community Growth</span></li>
                            <li><i class="fad fa-check"></i><span>Kick-off Green Beli Scholarship Program</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="roadmap__item">
                <div class="block-left"><span>5</span>
                    <h4>Q2/2022</h4>
                </div>
                <div class="block-right">
                    <div class="content">
                        <ul>
                            <li><i class="fad fa-check"></i><span>New game concept – voting by community</span></li>
                            <li><i class="fad fa-check"></i><span>Expand Green Beli Ecosystem Fund</span></li>
                            <li><i class="fad fa-check"></i><span>Connect NFT Game to real world</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Stats -->
<section class="stats">
    <div class="container">
        <div class="section-title ta-c">
            <h3><?php echo get_field("title_section_stats") ?></h3>
        </div>
        <div class="stats__content">
            <p><?php echo get_field("content_section_stats") ?></p>
        </div>
        <div class="stats-list">
            <?php
            // Check rows exists.
            if (have_rows('stats')) :
                // Loop through rows.
                while (have_rows('stats')) : the_row();
                    // Load sub field value.
                    $name = get_sub_field('name');
                    $value = get_sub_field('value');
                    // Do something...
                    ?>
                    <div class="stat__item">
                        <div class="value">
                            <?php
                                    $image = get_field("stats_item_background");
                                    if (!empty($image)) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="<?php echo esc_attr($image['width']); ?>" height="<?php echo esc_attr($image['height']); ?>" />
                            <?php endif; ?>
                            <h4><?php echo $value ?></h4>
                        </div>
                        <p><?php echo $name ?></p>
                    </div>
            <?php
                // End loop.
                endwhile;
            // No value.
            else :
            // Do something...
            endif;
            ?>
        </div>
        <div class="stat__actions">
            <?php
            $link = get_field('action_sectoin_stats_1')["link"];
            if ($link) :
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="<?php echo get_field('action_sectoin_stats_1')["class"] ?>" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Home Leadership-->
<section class="leadership">
    <div class="container">
        <div class="section-title ta-c">
            <h3><?php echo get_field("title_seciton_leadership") ?></h3>
        </div>
        <div class="leadership-slider swiper-container">
            <div class="swiper-wrapper">
                <?php
                // Check rows exists.
                if (have_rows('leaderships')) :
                    // Loop through rows.
                    while (have_rows('leaderships')) : the_row();
                        // Load sub field value.
                        $name = get_sub_field('name');
                        $position = get_sub_field('position');
                        $description = get_sub_field('description');
                        $image = get_sub_field('image');
                        // Do something...
                        ?>
                        <div class="swiper-slide">
                            <div class="leadership-item">
                                <div class="leadership-img">
                                    <img class="swiper-lazy" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="<?php echo esc_attr($image['width']); ?>" height="<?php echo esc_attr($image['height']); ?>" />
                                    <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                </div>
                                <div class="leadership-info">
                                    <h3><?php echo $name ?></h3>
                                    <h4><?php echo $position ?></h4>
                                </div>
                            </div>
                        </div>
                <?php
                    // End loop.
                    endwhile;
                // No value.
                else :
                // Do something...
                endif;
                ?>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <section class="advisors">
        <div class="section-title ta-c">
            <h3><?php echo get_field("title_section_advisors") ?></h3>
        </div>
        <div class="container">
            <div class="advisors-slider swiper-container">
                <div class="swiper-wrapper">
                    <?php
                    // Check rows exists.
                    if (have_rows('advisors')) :
                        // Loop through rows.
                        while (have_rows('advisors')) : the_row();
                            // Load sub field value.
                            $name = get_sub_field('name');
                            $position = get_sub_field('position');
                            $description = get_sub_field('description');
                            $image = get_sub_field('image');
                            // Do something...
                            ?>
                            <div class="swiper-slide">
                                <div class="leadership-item">
                                    <div class="leadership-img">
                                        <img class="swiper-lazy" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="<?php echo esc_attr($image['width']); ?>" height="<?php echo esc_attr($image['height']); ?>" />
                                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                    </div>
                                    <div class="leadership-info">
                                        <h3><?php echo $name ?></h3>
                                        <h4><?php echo $position ?></h4>
                                        <?php echo $description ?>
                                    </div>
                                </div>
                            </div>
                    <?php
                        // End loop.
                        endwhile;
                    // No value.
                    else :
                    // Do something...
                    endif;
                    ?>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
</section>
<!-- PARTNERS INVESTORS-->
<section class="partners-investors">
    <div class="container">
        <div class="section-title ta-c">
            <h3 class="txt-light"><?php echo get_field("title_section_backer_investors") ?></h3>
        </div>
        <div class="partners-investors-slider swiper-container">
            <div class="swiper-wrapper">
                <?php
                $images = get_field('investors');
                if ($images) : ?>
                    <?php foreach ($images as $image) : ?>
                        <div class="swiper-slide">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="<?php echo esc_attr($image['width']); ?>" height="<?php echo esc_attr($image['height']); ?>" />
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
<?php get_template_part('template-parts/socials-fixed', 'socials-fixed'); ?>