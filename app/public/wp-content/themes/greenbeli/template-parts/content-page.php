<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package greenbeli
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
        <header class="entry-header">
            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        </header>

        <?php greenbeli_post_thumbnail(); ?>

        <div class="entry-content">
            <?php
                the_content();

                wp_link_pages(
                    array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'greenbeli' ),
                        'after'  => '</div>',
                    )
                );
            ?>
        </div>

        <?php if ( get_edit_post_link() ) : ?>
        <footer class="entry-footer">
            <?php
                    edit_post_link(
                        sprintf(
                            wp_kses(
                                __( 'Edit <span class="screen-reader-text">%s</span>', 'greenbeli' ),
                                array(
                                    'span' => array(
                                        'class' => array(),
                                    ),
                                )
                            ),
                            wp_kses_post( get_the_title() )
                        ),
                        '<span class="edit-link">',
                        '</span>'
                    );
                ?>
        </footer>
        <?php endif; ?>
    </div>
</article><?php the_ID(); ?>