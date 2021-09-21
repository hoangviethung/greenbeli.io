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
                    <img width="150" height="150" class="lazyload"
                        src=<?php echo get_theme_file_uri("/images/logo.png") ?> alt="LOGO-GREEN-BELI-NFT" />
                </a>
                <div class="footer__nav">
                    <a class="bt bt--secondary" href="https://greenbeli.gitbook.io/green-beli/" target="_blank"
                        rel="noopener noreferrer">Documents</a>
                </div>
            </div>
            <div class="footer-right">
                <h3 class="footer__title">JOIN OUR COMMUNITIES</h3>
                <div class="footer__socials"><a href="https://twitter.com/Green_Beli" target="_blank"
                        rel="noopener noreferrer"><i class="fab fa-twitter"></i></a><a href="https://t.me/GreenBeli"
                        target="_blank" rel="noopener noreferrer"><i class="fab fa-telegram-plane"></i></a><a
                        href="https://medium.com/@greenbeli" target="_blank" rel="noopener noreferrer"><i
                            class="fab fa-medium-m"></i></a><a href="https://discord.gg/Uqa7PDeBqK" target="_blank"
                        rel="noopener noreferrer"><i class="fab fa-discord"></i></a><a
                        href="https://www.reddit.com/user/Green_Beli" target="_blank" rel="noopener noreferrer"><i
                            class="fab fa-reddit"></i></a></div>
            </div>
        </div>
    </div>
</footer>
<!-- AUDIT WEBSITE -->
<div class="audit-website">
    <div class="content">
        <p>Audited by</p>
        <?php 
            $image = get_field("logo_audit_website");
            if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
            width="<?php echo esc_attr($image['width']); ?>" height="<?php echo esc_attr($image['height']); ?>" />
        <?php endif; ?>
    </div>
    <a class="discover-more" href="https://www.certik.org/projects/green-beli" target="_blank" rel="noopener noreferrer">
        <span>Discover More</span>
        <i class="fal fa-long-arrow-right"></i>
    </a>
</div>
</div>

</div>

<?php wp_footer(); ?>

</body>

</html>