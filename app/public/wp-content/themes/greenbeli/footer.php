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

<footer id="colophon" class="site-footer">
    <div class="container">
        <div class="site-info">
            <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'greenbeli' ) ); ?>">
                <?php
				printf( esc_html__( 'Proudly powered by %s', 'greenbeli' ), 'WordPress' );
				?>
            </a>
            <span class="sep"> | </span>
            <?php
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'greenbeli' ), 'greenbeli', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
        </div>
</footer>
</div>

</div>

<?php wp_footer(); ?>

</body>

</html>