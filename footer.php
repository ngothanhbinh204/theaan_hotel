<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theann-hotel
 */

?>

<footer id="colophon" class="site-footer">
    <div class="site-info flex flex-col gap-y-8 items-center">
        <!-- <a href="<?php echo esc_url(__('https://wordpress.org/', 'theann-hotel')); ?>">
            <?php
            printf(esc_html__('Proudly powered by %s', 'theann-hotel'), 'WordPress');
            ?>
        </a>
        <span class="sep"> | </span>
        <?php
        printf(esc_html__('Theme: %1$s by %2$s.', 'theann-hotel'), 'theann-hotel', '<a href="http://underscores.me/">Underscores.me</a>');
        ?> -->
        <div class="logo_footer">
            <?php
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
                echo esc_html(get_bloginfo('name'));
            }
            ?>
        </div>
        <?php
        if (has_nav_menu('footer_menu')) {
            $menu_items = wp_get_nav_menu_items(get_nav_menu_locations()['footer_menu']);

            if ($menu_items) {
                $total_items = count($menu_items);
                $split_index = $total_items - 3; // Split menu at 3 items from the end

                echo '<div class="footer-wrapper flex flex-row gap-x-9 justify-between">';

                // item chính
                echo '<div class="footer-box flex flex-row gap-x-9 justify-between main-footer">';
                echo '<nav class="footer-nav">';
                echo '<ul class="footer-menu">';
                for ($i = 0; $i < $split_index; $i++) {
                    echo '<li><a href="' . esc_url($menu_items[$i]->url) . '">' . esc_html($menu_items[$i]->title) . '</a></li>';
                }
                echo '</ul>';
                echo '</nav>';
                echo '</div>';

                //  3 item cuối
                echo '<div class="footer-box sub-footer">';
                echo '<nav class="footer-nav">';
                echo '<ul class="footer-menu">';
                for ($i = $split_index; $i < $total_items; $i++) {
                    echo '<li><a href="' . esc_url($menu_items[$i]->url) . '">' . esc_html($menu_items[$i]->title) . '</a></li>';
                }
                echo '</ul>';
                echo '</nav>';
                echo '</div>';

                echo '</div>'; // .footer-wrapper
            }
        }
        ?>


    </div><!-- .site-info -->

    <!-- Fullscreen Gallery -->
    <div class="fullscreen-gallery">
        <button class="close-button">×</button>
        <div class="gallery-content"></div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>