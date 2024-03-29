<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package greenbeli
 */

?>

<!-- FOOTER -->
<footer id="colophon" class="site-footer">
    <div class="container">
        <div class="footer-wrapper">
            <div class="footer-left">
                <a class="footer__logo" href="/">
                    <img src=<?php echo get_theme_file_uri("/images/logo-green-belli-white.png") ?> alt="LOGO-GREEN-BELI-NFT" />
                </a>
                <div class="footer__nav">
                    <a class="bt bt--secondary" href="https://greenbeli.gitbook.io/green-beli/" target="_blank" rel="noopener noreferrer">Whitepaper</a>
                    <a class="bt bt--primary-light" href="/terms-of-use">Terms of Use</a>
                </div>
            </div>
            <div class="footer-right">
                <h3 class="footer__title">JOIN OUR COMMUNITIES</h3>
                <div class="footer__socials"><a href="https://twitter.com/Green_Beli" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a><a href="https://t.me/GreenBeli" target="_blank" rel="noopener noreferrer"><i class="fab fa-telegram-plane"></i></a><a href="https://medium.com/@greenbeli" target="_blank" rel="noopener noreferrer"><i class="fab fa-medium-m"></i></a><a href="https://discord.gg/Uqa7PDeBqK" target="_blank" rel="noopener noreferrer"><i class="fab fa-discord"></i></a><a href="https://www.facebook.com/GreenBeli" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook"></i></a></div>
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER AUDIT WEBSITE -->
<div class="footer-audit-website">
    <div class="content">
        <p>Audited by</p>
        <?php
        $image = get_field("logo_audit_website");
        if (!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="<?php echo esc_attr($image['width']); ?>" height="<?php echo esc_attr($image['height']); ?>" />
        <?php endif; ?>
    </div>
    <?php
    $link = get_field('link_audit_website');
    if ($link) :
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
        <a class="discover-more" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
            <span><?php echo esc_html($link_title); ?></span>
            <i class="fal fa-long-arrow-right"></i>
        </a>
    <?php endif; ?>
</div>
</div>

</div>

<?php wp_footer(); ?>

</body>

</html>