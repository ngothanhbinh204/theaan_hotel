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

    <header id="masthead" class="site-header">
        <nav class="container wrapper_header">
            <div class="flex relative justify-between items-center z-50 inner_wrapper_header">
                <button id="menuToggle" class="flex flex-col items-center menu-toggle">
                    <div class="wrapper_line flex flex-col">
                        <div class="line_button bg-white rounded-full"></div>
                        <div class="line_button bg-white rounded-full"></div>
                        <div class="line_button bg-white rounded-full"></div>
                    </div>
                    <span class="text-white uppercase">Menu</span>
                </button>
                <div class="logo_custom">
                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                        echo esc_html(get_bloginfo('name'));
                    }
                    ?>
                </div>

                <div class="wrapper_call_btn flex flex-row gap-x-2 items-end    ">
                    <a href="#" id="ButtonCall" class="button_call flex flex-col items-center">
                        <div class="icon_call">
                            <img src="/wp-content/uploads/2025/03/phone-call.svg" alt="">
                        </div>
                        <span class="text-white uppercase">CALL</span>
                    </a>
                    <a class="languages" href="#">
                        ENG
                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 4.5L10 8.5L6 12.5" stroke="currentColor" stroke-width="1.6"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>

                    <a class=" button_header btn_anima button--hyperion" href="#">
                        <span>
                            <span> CHECK AVAILABILITY</span>
                        </span>
                    </a>
                </div>



            </div>

            <div id="menuContainer"
                class="fixed inset-0 bg-white transform -translate-y-full transition-transform duration-300 overflow-hidden">
                <div class="container mx-auto wrapper_menu">

                    <div id="menuContent" class="transition-opacity duration-300">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary-menu',
                            'container' => false,
                            'items_wrap' => '<div id="primary-menu-items" class="hidden">%3$s</div>'
                        ));
                        ?>
                    </div>

                    <a class="button_check" href="#">
                        CHECK AVAILABILITY
                    </a>
                </div>
            </div>
        </nav>
    </header>