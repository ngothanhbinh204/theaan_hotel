<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theann-hotel
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>



<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="site-header bg-white shadow-md">
        <nav class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <div class="text-xl font-bold">
                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                        echo esc_html(get_bloginfo('name'));
                    }
                    ?>
                </div>
                <button id="menuToggle" class="p-2 hover:bg-gray-100 rounded-lg" aria-label="Toggle Menu">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </button>
            </div>

            <div id="menuContainer"
                class="fixed inset-0 bg-white transform -translate-y-full transition-transform duration-300 z-50 overflow-hidden hidden">
                <div class="container mx-auto px-4 py-4">
                    <div class="flex justify-between items-center mb-8">
                        <h2 class="text-2xl font-bold">Menu</h2>
                        <button id="closeMenu" class="p-2 hover:bg-gray-100 rounded-lg text-2xl">
                            ×
                        </button>
                    </div>

                    <div id="menuContent" class="transition-opacity duration-300">
                        <?php
                        // The menu content will be populated by JavaScript
                        wp_nav_menu(array(
                            'theme_location' => 'primary-menu',
                            'container' => false,
                            'items_wrap' => '<div id="primary-menu-items" class="hidden">%3$s</div>'
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>