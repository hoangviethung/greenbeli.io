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
            <?php for($i=1;$i<2;$i++){ ?>
            <div class="swiper-slide">
                <div class="background">
                    <img src=<?php echo get_theme_file_uri("/images/introduction-01.png") ?> alt="GREEN-BELI-BANNER">
                </div>
                <div class="content-wrapper">
                    <div class="container h-100">
                        <div class="content">
                            <div class="content__content">
                                <h3>NFT Game</h3>
                                <h2>play to earn</h2>
                                <p>Let’s play and earn GRBE! Join the Meeb world and build a powerful team to battle
                                    against other players.</p>
                            </div>
                            <div class="content__actions">
                                <a href="#" class="bt bt--md bt--shadow bt--primary-2-light">Play now</a>
                                <a href="#" class="bt bt--md bt--shadow bt--secondary">Go to App</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="thumbs-slider swiper-container">
        <div class="swiper-wrapper">
            <?php for($i=1;$i<2;$i++){ ?>
            <div class="swiper-slide">
                <img src=<?php echo get_theme_file_uri("/images/introduction-01.png") ?> alt="GREEN-BELI-BANNER">
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- Mystery Seed-->
<!-- <section class="mystery-seed" id="mystery-seed">
    <div class="container">
        <div class="section-title ta-c">
            <h3>Mystery Seed</h3>
        </div>
        <div class="content">
            <div class="left">
                <img class="lazyload" width="722" height="738"
                    src=<?php echo get_theme_file_uri("/images/mistery-seed.png") ?> alt="Mystery-Seed" />
                <a class="bt bt--primary" href="#" target="_blank" rel="noopener noreferrer">Buy Now!</a>
            </div>
            <div class="right">
                <img class="lazyload" width="722" height="738"
                    src=<?php echo get_theme_file_uri("/images/mistery-seed.png") ?> alt="Mystery-Seed" />
            </div>
        </div>
    </div>
</section> -->
<!-- CHARACTERS -->
<section class="characters">
    <div class="container">
        <div class="section-title ta-c">
            <h3>characters</h3>
        </div>
        <div class="characters-slider">
            <div class="left">
                <div class="thumbs-slider swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide character-item active">
                            <div class="img">
                                <img src=<?php echo get_theme_file_uri("/images/fire.png") ?> alt="character-fire">
                            </div>
                            <div class="name">Fire</div>
                        </div>
                        <div class="swiper-slide character-item">
                            <div class="img">
                                <img src=<?php echo get_theme_file_uri("/images/earth.png") ?> alt="character-earth">
                            </div>
                            <div class="name">Earth</div>
                        </div>
                        <div class="swiper-slide character-item">
                            <div class="img">
                                <img src=<?php echo get_theme_file_uri("/images/metal.png") ?> alt="character-metal">
                            </div>
                            <div class="name">Metal</div>
                        </div>
                        <div class="swiper-slide character-item">
                            <div class="img">
                                <img src=<?php echo get_theme_file_uri("/images/water.png") ?> alt="character-water">
                            </div>
                            <div class="name">Water</div>
                        </div>
                        <div class="swiper-slide character-item">
                            <div class="img">
                                <img src=<?php echo get_theme_file_uri("/images/wood.png") ?> alt="character-wood">
                            </div>
                            <div class="name">Wood</div>
                        </div>
                    </div>
                    <div class="characters-information">
                        <div class="item-character-information show">
                            <h3>Fire</h3>
                            <p>Growing from coal, possessing the ability to withstand heat, helping regenerate dead
                                lands.</p>
                            <p>Anti-fire, coal mining, anti-desertification.</p>
                        </div>
                        <div class="item-character-information">
                            <h3>Earth</h3>
                            <p>Where there is land, there are trees covering and maintaining fertility.</p>
                            <p>Preventing domestic waste, harmful microorganisms in the ground, reducing the risk of
                                earthquakes and landslides.</p>
                        </div>
                        <div class="item-character-information">
                            <h3>Metal</h3>
                            <p>Growing up from industrial and electronic wastes. The body is nourished by iron.</p>
                            <p>Preventing humans from using machines to cut forests and exploiting natural resources.
                            </p>
                        </div>
                        <div class="item-character-information">
                            <h3>Water</h3>
                            <p>Having strong roots, helping maintain soil structure, reduce the flow rate, keep soil
                                nutrients, prevent flooding.</p>
                            <p>Anti-flood, reduce drought, avoid soil erosion.</p>
                        </div>
                        <div class="item-character-information">
                            <h3>Wood</h3>
                            <p>Having an extraordinary ability to photosynthesize, turning CO2 into Oxygen even in the
                                dark.</p>
                            <p>Against air pollution, smog, and noise pollution.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="main-slider swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src=<?php echo get_theme_file_uri("/images/fire.png") ?> alt="fire">
                        </div>
                        <div class="swiper-slide">
                            <img src=<?php echo get_theme_file_uri("/images/earth.png") ?> alt="earth">
                        </div>
                        <div class="swiper-slide">
                            <img src=<?php echo get_theme_file_uri("/images/metal.png") ?> alt="metal">
                        </div>
                        <div class="swiper-slide">
                            <img src=<?php echo get_theme_file_uri("/images/water.png") ?> alt="water">
                        </div>
                        <div class="swiper-slide">
                            <img src=<?php echo get_theme_file_uri("/images/wood.png") ?> alt="character-wood">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features-->
<section class="features" id="features">
    <div class="container">
        <div class="section-title ta-c">
            <h3>Features</h3>
        </div>
        <div class="features-slider swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="features__item">
                        <div class="item__img">
                            <img class="swiper-lazy" width="160" height="160"
                                src=<?php echo get_theme_file_uri("/images/farming.svg") ?> alt="FARMING" />
                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                        </div>
                        <div class="item__content">
                            <h4>FARMING</h4>
                            <p>Enjoy our Solo Farming & Community Farming features and earn more GBRE. Explore our
                                Beneficiary Garden (no-loss jackpot) and get a chance to become the luckiest farmer.
                                Remember, higher Farming stats, higher returns.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="features__item">
                        <div class="item__img">
                            <img class="swiper-lazy" width="160" height="160"
                                src=<?php echo get_theme_file_uri("/images/gaming.svg") ?> alt="GAMING" />
                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                        </div>
                        <div class="item__content">
                            <h4>Gaming</h4>
                            <p>Together we are strong! Train your NFT Trees and team up with other NFT trees to jointly
                                battle
                                against the Boss (Fire, Water, Wood, Soil, Metal). Try to win and move up the
                                leaderboard!</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="features__item">
                        <div class="item__img">
                            <img class="swiper-lazy" width="160" height="160"
                                src=<?php echo get_theme_file_uri("/images/breeding.svg") ?> alt="Breeding" />
                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                        </div>
                        <div class="item__content">
                            <h4>Breeding</h4>
                            <p>Breed new NFT Trees in the Regeneration Pool. The regenerating rate is random and depends
                                on the
                                balance of the NFT’s ecosystem.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="features__item">
                        <div class="item__img">
                            <img class="swiper-lazy" width="160" height="160"
                                src=<?php echo get_theme_file_uri("/images/fusion.svg") ?> alt="Fusion" />
                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                        </div>
                        <div class="item__content">
                            <h4>Fusion</h4>
                            <p>Increase your NFT Tree's star level by Fusion feature. The level of the star determines
                                the
                                damages the NFT Tree can make and the rewards it can receive.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="features__item">
                        <div class="item__img">
                            <img class="swiper-lazy" width="160" height="160"
                                src=<?php echo get_theme_file_uri("/images/nft-market.svg") ?> alt="NFT-Marketplace" />
                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                        </div>
                        <div class="item__content">
                            <h4>NFT Marketplace</h4>
                            <p>Game items can be traded through our in-game NFT marketplace with high liquidity. </p>
                        </div>
                    </div>
                </div>
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
            <h3>Game Flow</h3>
        </div>
        <div class="gameflow__content">
            <p>Collect and fuse your own NFT Trees, then join PvP and Farming to earn GBRE. Lands and NFT items that can
                be bought on NFT Marketplace can help you win more rewards. You can also improve the performance and
                stats of your NFT Trees through Breeding and Fusion.</p>
        </div>
        <div class="gameflow__image">
            <img class="lazyload" width="100%" height="100%"
                src=<?php echo get_theme_file_uri("/images/game-flow.png") ?> alt="GAME-FLOW" />
        </div>
    </div>
</section>
<!-- GRBE Token-->
<section class="grbe-token" id="grbe-token">
    <div class="container">
        <div class="section-title ta-c">
            <h3>GRBE Token</h3>
        </div>
        <div class="grbe_token__content">
            <p>GRBE token is the game token, enabling players to buy in-game assets and enjoy all game features. $GRBE
                can also be used as rewards and to exchange for NFT Tree. An amount of GRBE tokens will be burnt from
                time to time to keep the token price’s growth.</p>
        </div>
        <div class="grbe_token__image">
            <img class="lazyload" width="452" height="274"
                src=<?php echo get_theme_file_uri("/images/grbe-token.png") ?> alt="GRBE-TOKEN" />
        </div>
    </div>
</section>
<!-- Percentage-->
<section class="percentage" id="percentage">
    <div class="container">
        <div class="percentage__wrapper">
            <div class="percentage__image">
                <img class="lazyload" width="650" height="780"
                    src=<?php echo get_theme_file_uri("/images/percentage.png") ?> alt="GRBE-TOKEN" />
            </div>
            <div class="percentage__content">
                <div class="section-title">
                    <h3>GREEN BELI ECOSYSTEM FUND</h3>
                </div>
                <p><b>Green Beli Ecosystem Fund</b> is the total fund obtained from selling in-game assets (seeds, land, and NFT items) and fees charged for activities performed on Green Beli platform, including Breeding, Fusion and marketplace transactions.</p>
                <p>Green Beli commits <b>at least 30%</b> of Green Beli's Ecosystem Fund to go towards activities that benefit the environment.</p>
            </div>
        </div>
    </div>
</section>
<!-- Tokennomics-->
<section class="tokenomics" id="tokenomics">
    <div class="container">
        <div class="section-title ta-c">
            <h3>Tokenomics</h3>
        </div>
        <div class="tokenomics__image">
            <img src=<?php echo get_theme_file_uri("/images/tokenomics.png") ?> alt="tokennomics" />
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
            <h3>Stats</h3>
        </div>
        <div class="stats__content">
            <p>Green Beli commits at least 30% of the Green Beli Ecosystem Fund to go towards eco-activities.
                Accordingly, not only can you make good profits from participating in the game, you will also indirectly
                contribute to supporting activities that benefit the environment.</p>
            <p>Green Beli takes great pride in successfully building a community of thousands of environment-lovers and
                spreading the message of environmental protection.</p>
        </div>
        <div class="stats-list">
            <div class="stat__item wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">
                <div class="value"><img class="lazyload" src=<?php echo get_theme_file_uri("/images/stats-bg.png") ?>
                        alt="Stats" />
                    <h4>11M+</h4>
                </div>
                <p>TOP Facebook post reach</p>
            </div>
            <div class="stat__item wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">
                <div class="value"><img class="lazyload" src=<?php echo get_theme_file_uri("/images/stats-bg.png") ?>
                        alt="Stats" />
                    <h4>80,000+</h4>
                </div>
                <p>Followers on Facebook</p>
            </div>
            <div class="stat__item wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".6s">
                <div class="value"><img class="lazyload" src=<?php echo get_theme_file_uri("/images/stats-bg.png") ?>
                        alt="Stats" />
                    <h4>1,000+</h4>
                </div>
                <p>Green locations across Asia and worldwide</p>
            </div>
            <div class="stat__item wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".8s">
                <div class="value"><img class="lazyload" src=<?php echo get_theme_file_uri("/images/stats-bg.png") ?>
                        alt="Stats" />
                    <h4>50+</h4>
                </div>
                <p>Environmental activities and media campaigns</p>
            </div>
        </div>
        <div class="stat__actions"><a class="bt bt--shadow bt--md bt--primary-2-light"
                href="https://greenbeli.gitbook.io/green-beli/stats" target="_blank" rel="noopener noreferrer">See more
                our campaigns</a><a class="bt bt--shadow bt--md bt--secondary" href="https://www.facebook.com/GreenBeli"
                target="_blank" rel="noopener noreferrer">Visit our community on Facebook</a></div>
    </div>
</section>
<!-- Home Leadership-->
<section class="leadership">
    <div class="container">
        <div class="section-title ta-c">
            <h3>Meet our Leadership Team</h3>
        </div>
        <div class="leadership-slider swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="leadership-item">
                        <div class="leadership-img">
                            <img class="swiper-lazy" src=<?php echo get_theme_file_uri("/images/khoanguyen.png") ?>
                                alt="Khoa-Nguyen" />
                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                        </div>
                        <div class="leadership-info">
                            <h3>Khoa Nguyen</h3>
                            <h4>Co-founder</h4>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="leadership-item">
                        <div class="leadership-img">
                            <img class="swiper-lazy" src=<?php echo get_theme_file_uri("/images/karenyle.jpg")?>
                                alt="Kareny-Le" />
                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                        </div>
                        <div class="leadership-info">
                            <h3>Kary Le</h3>
                            <h4>Co-founder</h4>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="leadership-item">
                        <div class="leadership-img">
                            <img class="swiper-lazy" src=<?php echo get_theme_file_uri("/images/misuetran.jpg") ?>
                                alt="Misue-Tran" />
                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                        </div>
                        <div class="leadership-info">
                            <h3>Misue Tran</h3>
                            <h4>Co-founder</h4>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="leadership-item">
                        <div class="leadership-img">
                            <img class="swiper-lazy" src=<?php echo get_theme_file_uri("/images/orinphan.jpg") ?>
                                alt="Thu-Phan" />
                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                        </div>
                        <div class="leadership-info">
                            <h3>Thu Phan</h3>
                            <h4>Research & Development Lead</h4>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="leadership-item">
                        <div class="leadership-img">
                            <img class="swiper-lazy" src=<?php echo get_theme_file_uri("/images/thaonguyen.png") ?>
                                alt="Thao-Nguyen" />
                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                        </div>
                        <div class="leadership-info">
                            <h3>Thao Nguyen</h3>
                            <h4>Business Development</h4>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="leadership-item">
                        <div class="leadership-img">
                            <img class="swiper-lazy" src=<?php echo  get_theme_file_uri("/images/sahnbui.jpg") ?>
                                alt="Sahn-Bui" />
                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                        </div>
                        <div class="leadership-info">
                            <h3>Sahn Bui</h3>
                            <h4>Marketing Lead</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <section class="advisors">
        <div class="section-title ta-c">
            <h3>Advisors</h3>
        </div>
        <div class="container">
            <div class="advisors-list">
                <div class="advisor-item">
                    <div class="advisor-img">
                        <img class="lazyload" src=<?php echo get_theme_file_uri("/images/victortruong.jpg") ?>
                            alt="Victor-Truong" />
                    </div>
                    <div class="advisor-info">
                        <h3>Victor Truong</h3>
                        <h4>Co-founder at DeFi Warrior</h4>
                        <ul>
                            <li>FCCA, Certified Internal Auditor</li>
                            <li>10+ years in Business & Finance</li>
                            <li>4+ years in crypto investment</li>
                        </ul>
                    </div>
                </div>
                <div class="advisor-item">
                    <div class="advisor-img">
                        <img class="lazyload" src=<?php echo get_theme_file_uri("/images/scofield.jpg")?>
                            alt="Victor-Truong" />
                    </div>
                    <div class="advisor-info">
                        <h3>Scofield</h3>
                        <h4>Founder at BSC Station</h4>
                        <ul>
                            <li>5+ years in blockchain & cryptocurrency</li>
                            <li>4+ years in blockchain game market & the community development</li>
                        </ul>
                    </div>
                </div>
                <div class="advisor-item">
                    <div class="advisor-img">
                        <img class="lazyload" src=<?php echo get_theme_file_uri("/images/crisdtran.jpg")?>
                            alt="CRIS-D.TRAN" />
                    </div>
                    <div class="advisor-info">
                        <h3>Cris D.Tran</h3>
                        <h4>Co-founder at FAM Central</h4>
                        <ul>
                            <li>Former CEO – Infinity Blockchain Ventures</li>
                            <li>5+ years in crypto</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<!-- PARTNERS INVESTORS-->
<section class="partners-investors">
    <div class="container">
        <div class="section-title ta-c">
            <h3 class="txt-light">BACKERS & INVESTORS</h3>
        </div>
        <div class="partners-investors-list">
            <div class="item-investor">
                <img class="lazyload" src=<?php echo get_theme_file_uri("/images/fim.png")?> alt="FIM" />
            </div>
            <div class="item-investor">
                <img class="lazyload" src=<?php echo get_theme_file_uri("/images/upfi.png")?> alt="upfi" />
            </div>
            <div class="item-investor">
                <img class="lazyload" src=<?php echo get_theme_file_uri("/images/bscstation.png")?> alt="BSCStation" />
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>