<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package base_theme
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<footer class="footer">
    <div class="footer-top">
        <div class="footer-top-wrap">
            <div class="footer-content">
                <div class="footer-icon">
                    <a href="<?php echo get_home_url(); ?>">
                    <img src="<?php the_field('footer_logo', 'option'); ?>"
                        alt="<?php bloginfo( 'name' ); ?>">
                    </a>
                </div>
            </div>
            <div class="footer-content">
                <div class="address">
                    <span><?php the_field('footer_address', 'option'); ?></span>
                </div>
            </div>
            <div class="footer-content">
                <div class="footer-menu">
                    <?php if( have_rows('footer_menu_i' , 'option') ): ?>
                        <?php while( have_rows('footer_menu_i' , 'option') ): the_row(); ?>
                        <p><a href="<?php the_sub_field('page_links_i' , 'option'); ?>"><?php the_sub_field('page_name_i' , 'option'); ?></a></p>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="footer-content">
                <div class="policy-conditions">
                <?php if( have_rows('footer_menu_ii' , 'option') ): ?>
                        <?php while( have_rows('footer_menu_ii' , 'option') ): the_row(); ?>
                        <p><a href="<?php the_sub_field('page_links_ii' , 'option'); ?>"><?php the_sub_field('page_name_ii' , 'option'); ?></a></p>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="footer-content">
                <div class="footer-social">
                    <?php if( have_rows('social_icons' , 'option') ): ?>
                        <?php while( have_rows('social_icons' , 'option') ): the_row(); ?>
                        <a class="hvr-grow" href="<?php the_sub_field('social_url' , 'option'); ?>" target="_blank"><?php the_sub_field('social_icon' , 'option'); ?></a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="footer-bottom-wrap">
            <p>©<?php echo date("Y"); ?> LK Metrology. All rights reserved.</p>
        </div>
    </div>
</footer>

</div><!-- #page we need this extra closing tag here -->



<?php wp_footer(); ?>

</html>