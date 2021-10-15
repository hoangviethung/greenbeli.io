<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package greenbeli
 */

get_header();
?>

<main id="primary" class="site-main">
    <section class="error-404 not-found">
        <img src=<?php echo get_theme_file_uri("/images/comingsoon.png") ?> alt="GREEN-BELI-NFT" />
    </section>
</main>

<?php
get_footer();
