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
            <div class="swiper-slide">
                <div class="background">
                    <?php 
                        $image = get_field('hero_banner_image');
                        if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                        width="<?php echo esc_attr($image['width']); ?>"
                        height="<?php echo esc_attr($image['height']); ?>" />
                    <?php endif; ?>
                </div>
                <div class="content-wrapper">
                    <div class="container h-100">
                        <div class="content">
                            <div class="content__content">
                                <h3><?php echo get_field("hero_banner_text_1") ?></h3>
                                <h2><?php echo get_field("hero_banner_text_2") ?></h2>
                                <?php echo get_field("hero_banner_text_3") ?>
                            </div>
                            <div class="content__actions">
                                <a href="#" class="bt bt--md bt--shadow bt--primary-light">Play now</a>
                                <a href="#" class="bt bt--md bt--shadow bt--secondary">Go to App</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="thumbs-slider swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <?php 
                        $image = get_field('hero_banner_image');
                        if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                    width="<?php echo esc_attr($image['width']); ?>"
                    height="<?php echo esc_attr($image['height']); ?>" />
                <?php endif; ?>
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
                    for ($i = 1; $i <= 5; $i++) { ?>
                    <?php $character_item = get_field("item_character_".$i); ?>
                    <div class="swiper-slide">
                        <div class="wrapper">
                            <div class="img">
                                <?php 
                                        $image = $character_item["image"];
                                        if( !empty( $image ) ): ?>
                                <img src="<?php echo esc_url($image['url']); ?>"
                                    alt="<?php echo esc_attr($image['alt']); ?>"
                                    width="<?php echo esc_attr($image['width']); ?>"
                                    height="<?php echo esc_attr($image['height']); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="info">
                                <h2><?php echo $character_item["name"] ?></h2>
                                <?php echo $character_item["information"] ?>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
            <div class="thumbs-slider swiper-container">
                <div class="swiper-wrapper">
                    <?php
                    for ($i = 1; $i <= 5; $i++) { ?>
                    <?php $character_item = get_field("item_character_".$i); ?>
                    <div class="swiper-slide">
                        <div class="img">
                            <?php 
                                        $image = $character_item["image"];
                                        if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>"
                                width="<?php echo esc_attr($image['width']); ?>"
                                height="<?php echo esc_attr($image['height']); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="name"><?php echo $character_item["name"] ?></div>
                    </div>
                    <?php }?>
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
                for ($i = 1; $i <= 5; $i++) { ?>
                <?php $feature_item = get_field("feature_item_".$i); ?>
                <div class="swiper-slide">
                    <div class="features__item">
                        <div class="item__img">
                            <?php 
                            $image = $feature_item["image"];
                            if( !empty( $image ) ): ?>
                            <img class="swiper-lazy" src="<?php echo esc_url($image['url']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>"
                                width="<?php echo esc_attr($image['width']); ?>"
                                height="<?php echo esc_attr($image['height']); ?>" />
                            <?php endif; ?>
                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                        </div>
                        <div class="item__content">
                            <h4><?php echo $feature_item["title"] ?></h4>
                            <p><?php echo $feature_item["content"] ?></p>
                        </div>
                    </div>
                </div>
                <?php }?>
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
            if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                width="<?php echo esc_attr($image['width']); ?>" height="<?php echo esc_attr($image['height']); ?>" />
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
            if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                width="<?php echo esc_attr($image['width']); ?>" height="<?php echo esc_attr($image['height']); ?>" />
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
                if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                    width="<?php echo esc_attr($image['width']); ?>"
                    height="<?php echo esc_attr($image['height']); ?>" />
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
            if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                width="<?php echo esc_attr($image['width']); ?>" height="<?php echo esc_attr($image['height']); ?>" />
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
                            <li><i class="fad fa-check"></i><span>Game Beta release: PvP</span></li>
                            <li><i class="fad fa-check"></i><span>Release Breeding & Fusion</span></li>
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
            <h3><?php echo get_field("title_section_stats")?></h3>
        </div>
        <div class="stats__content">
            <p><?php echo get_field("content_section_stats")?></p>
        </div>
        <div class="stats-list">
            <?php
            for ($i = 1; $i <= 4; $i++) { ?>
            <div class="stat__item">
                <?php $stat_item = get_field("stats_items_".$i); ?>
                <div class="value">
                    <?php 
                    $image = get_field("stats_item_background");
                    if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                        width="<?php echo esc_attr($image['width']); ?>"
                        height="<?php echo esc_attr($image['height']); ?>" />
                    <?php endif; ?>
                    <h4><?php echo $stat_item['value_item'] ?></h4>
                </div>
                <p><?php echo $stat_item['name_item'] ?></p>
            </div>
            <?php }?>
        </div>
        <div class="stat__actions">
            <a class="bt bt--shadow bt--md bt--primary-light" href="https://greenbeli.gitbook.io/green-beli/stats"
                target="_blank" rel="noopener noreferrer">See more
                our campaigns</a>
        </div>
</section>
<!-- Home Leadership-->
<section class="leadership">
    <div class="container">
        <div class="section-title ta-c">
            <h3><?php echo get_field("title_seciton_leadership")?></h3>
        </div>
        <div class="leadership-slider swiper-container">
            <div class="swiper-wrapper">
                <?php
                for ($i = 1; $i <= 6; $i++) { ?>
                <?php $item_leadership = get_field("item_leadership_".$i); ?>
                <div class="swiper-slide">
                    <div class="leadership-item">
                        <div class="leadership-img">
                            <?php 
                            $image = $item_leadership["avatar"];
                            if( !empty( $image ) ): ?>
                            <img class="swiper-lazy" src="<?php echo esc_url($image['url']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>"
                                width="<?php echo esc_attr($image['width']); ?>"
                                height="<?php echo esc_attr($image['height']); ?>" />
                            <?php endif; ?>
                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                        </div>
                        <div class="leadership-info">
                            <h3><?php echo $item_leadership["name"] ?></h3>
                            <h4><?php echo $item_leadership["position"] ?></h4>
                        </div>
                    </div>
                </div>
                <?php }?>
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
                    <?php for ($i=1; $i <= 5 ; $i++) { ?>
                    <?php $item_advisor = get_field("item_advisor_".$i) ?>
                    <div class="advisor-item swiper-slide">
                        <div class="advisor-img">
                            <?php 
                            $image = $item_advisor["avatar"];
                            if( !empty( $image ) ): ?>
                            <img class="swiper-lazy" src="<?php echo esc_url($image['url']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>"
                                width="<?php echo esc_attr($image['width']); ?>"
                                height="<?php echo esc_attr($image['height']); ?>" />
                            <?php endif; ?>
                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                        </div>
                        <div class="advisor-info">
                            <h3><?php echo $item_advisor["name"] ?></h3>
                            <h4><?php echo $item_advisor["postion"] ?></h4>
                            <?php echo $item_advisor["information"] ?>
                        </div>
                    </div>
                    <?php } ?>
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
                <?php for ($i = 1; $i <= 18; $i++) { ?>
                <?php
                    $images_investor = get_field("images_investor");
                    $image = $images_investor["item_".$i];
                    if( !empty( $image ) ): ?>
                <div class="swiper-slide">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                        width="<?php echo esc_attr($image['width']); ?>"
                        height="<?php echo esc_attr($image['height']); ?>" />
                </div>
                <?php endif; ?>
                <?php }?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
<?php get_template_part('template-parts/socials-fixed', 'socials-fixed'); ?>