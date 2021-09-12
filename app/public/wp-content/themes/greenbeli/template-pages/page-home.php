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
                    <img class="lazyload" width="1920" height="520"
                        src=<?php echo get_theme_file_uri("/images/introduction-01.png") ?>
                        alt="GREEN-BELI-PLAY-TO-EARN">
                </div>
                <div class="content-wrapper">
                    <div class="container h-100">
                        <div class="content">
                            <div class="content__content">
                                <h3>GREEN BELI NFT GAME</h3>
                                <h2>The First Eco Friendly GameFi</h2>
                                <p>Keep calm and plant your NFT Tree!</p>
                                <p>Join our Greenbie community and help protect the Earth.</p>
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
                <img class="lazyload" width="56" height="56"
                    src=<?php echo get_theme_file_uri("/images/introduction-01.png") ?> alt="GREEN-BELI-BANNER">
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- CHARACTERS -->
<section class="characters" id="characters">
    <div class="container">
        <div class="section-title ta-c">
            <h3>characters</h3>
        </div>
        <div class="characters-slider">
            <div class="main-slider swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="wrapper">
                            <div class="img">
                                <img class="lazyload" width="400" height="400"
                                    src=<?php echo get_theme_file_uri("/images/fire.png") ?> alt="CHARACTER-FIRE">
                            </div>
                            <div class="info">
                                <h2>Fire</h2>
                                <p>Growing from coal, possessing the ability to withstand heat, helping regenerate dead
                                    lands.</p>
                                <p>Anti-fire, coal mining, anti-desertification.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="wrapper">
                            <div class="img">
                                <img class="lazyload" width="400" height="400"
                                    src=<?php echo get_theme_file_uri("/images/earth.png") ?> alt="CHARACTER-EARTH">
                            </div>
                            <div class="info">
                                <h2>Earth</h2>
                                <p>Where there is land, there are trees covering and maintaining fertility.</p>
                                <p>Preventing domestic waste, harmful microorganisms in the ground, reducing the risk of
                                    earthquakes and landslides.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="wrapper">
                            <div class="img">
                                <img class="lazyload" width="400" height="400"
                                    src=<?php echo get_theme_file_uri("/images/metal.png") ?> alt="CHARACTER-METAL">
                            </div>
                            <div class="info">
                                <h2>Metal</h2>
                                <p>Growing up from industrial and electronic wastes. The body is nourished by iron.</p>
                                <p>Preventing humans from using machines to cut forests and exploiting natural
                                    resources.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="wrapper">
                            <div class="img">
                                <img class="lazyload" width="400" height="400"
                                    src=<?php echo get_theme_file_uri("/images/water.png") ?> alt="CHARACTER-WATER">
                            </div>
                            <div class="info">
                                <h2>Water</h2>
                                <p>Having strong roots, helping maintain soil structure, reduce the flow rate, keep soil
                                    nutrients, prevent flooding.</p>
                                <p>Anti-flood, reduce drought, avoid soil erosion.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="wrapper">
                            <div class="img">
                                <img class="lazyload" width="400" height="400"
                                    src=<?php echo get_theme_file_uri("/images/wood.png") ?> alt="CHARACTER-WOOD">
                            </div>
                            <div class="info">
                                <h2>Wood</h2>
                                <p>Having an extraordinary ability to photosynthesize, turning CO2 into Oxygen even in
                                    the
                                    dark.</p>
                                <p>Against air pollution, smog, and noise pollution.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="thumbs-slider swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="img">
                            <img class="lazyload" width="160" height="160"
                                src=<?php echo get_theme_file_uri("/images/fire.png") ?> alt="CHARACTER-FIRE">
                        </div>
                        <div class="name">Fire</div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img">
                            <img class="lazyload" width="160" height="160"
                                src=<?php echo get_theme_file_uri("/images/earth.png") ?> alt="CHARACTER-EARTH">
                        </div>
                        <div class="name">Earth</div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img">
                            <img class="lazyload" width="160" height="160"
                                src=<?php echo get_theme_file_uri("/images/metal.png") ?> alt="CHARACTER-METAL">
                        </div>
                        <div class="name">Metal</div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img">
                            <img class="lazyload" width="160" height="160"
                                src=<?php echo get_theme_file_uri("/images/water.png") ?> alt="CHARACTER-WATER">
                        </div>
                        <div class="name">Water</div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img">
                            <img class="lazyload" width="160" height="160"
                                src=<?php echo get_theme_file_uri("/images/wood.png") ?> alt="CHARACTER-WOOD">
                        </div>
                        <div class="name">Wood</div>
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
                                src=<?php echo get_theme_file_uri("/images/farming.png") ?> alt="FEATURE-FARMING" />
                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                        </div>
                        <div class="item__content">
                            <h4>FARMING</h4>
                            <p>Enjoy our Solo Farming & Community Farming features and earn more GRBE. Explore our
                                Beneficiary Garden (no-loss jackpot) and get a chance to become the luckiest farmer.
                                Remember, higher Farming stats, higher returns.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="features__item">
                        <div class="item__img">
                            <img class="swiper-lazy" width="160" height="160"
                                src=<?php echo get_theme_file_uri("/images/gaming.png") ?> alt="FEATURE-GAMING" />
                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                        </div>
                        <div class="item__content">
                            <h4>Gaming</h4>
                            <p>Together we are strong! Train your NFT Trees and team up with other NFT trees joining
                                exciting turn-based boss battles. Try to win and move up the leaderboard!</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="features__item">
                        <div class="item__img">
                            <img class="swiper-lazy" width="160" height="160"
                                src=<?php echo get_theme_file_uri("/images/breeding.png") ?> alt="FEATURE-BREEDING" />
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
                                src=<?php echo get_theme_file_uri("/images/fusion.png") ?> alt="FEATURE-FUSION" />
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
                                src=<?php echo get_theme_file_uri("/images/nft-market.png") ?>
                                alt="FEATURE-NFT-MARKETPLACE" />
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
            <p>Collect and fuse your own NFT Trees, then join PvP and Farming to earn GRBE. Lands and NFT items that can
                be bought on NFT Marketplace will help you win more rewards. You can also improve the performance and
                stats of your NFT Trees through Breeding and Fusion.</p>
        </div>
        <div class="gameflow__image">
            <img class="lazyload" width="1068" height="472"
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
            <p>GRBE token is the game native token, enabling players to purchase in-game assets and enjoy all game
                features. GRBE can also be used as rewards and to exchange for NFT Tree. An amount of GRBE tokens will
                be burnt from time to time to keep the token price’s growth.</p>
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
                <img class="lazyload" width="722" height="708"
                    src=<?php echo get_theme_file_uri("/images/percentage.png") ?> alt="GREEN-BELI-ECOSYSTEM-FUND" />
            </div>
            <div class="percentage__content">
                <div class="section-title">
                    <h3>GREEN BELI'S ECOSYSTEM FUND</h3>
                </div>
                <p><b>Green Beli's Ecosystem Fund</b> is the total fund obtained from selling in-game assets (seeds,
                    land, and NFT items) and fees charged for activities performed on Green Beli platform, including
                    Breeding, Fusion and marketplace transactions.</p>
                <p>Green Beli commits <b>at least 30%</b> of Green Beli's Ecosystem Fund to go towards activities that
                    benefit the environment.</p>
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
            <img class="lazyload" width="1068" height="668"
                src=<?php echo get_theme_file_uri("/images/tokenomics.png") ?> alt="TOKENOMICS" />
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
            <h3>STATS</h3>
        </div>
        <div class="stats__content">
            <p>Green Beli takes great pride in successfully building a community of thousands of environment-lovers and
                spreading the message of environmental protection.</p>
        </div>
        <div class="stats-list">
            <div class="stat__item">
                <div class="value"><img class="lazyload" width="186" height="200"
                        src=<?php echo get_theme_file_uri("/images/stats-bg.png") ?> alt="STATS" />
                    <h4>50,038+</h4>
                </div>
                <p>TELEGRAM MEMBERS</p>
            </div>
            <div class="stat__item">
                <div class="value"><img class="lazyload" width="186" height="200"
                        src=<?php echo get_theme_file_uri("/images/stats-bg.png") ?> alt="STATS" />
                    <h4>34,842+</h4>
                </div>
                <p>TWITTER FOLLOWERS</p>
            </div>
            <div class="stat__item">
                <div class="value"><img class="lazyload" width="186" height="200"
                        src=<?php echo get_theme_file_uri("/images/stats-bg.png") ?> alt="STATS" />
                    <h4>24,424+</h4>
                </div>
                <p>DISCORD FOLLOWERS</p>
            </div>
            <div class="stat__item">
                <div class="value"><img class="lazyload" width="186" height="200"
                        src=<?php echo get_theme_file_uri("/images/stats-bg.png") ?> alt="STATS" />
                    <h4>61,056+</h4>
                </div>
                <p>FACEBOOK FOLLOWERS</p>
            </div>
        </div>
        <div class="stat__actions">
            <a class="bt bt--shadow bt--md bt--primary-2-light" href="https://greenbeli.gitbook.io/green-beli/stats"
                target="_blank" rel="noopener noreferrer">See more
                our campaigns</a>
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
                            <img class="swiper-lazy" width="150" height="150"
                                src=<?php echo get_theme_file_uri("/images/khoanguyen.png") ?> alt="KHOA-NGUYEN" />
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
                            <img class="swiper-lazy" width="150" height="150"
                                src=<?php echo get_theme_file_uri("/images/karenyle.jpg")?> alt="KARY-LE" />
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
                            <img class="swiper-lazy" width="150" height="150"
                                src=<?php echo get_theme_file_uri("/images/misuetran.jpg") ?> alt="MISUE-TRAN" />
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
                            <img class="swiper-lazy" width="150" height="150"
                                src=<?php echo get_theme_file_uri("/images/orinphan.jpg") ?> alt="THU-PHAN" />
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
                            <img class="swiper-lazy" width="150" height="150"
                                src=<?php echo get_theme_file_uri("/images/thaonguyen.png") ?> alt="THAO-NGUYEN" />
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
                            <img class="swiper-lazy" width="150" height="150"
                                src=<?php echo  get_theme_file_uri("/images/sahnbui.jpg") ?> alt="SAHN-BUI" />
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
                        <img width="150" height="150" class="lazyload"
                            src=<?php echo get_theme_file_uri("/images/victortruong.jpg") ?> alt="VICTOR-TRUONG" />
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
                        <img width="150" height="150" class="lazyload"
                            src=<?php echo get_theme_file_uri("/images/scofield.jpg")?> alt="SCOFIELD" />
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
                        <img width="150" height="150" class="lazyload"
                            src=<?php echo get_theme_file_uri("/images/crisdtran.jpg")?> alt="CRIS-D-TRAN" />
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
        <div class="partners-investors-slider swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img width="188" height="75" class="lazyload"
                        src=<?php echo get_theme_file_uri("/images/bscstation.png")?> alt="BSCStation" />
                </div>
                <div class="swiper-slide">
                    <img width="188" height="74" class="lazyload"
                        src=<?php echo get_theme_file_uri("/images/au21.png")?> alt="au21" />
                </div>
                <div class="swiper-slide">
                    <img width="188" height="62" class="lazyload"
                        src=<?php echo get_theme_file_uri("/images/basic-capital.png")?> alt="Basic-Capital" />
                </div>
                <div class="swiper-slide">
                    <img width="122" height="75" class="lazyload"
                    src=<?php echo get_theme_file_uri("/images/x21.png")?> alt="x21" />
                </div>
                <div class="swiper-slide">
                    <img width="158" height="75" class="lazyload"
                    src=<?php echo get_theme_file_uri("/images/m6.png")?> alt="m6" />
                </div>
                <div class="swiper-slide">
                    <img width="194" height="51" class="lazyload"
                    src=<?php echo get_theme_file_uri("/images/dreamboat.png")?> alt="dreamboat" />
                </div>
                <div class="swiper-slide">
                    <img width="164" height="75" class="lazyload" src=<?php echo get_theme_file_uri("/images/fim.png")?>
                        alt="FIM" />
                </div>
                <div class="swiper-slide">
                    <img width="188" height="68" class="lazyload" src=<?php echo get_theme_file_uri("/images/onebit.png")?>
                        alt="onebit" />
                </div>
                <div class="swiper-slide">
                    <img width="177" height="75" class="lazyload" src=<?php echo get_theme_file_uri("/images/vb-ventures.png")?>
                        alt="vb-ventures" />
                </div>
                <div class="swiper-slide">
                    <img width="188" height="71" class="lazyload" src=<?php echo get_theme_file_uri("/images/crypto-ic.png")?>
                        alt="crypto-ic" />
                </div>
                <div class="swiper-slide">
                    <img width="75" height="75" class="lazyload" src=<?php echo get_theme_file_uri("/images/titans.png")?>
                        alt="titans" />
                </div>
                <div class="swiper-slide">
                    <img width="188" height="61" class="lazyload" src=<?php echo get_theme_file_uri("/images/sgn.png")?>
                        alt="sgn" />
                </div>
                <div class="swiper-slide">
                    <img width="188" height="49" class="lazyload" src=<?php echo get_theme_file_uri("/images/moongems.png")?>
                        alt="moongems" />
                </div>
                <div class="swiper-slide">
                    <img width="83" height="75" class="lazyload" src=<?php echo get_theme_file_uri("/images/revel-lab.png")?>
                        alt="revel-lab" />
                </div>
                <div class="swiper-slide">
                    <img width="188" height="74" class="lazyload" src=<?php echo get_theme_file_uri("/images/astro.png")?>
                        alt="astro" />
                </div>
                <div class="swiper-slide">
                    <img width="177" height="75" class="lazyload" src=<?php echo get_theme_file_uri("/images/bas.png")?>
                        alt="bas" />
                </div>
                <div class="swiper-slide">
                    <img width="188" height="62" class="lazyload" src=<?php echo get_theme_file_uri("/images/ss-ventures.png")?>
                        alt="ss-ventures" />
                </div>
                <div class="swiper-slide">
                    <img width="155" height="75" class="lazyload" src=<?php echo get_theme_file_uri("/images/wild-cat.png")?>
                        alt="wild-cat" />
                </div>
                <div class="swiper-slide">
                    <img width="165" height="51" class="lazyload"
                        src=<?php echo get_theme_file_uri("/images/upfi.png")?> alt="upfi" />
                </div>
                <div class="swiper-slide">
                    <img width="103" height="75" class="lazyload"
                        src=<?php echo get_theme_file_uri("/images/df.png")?> alt="df" />
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
<?php get_template_part( 'template-parts/socials-fixed', 'socials-fixed' ); ?>